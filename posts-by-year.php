<?php
        /* Template Name: Trailcat Jim Archive Page */
        get_header();
        $cb_page_id = get_the_ID();
        $cb_breadcrumbs = ot_get_option('cb_breadcrumbs', 'on');
        $cb_page_comments = get_post_meta( $cb_page_id, 'cb_page_comments', true );
        $cb_featured_image_style = get_post_meta( $cb_page_id, 'cb_featured_image_style', true );
        $cb_sidebar = get_post_meta( $cb_page_id, 'cb_full_width_post', true );
        $cb_page_title = get_post_meta( $cb_page_id, 'cb_page_title', true );

        if ( $cb_featured_image_style == NULL ) {
		    $cb_featured_image_style = 'standard';
		}
		if ( cb_is_woocommerce() == true ) {
			$cb_featured_image_style = 'off';
		}
        if ( $cb_featured_image_style == 'standard-uncrop' ) {
			$cb_featured_image_style = 'standard';
		}

        if ( cb_is_woocommerce() ) {
        	$cb_sidebar = ot_get_option('cb_woocommerce_sidebar', 'sidebar');
        }

		if ( ( $cb_featured_image_style != 'off' ) && ( $cb_featured_image_style != 'standard' )) { do_shortcode ( cb_featured_image_style( $cb_featured_image_style, $post, 'page-overlay' ) ); };
?>
        <div id="cb-content" class="wrap clearfix">
			
			<div class="cb-post-wrap cb-wrap-pad wrap clearfix<?php echo esc_attr( cb_get_post_sidebar_position() ); ?>">
	        
		        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="cb-main">
						
						<?php cb_breadcrumbs(); ?>
						<?php if ( ( $cb_featured_image_style != 'full-background' ) && ( $cb_featured_image_style != 'parallax' ) && ( $cb_featured_image_style != 'screen-width' ) && ( $cb_featured_image_style != 'site-width' ) && ( $cb_featured_image_style != 'full-width' ) && ( $cb_featured_image_style != 'background-slideshow' ) &&  ( $cb_page_title != 'off' ) ) {  ?>
					        <div class="cb-module-header cb-category-header">
					           <h1 class="cb-module-title"><?php the_title(); ?></h1>
						    </div>
					    <?php } ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

							<?php if ( ( ( $cb_featured_image_style == 'off' ) || ( $cb_featured_image_style == 'standard' ) ) && ( cb_is_woocommerce() == NULL ) ) { cb_featured_image_style( $cb_featured_image_style, $post, 'page' ); }; ?>

							<section class="cb-entry-content clearfix" itemprop="articleBody">
								<?php the_content(); ?>

								<div class="postArchiveSelectContain cb-col-4">
									<?php
										get_template_part( 'partials/postYearsSelect' );
									?>
								</div>

								<div class="postArchiveSelectContain cb-col-4">
									<label for="postMonthSelect">Month</label>
									<select style="width: 100%" name="postMonth" id="postMonthSelect" class="select2 postArchiveSelect"></select>
								</div>

								<section id="postArchiveLoading" class="cb-hidden cb-col-12">
									<div class="lds-dual-ring"></div>
								</section>

								<section class="cb-col-12" id="postArchivePostsContain">
									<em><?php echo get_archive_default_text(); ?></em>
								</section>
					     	</section> <!-- end article section -->

							<footer class="article-footer">

		                        <?php                                            

									wp_link_pages('before=<div class="cb-post-pagination clearfix">&after=</div>&next_or_number=number&pagelink=<span class="wp-link-pages-number">%</span>');
									the_tags('<p class="cb-tags"><span class="tags-title">' . __('Tags:', 'cubell') . '</span> ', '', '</p>');
									if ( $cb_page_comments == 'on' ) { comments_template(); } 

		                        ?>

							</footer> <!-- end article footer -->

							<?php   ?>

						</article> <!-- end article -->

						<?php endwhile; endif; ?>

				</div> <!-- end .cb-main -->

				<?php if ( ( $cb_sidebar != 'nosidebar' ) && ( $cb_sidebar != 'nosidebar-fw' ) ) { get_sidebar(); } ?>
			</div>

		</div> <!-- end #cb-content -->

<?php get_footer(); ?>