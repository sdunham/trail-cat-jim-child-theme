<?php

class PostListingPage{
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
        // This page will be in the amdin menu
        add_menu_page(
            'Post List', 
            'Post List', 
            'manage_options', 
            'post-listing-admin', 
            array( $this, 'create_admin_page' ),
            'dashicons-list-view'
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page(){
        get_template_part( 'partials/admin', 'postList' );
    }

    /**
     * Register and add settings
     */
    public function page_init(){        
             
    }
}