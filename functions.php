<?php

if( is_admin() ){
	require_once get_stylesheet_directory() . '/classes/PostListingPage.php';
	$post_listing_page = new PostListingPage();
}

// Enqueue the parsent theme styles, and child theme scripts/styles
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', ['parent-style'] );

	// Select2 script/styles
	wp_enqueue_script( 'select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js' );
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
add_action( 'wp_ajax_get_post_months_by_year', 'post_months_ajax_response' );
add_action( 'wp_ajax_nopriv_get_post_months_by_year', 'post_months_ajax_response' );
function post_months_ajax_response(){
	$year = filter_input( INPUT_POST, 'year', FILTER_VALIDATE_INT );
	$months = [];

	if( $year ){
		$months = get_published_post_months_by_year( $year );
		$posts_markup = get_archive_posts( true );
	}

	wp_send_json( ['months' => $months, 'postsMarkup' => $posts_markup] );
}

// AJAX response for returning a list of months to the front end based on a given year
add_action( 'wp_ajax_get_archive_posts', 'get_archive_posts' );
add_action( 'wp_ajax_nopriv_get_archive_posts', 'get_archive_posts' );
function get_archive_posts($return = false){
	$year = filter_input( INPUT_POST, 'year', FILTER_VALIDATE_INT );
	$month = filter_input( INPUT_POST, 'month', FILTER_VALIDATE_INT );

	$query = ['year' => $year];

	if( $month ){
		$query['month'] = $month;
	}

	$posts = get_posts([
		'posts_per_page' => -1,
		'date_query' => $query
	]);

	set_query_var( 'archive_posts', $posts );

	ob_start();
	get_template_part( 'partials/archivePosts' );
	$posts_markup = ob_get_contents();
	ob_end_clean();

	if( $return ){
		return $posts_markup;
	}

	wp_send_json( $posts_markup );
}

function get_archive_default_text(){
	return 'Please select a year and (optional) month to view posts';
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
		'before_widget' => '<div id="%1$s" class="cb-sidebar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="cb-sidebar-widget-title cb-widget-title">',
		'after_title' => '</h3>'
    ) );
}
add_action( 'widgets_init', 'tcj_register_archive_sidebar' );

// Override parent theme cb_clean_excerpt function to never return an excerpt
function cb_clean_excerpt ($cb_characters, $cb_read_more = NULL) {
    return '';
}

// Override parent theme cb_get_post_meta function so we can tack on tags with the categories
// If the parent theme used filters, this would have been waaaaay easier...
function cb_get_post_meta( $cb_post_id, $cb_override = NULL ) {

	$cb_comments = $cb_views = $cb_cat_output = $cb_readtime_output = $cb_readtime_output = $cb_lks_output = NULL;
	$cb_meta_onoff = ot_get_option('cb_meta_onoff', 'on');

	if ( $cb_meta_onoff == 'off' ) {
		return;
	}

	$cb_post_meta_category = ot_get_option('cb_byline_category', 'on');
	$cb_post_meta_views = ot_get_option('cb_byline_postviews', 'on');
	$cb_post_meta_comments = ot_get_option('cb_byline_comments', 'on');
	$cb_disqus_code = ot_get_option( 'cb_disqus_shortname', NULL );

	if ( $cb_post_meta_category != 'off' ) {

		$cb_cats = get_the_category($cb_post_id);

		if ( isset( $cb_cats ) && is_array( $cb_cats ) ) {
			foreach( $cb_cats as $cb_cat => $cb_val ) {
				$cb_cat_output .= '<span class="cb-category cb-element"><a href="' .  esc_url( get_category_link( $cb_val->term_id ) ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s", "cubell" ), $cb_val->name ) ) . '">' . $cb_val->cat_name . '</a></span>';
			}
		}

		// Add tags to the end of the category list
		$tcj_tags = get_the_terms( $cb_post_id, 'post_tag' );

		if ( isset( $tcj_tags ) && is_array( $tcj_tags ) ) {
			foreach( $tcj_tags as $cb_tag => $cb_val ) {
				$cb_cat_output .= '<span class="cb-category cb-element"><a href="' .  esc_url( get_term_link( $cb_val ) ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s", "cubell" ), $cb_val->name ) ) . '">' . $cb_val->name . '</a></span>';
			}
		}
	}

	if ( $cb_post_meta_comments != 'off' ) {
		if ( $cb_disqus_code == NULL ) {
			$cb_comments = '<span class="cb-comments cb-element"><a href="' . get_comments_link( $cb_post_id ) . '">' . get_comments_number_text( __( '0 Comments', 'cubell') ) . '</a></span>';
		} else {
			$cb_comments = '<span class="cb-comments cb-element"><a href="' . get_permalink( $cb_post_id ) . '#disqus_thread"></a></span>';
		}
	}


	if ( $cb_post_meta_views != 'off' ) {
		$cb_view_count = cb_get_post_viewcount( $cb_post_id );
		if ($cb_view_count != NULL ) {
			$cb_views = '<span class="cb-views cb-element">' . $cb_view_count . '</span>';
		}

	}



	if ( ot_get_option('cb_byline_lks', 'on') != 'off' ) {
		$cb_lks = cb_get_lks( $cb_post_id );
		$cb_lks_output =  apply_filters( 'cb_byline_lks', '<span class="cb-lks cb-element">' . $cb_lks . '</span>', $cb_lks );
	}

	if ( ot_get_option('cb_byline_readtime', 'off') != 'off' ) {
		$cb_readtime_output =  '<span class="cb-read-time cb-element"><a href="' . esc_url( get_permalink() ) . '">' . cb_reading_time() . '</a></span>';
	}

	if ( ( $cb_meta_onoff == 'on' ) || ( $cb_override == true ) ) {
		return '<div class="cb-post-meta">' . $cb_cat_output . $cb_comments . $cb_views . $cb_lks_output . $cb_readtime_output . '</div>';
	}

}