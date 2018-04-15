<?php
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
	}

	wp_send_json( $months );
}

// AJAX response for returning a list of months to the front end based on a given year
add_action( 'wp_ajax_get_archive_posts', 'get_archive_posts' );
add_action( 'wp_ajax_nopriv_get_archive_posts', 'get_archive_posts' );
function get_archive_posts(){
	$year = filter_input( INPUT_POST, 'year', FILTER_VALIDATE_INT );
	$month = filter_input( INPUT_POST, 'month', FILTER_VALIDATE_INT );
	$posts = get_posts([
		'posts_per_page' => -1,
		'date_query' => [
			'year' => $year,
			'month' => $month
		]
	]);

	set_query_var( 'archive_posts', $posts );

	ob_start();
	get_template_part( 'partials/archivePosts' );
	$posts_markup = ob_get_contents();
	ob_end_clean();

	wp_send_json( $posts_markup );
}

function get_archive_default_text(){
	return 'Please select a year and month to view posts';
}