<?php

if( is_admin() ){
	require_once get_stylesheet_directory() . '/classes/PostListingPage.php';
	$post_listing_page = new PostListingPage();

	require_once get_stylesheet_directory() . '/classes/ReportsPage.php';
	$post_listing_page = new ReportsPage();
}

require_once get_stylesheet_directory() . '/classes/TermListWidget.php';

// Register term list widget
add_action( 'widgets_init', 'tcj_register_widgets' );
function tcj_register_widgets() {
    register_widget( 'TrailCatJim\TermListWidget' );
}

// Enqueue the parsent theme styles, and child theme scripts/styles
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', ['parent-style'] );

	// Select2 script/styles
	wp_enqueue_script( 'select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js', ['jquery'] );
	wp_enqueue_style( 'select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css' );

	// Theme scripts
	wp_enqueue_script( 'site', get_stylesheet_directory_uri() . '/js/scripts.js', ['jquery'] );
	// Localize theme script with AJAX URL
	wp_localize_script( 'site', 'scriptParams', [ 
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'archiveDefaultText' => get_archive_default_text()
	] );

}

// Returns an array of years which have published posts
function get_published_post_years() {
	global $wpdb;
	$result = [];
	$years = $wpdb->get_results(
		"SELECT YEAR(post_date) FROM {$wpdb->posts} WHERE post_status = 'publish' AND post_type = 'post' GROUP BY YEAR(post_date) DESC",
		ARRAY_N
	);
	if( is_array( $years ) && count( $years ) > 0 ){
		foreach ( $years as $year ) {
			$result[] = $year[0];
		}
	}
	return $result;
}

// Returns an array of months in a given year which have published posts
function get_published_post_months_by_year($year) {
	global $wpdb;
	$result = [];
	$months = $wpdb->get_results(
		"SELECT MONTH(post_date), MONTHNAME(post_date) FROM {$wpdb->posts} WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '{$year}' GROUP BY MONTH(post_date) ASC",
		ARRAY_N
	);
	if( is_array( $months ) && count( $months ) > 0 ){
	    foreach( $months as $month ){
			$result[$month[0]] = $month[1];
		}
	}
	return $result;
}

// AJAX response for returning a list of months to the front end based on a given year
add_action( 'wp_ajax_get_archive_posts', 'get_archive_posts' );
add_action( 'wp_ajax_nopriv_get_archive_posts', 'get_archive_posts' );
function get_archive_posts($return = false){
	$year = filter_input( INPUT_POST, 'year', FILTER_VALIDATE_INT );
	$season = filter_input( INPUT_POST, 'season', FILTER_SANITIZE_STRING );

	$date_query = tcj_get_archive_date_query($year, $season);

	$query = [
		'posts_per_page' => -1,
		'order' => 'DESC',
	];

	if ($date_query) {
		$query['date_query'] = $date_query;
	}

	$grid = new Codetipi15zineBlockGrid([
		// A p value of 83 corresponds to a 3 column grid
		'p' => 83,
		'qry' => $query,
	]);
	$posts_markup = $grid->output(false);

	if( $return ){
		return $posts_markup;
	}

	wp_send_json( $posts_markup );
}

// Builds post query date_query array based on the provided year and season
function tcj_get_archive_date_query($year, $season){
	$date_query = [];
	if (!$year && !$season) {
		return $date_query;
	}

	if (!$season) {
		$date_query['year'] = $year;
	} else {
		$months = tcj_season_to_months($season);
		if ($months) {
			$date_query['relation'] = 'OR';
			foreach ($months as $month) {
				$month_query = ['month' => $month];
				if ($year) {
					$month_query['year'] = $year;
				}
				$date_query[] = $month_query;
			}
		}
	}

	return $date_query;
}

// Returns an array of months for the given season name
function tcj_season_to_months($season){
	if (strtolower($season) === 'winter') {
		return [12,1,2];
	}

	if (strtolower($season) === 'spring') {
		return [3,4,5];
	}

	if (strtolower($season) === 'summer') {
		return [6,7,8];
	}

	if (strtolower($season) === 'fall' || strtolower($season) === 'autumn') {
		return [9,10,11];
	}

	return [];
}

function get_archive_default_text(){
	return 'Please select a year and/or season to view posts';
}

// Builts an array of child categories which aren't a parent of another category
// This array is used to output a list of these categories on the front end
function build_custom_category_list($child_of = 0){
	$parents = get_category_parent_ids();
	
	// Array of arguments used when querying for categories to display
	// Only include categories without children, and include categories
	// which don't have posts
	$cat_args = [
		'taxonomy' => 'category',
		'hide_empty' => 0,
		'child_of' => intval( $child_of ),
		'orderby' => 'name'
	];

	// Query for matching categories
	$query = new WP_Term_Query( $cat_args );
	$categories = $query->get_terms();

	// Filter the results to those who aren't a parent
	// TODO: Using the arg of "childless" in conjunction with "child_of" results in an
	// empty array, so this is my workaround
	$childless_categories = array_filter( $categories, function( $cat ) use( $parents ){
		return !in_array( $cat->term_id, $parents );
	} );

	// Sort the array, since they are currently sorted based on their hierarchy
	usort( $childless_categories, function($a, $b){
		return strcmp( $a->name, $b->name );
	} );

	// Pass categories to partial to be rendered
	set_query_var( 'list_categories', $childless_categories );
	set_query_var( 'child_of', $child_of );
	get_template_part( 'partials/categoryList', 'singleLine' );

}

// Gets an array of cayegory ids which are the parent of another category
function get_category_parent_ids(){
	global $wpdb;
	$parents = $wpdb->get_col(
		"SELECT parent FROM wp_term_taxonomy WHERE taxonomy = 'category' GROUP BY parent"
	);

	return $parents;
}

// Register a custom sidebar to be used on archive templates
function tcj_register_archive_sidebar() {
    register_sidebar( array(
		'name' => __( 'Archive Sidebar', 'tcjtheme' ),
		'id' => 'tcj-archive-sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="cb-sidebar-widget-title cb-widget-title widget-title title">',
		'after_title' => '</h3>'
    ) );
}
add_action( 'widgets_init', 'tcj_register_archive_sidebar' );

// Add tags to category list shown with post previews
add_filter( 'codetipi_15zine_get_cats', function($useless_array_param, $pid, $categories_list) {
	$tags = get_the_terms( $pid, 'post_tag' );

	if (is_array($tags)) {
		return array_merge(
			(array) $categories_list,
			$tags
		);
	}

	return $categories_list;
}, 10, 3 );
