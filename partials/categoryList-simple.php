<?php

// Used to output a simple list of categories

if( count( $categories ) > 0 ){
	?>
	<div class="cb-post-meta">
	<?php
	foreach($categories as $category){
		?>
		<span class="cb-category cb-element">
			<a href="<?php echo get_term_link( $category ); ?>">
				<?php echo $category->name ?>
			</a>
		</span>
		<?php
	}
	?>
	</div>
	<?php
}
?>