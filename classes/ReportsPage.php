<?php

class ReportsPage{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct(){
      add_action( 'admin_menu', [ $this, 'add_page' ] );
      add_action( 'admin_init', [ $this, 'page_init' ] );
      add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_scripts' ] );

      add_action( 'wp_ajax_get_missing_caption_report', [ $this, 'missing_captions_report_ajax_handler' ] );
      add_action( 'wp_ajax_get_missing_primary_categories_report', [ $this, 'missing_primary_category_report_ajax_handler' ] );
      add_action( 'wp_ajax_get_missing_featured_images_report', [ $this, 'missing_featured_image_report_ajax_handler' ] );
      add_action( 'wp_ajax_get_missing_no_crop_featured_images_report', [ $this, 'missing_no_crop_featured_image_setting_report_ajax_handler' ] );
      
    }

    public function enqueue_scripts(){
      wp_enqueue_script( 'wp-api' );
      wp_enqueue_script( 'rsvpjs', 'https://cdnjs.cloudflare.com/ajax/libs/rsvp/4.8.2/rsvp.min.js' );
      wp_enqueue_style( 'tcj-admin-styles', get_stylesheet_directory_uri() . '/css/admin-styles.css' );
    }

    /**
     * Add options page
     */
    public function add_page(){
        // This page will be in the admin menu
        add_menu_page(
            'TCJ Reports', 
            'TCJ Reports', 
            'manage_options', 
            'tcj-reports-admin', 
            [$this, 'create_admin_page'],
            'dashicons-chart-line'
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page(){
        get_template_part( 'partials/admin', 'tcjReports' );
    }

    /**
     * Register and add settings
     */
    public function page_init(){        
             
    }

    /**
     * Queries for attachments without a caption, and outputs a table of the info.
     * Meant to be called as an AJAX handler.
     */
    public function missing_captions_report_ajax_handler(){
        global $wpdb;

        // Get missing captions
        $query = "SELECT p.*
        FROM $wpdb->posts p
        WHERE p.post_excerpt = ''
            AND p.post_type = 'attachment'
            AND p.post_mime_type IN ('image/jpeg','image/gif','image/png','image/bmp','image/tiff','image/x-icon')";     
        $photosMissingCaptions = $wpdb->get_results($query);

        // Output report HTML
        set_query_var( 'photosMissingCaptions', $photosMissingCaptions );
        get_template_part( 'partials/admin', 'missingCaptionsReport' );

        wp_die();
    }

    /**
     * Queries for posts without a primary category, and outputs a table of the info.
     * Meant to be called as an AJAX handler.
     */
    public function missing_primary_category_report_ajax_handler(){
        global $wpdb;

        // Get missing primary categories
        $query = "SELECT p.*
        FROM $wpdb->posts p
        LEFT JOIN $wpdb->postmeta pm ON p.ID = pm.post_id AND pm.meta_key = '_yoast_wpseo_primary_category'
        WHERE p.post_type = 'post'
            AND p.post_status = 'publish'
            AND pm.meta_value IS NULL";     
        $postsMissingPrimaryCategory = $wpdb->get_results($query);

        // Output report HTML
        set_query_var( 'postsMissingPrimaryCategory', $postsMissingPrimaryCategory );
        get_template_part( 'partials/admin', 'missingPrimaryCategoriesReport' );

        wp_die();
    }

    /**
     * Queries for posts without a featured image, and outputs a table of the info.
     * Meant to be called as an AJAX handler.
     */
    public function missing_featured_image_report_ajax_handler(){
        global $wpdb;

        // Get missing featured images
        $query = "SELECT p.*
        FROM $wpdb->posts p
        LEFT JOIN $wpdb->postmeta pm ON p.ID = pm.post_id AND pm.meta_key = '_thumbnail_id'
        WHERE p.post_type = 'post'
            AND p.post_status = 'publish'
            AND pm.meta_value IS NULL";     
        $postsMissingFeaturedImage = $wpdb->get_results($query);

        // Output report HTML
        set_query_var( 'postsMissingFeaturedImage', $postsMissingFeaturedImage );
        get_template_part( 'partials/admin', 'missingFeaturedImageReport' );

        wp_die();
    }

    /**
     * Queries for posts without the "No Crop" featured image setting, and outputs a table of the info.
     * Meant to be called as an AJAX handler.
     */
    public function missing_no_crop_featured_image_setting_report_ajax_handler(){
        global $wpdb;

        // Get posts without "no crop" featured image setting
        $query = "SELECT p.*
        FROM $wpdb->posts p
        LEFT JOIN $wpdb->postmeta pm ON p.ID = pm.post_id AND pm.meta_key = 'cb_featured_image_style'
        WHERE p.post_type = 'post'
            AND p.post_status = 'publish'
            AND pm.meta_value != 'standard-uncrop'";     
        $postsWithoutNoCropFeaturedImage = $wpdb->get_results($query);

        // Output report HTML
        set_query_var( 'postsWithoutNoCropFeaturedImage', $postsWithoutNoCropFeaturedImage );
        get_template_part( 'partials/admin', 'postsWithoutNoCropFeaturedImageReport' );

        wp_die();
    }
}