<?php
/* Template Name: Trailcat Jim Interactive Map Page */
get_header();
$args = codetipi_15zine_get_hero_design( $post->ID, true );
$layout = codetipi_15zine_get_article_layout( $post->ID, $args );
$post_wrap_class = codetipi_15zine_post_wrap_class( $post->ID, $args );
?>
<div id="cb-content" class="content-area clearfix">
	<div <?php post_class( $post_wrap_class ); ?>>
		<?php
		if ( $args['hero_design'] > 9 || 4 == $args['hero_design'] ) {
			codetipi_15zine_hero( $args );
		}
		?>
		<div class="single-content contents-wrap wrap side-spacing content-bg clearfix article-layout-<?php echo (int) $layout; ?><?php if ( empty( $args['fi'] ) ) { echo ' no-fi-wrap'; } ?><?php if ( $layout > 30 && $layout < 40 && 25 == $args['hero_design'] ) { echo ' limited-width-cut'; } ?>">
			<div class="tipi-cols clearfix">
				<?php
				while ( have_posts() ) :
					the_post();
					codetipi_15zine_single_bones( array(
						'style' => $args,
						'layout' => $layout,
					) );
				endwhile;
				codetipi_15zine_get_sidebar();
				?>
			</div>
		</div>
	</div>
</div>
<?php do_action( 'codetipi_15zine_page_end' ); ?>
<?php
get_footer();