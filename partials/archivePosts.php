<?php 

/* Used to render posts for the custom archive page, 
based on the parent theme's "Blog Style H (Grid)" */

$cb_qry = cb_get_qry();
$i = 1;
$cb_ppp = 3;
           
if( count( $archive_posts ) ){
    ?>
    <div class="cb-grid-x cb-grid-3 cb-grid-3-static clearfix">
    <?php

    foreach($archive_posts as $cur_post){
        $cb_post_id = $cur_post->ID;
        $cb_feature_width = '378';
        $cb_feature_height = '300';
        $cb_feature_tile_size = 'cb-s';
        ?>

        <div class="cb-grid-feature cb-meta-style-2 cb-feature-<?php echo esc_attr( $i ) . ' ' . esc_attr( $cb_feature_tile_size ); ?>">

            <div class="cb-grid-img">
                <?php cb_thumbnail( $cb_feature_width, $cb_feature_height, $cb_post_id ); ?>
            </div>

            <div class="cb-article-meta">
                <h2><a href="<?php echo get_permalink( $cb_post_id ); ?>"><?php echo $cur_post->post_title; ?></a></h2>
                <?php cb_byline( $cb_post_id ); ?>
           </div>

           <a href="<?php echo get_permalink( $cb_post_id ); ?>" class="cb-link"></a>

        </div>

        <?php
        $i++;
        if ( $i == 4 ) { $i = 1; }
    }
    ?>
    </div>
    <?php
}