<?php
/* Template Name: Trailcat Jim Archive Page */
get_header();
$args = codetipi_15zine_get_hero_design( $post->ID, true );
$layout = codetipi_15zine_get_article_layout( $post->ID, $args );
$post_wrap_class = codetipi_15zine_post_wrap_class( $post->ID, $args );
$has_sidebar = codetipi_15zine_sidebar_checker();
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
					?>
					<div class="postArchiveSelectContain cb-col-4">
						<?php
							get_template_part( 'partials/postYearsSelect' );
						?>
					</div>

					<div class="postArchiveSelectContain cb-col-4">
						<label for="postSeasonSelect">Season</label>
						<select style="width: 100%" name="postSeason" id="postSeasonSelect" class="select2 postArchiveSelect">
							<option value="">Select a season</option>
							<option value="winter">Winter</option>
							<option value="spring">Spring</option>
							<option value="summer">Summer</option>
							<option value="fall">Fall</option>
						</select>
					</div>

					<section id="postArchiveLoading" class="cb-hidden cb-col-<?php echo $has_sidebar ? 8 : 12 ?>">
						<div class="lds-dual-ring"></div>
					</section>

					<section class="cb-col-<?php echo $has_sidebar ? 8 : 12 ?>" id="postArchivePostsContain">
						<em><?php echo get_archive_default_text(); ?></em>
					</section>
					<?php
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