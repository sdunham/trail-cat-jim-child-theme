<?php
get_header();
$p = codetipi_15zine_preview_check();
$tid = codetipi_15zine_get_term_id();
$featured = codetipi_15zine_feature_block_check( 'archive', $tid );
codetipi_15zine_feature_block( array(
	'location' => 1,
	'block' => $featured,
	'tid' => $tid,
	'section' => 'f',
) );
?>
<div id="cb-content" class="<?php esc_attr( codetipi_15zine_archive_layout_class() ); ?>">
	<?php
	codetipi_15zine_feature_block( array(
		'location' => 2,
		'block' => $featured,
		'tid' => $tid,
		'section' => 'a',
	) );
	?>
	<div class="tipi-cols clearfix">
		<div id="main" class="<?php esc_attr( codetipi_15zine_main_class() ); ?>">
			<?php
			codetipi_15zine_feature_block( array(
				'location' => 3,
				'block' => $featured,
				'tid' => $tid,
			) );
			codetipi_15zine_get_archive_ad( array( 'tid' => $tid ) );
			codetipi_15zine_breadcrumbs();
			codetipi_15zine_title_box();
			// START CUSTOMIZATION
			// Added to original template: Output a list of subcategories for the current category
			$children = get_terms( 'category', [ 'parent' => $tid, 'hide_empty' => false ] );
			set_query_var( 'categories', $children );
			get_template_part( 'partials/categoryList', 'simple' );
			// END CUSTOMIZATION
			codetipi_15zine_main_layout( array(
				'p' => $p,
				'feature_block' => $featured,
			) );
			?>
		</div>
        <?php // START CUSTOMIZATION ?>
		<?php //codetipi_15zine_get_sidebar( array( 'archive' => $p ) ); ?>
        <?php
            $show_sidebar = codetipi_15zine_sidebar_checker(['archive' => $p]);
            if ($show_sidebar) {
                get_sidebar( 'tcjarchive' );
            }
        ?>
		<?php // END CUSTOMIZATION ?>
	</div>
</div>
<?php
get_footer();
