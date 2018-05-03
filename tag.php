<?php
        get_header();
        $cb_cats = get_the_category();
        $cb_tag_id = get_query_var('tag_id');
        $cb_blog_style = cb_get_blog_style();
        $cb_title = $cb_module_style = $cb_offset = $cb_order = $cb_orderby = $cb_filter = $cb_cat_id = $cb_post_ids = NULL;
        $j = 0;
        $cb_category_ad = NULL;
        $cb_featured_option = 'Off';
        $cb_full_site_width = $cb_grid_3 = false;
        if ( is_rtl() ) {
            $cb_slider_ltr_rtl = ' style="direction:ltr;"';
        } else {
            $cb_slider_ltr_rtl = NULL;
        }

        if ( function_exists( 'get_term_meta' ) ) {

            $cb_category_color_style = get_term_meta( $cb_tag_id, 'cb_cat_style_color', true );
            $cb_featured_option = get_term_meta( $cb_tag_id, 'cb_cat_featured_op', true );
            $cb_category_ad = get_term_meta( $cb_tag_id, 'cb_cat_ad', true );

        }
        if ( $cb_featured_option == NULL ) {
            $cb_featured_option = 'Off';
        }

        if ( ( $cb_featured_option == 'grid-3' ) || ( $cb_featured_option == 'grid-4' ) || ( $cb_featured_option == 'grid-5' ) || ( $cb_featured_option == 'grid-6' ) ) {
                $cb_ppp = substr( $cb_featured_option, -1 );
                if ( $cb_featured_option == 'grid-3' ) {
                    $cb_grid_3 = true;
                }
                $cb_featured_option = 'grid-x';
            }

             if ( $cb_featured_option == 's-2' ) {
            $cb_section = 'b';
        } else {
            $cb_section = 'a';
        }

        if ( $cb_featured_option == 's-1fw' ) {

            $cb_full_site_width = true;
            $cb_section = 'f';
            $cb_featured_option = 's-1';
            echo '<section id="cb-section-f" class="clearfix">';
            include( locate_template( 'library/modules/cb-' . $cb_featured_option . '.php' ) );
            echo '</section>';
        }
?>

<div id="cb-content" class="wrap cb-wrap-pad clearfix">

<?php
        if ( ( ( $cb_featured_option == 'grid-x' ) && ( $cb_grid_3 == false ) ) || ( ( $cb_full_site_width == false ) && ( $cb_featured_option == 's-1' )) || ( $cb_featured_option == 's-3' ) || ( $cb_featured_option == 's-5' ) ) {
            include( locate_template( 'library/modules/cb-' . $cb_featured_option . '.php' ) );
        }

        if ( ( $cb_featured_option == 's-3' ) || ( $cb_featured_option == 's-1' ) || ( $cb_featured_option == 'cb_full_off' ) || ( $cb_featured_option == 'Off' ) || ( ( $cb_featured_option == 'grid-x' ) && ( $cb_grid_3 == false ) ) || ( $cb_featured_option == 's-5' ) ) {
            echo '<div class="cb-main clearfix cb-module-block cb-blog-style-roll">';
        } else {
            echo '<div class="cb-main clearfix cb-module-block cb-blog-style-roll">';
            include( locate_template( 'library/modules/cb-' . $cb_featured_option . '.php' ) );
        }

            cb_breadcrumbs(); ?>
        <div class="cb-module-header cb-category-header">
            <?php the_archive_title( '<h1 class="cb-module-title">', '</h1>' ); ?>
            <?php the_archive_description(); ?>
        </div>

        <?php

            if ( $cb_category_ad != NULL ) {
                echo '<div class="cb-category-top cb-box">' . do_shortcode( $cb_category_ad ) . '</div>';
            }

            include( locate_template( 'blog-style-' . $cb_blog_style . '.php') );

        ?>

    </div> <!-- .cb-main -->

    <?php if ( cb_get_sidebar_check( $cb_blog_style ) == true ) { get_sidebar( 'tcjarchive' ); } ?>

</div> <!-- end /#cb-content -->

<?php get_footer(); ?>