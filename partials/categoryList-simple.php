<?php

// Used to output a simple list of categories

if( count( $categories ) > 0 ){
	?>
	<div class="cb-byline byline byline-10 byline-shaded byline-cats-design-1">
		<div class="byline-part cats">
			<?php
			foreach($categories as $category){
				?>
				<a href="<?php echo get_term_link( $category ); ?>" class="cat">
					<?php echo $category->name ?>
				</a>
				<?php
			}
			?>
			<br />
			<br />
		</div>
	</div>
	<?php
}
?>