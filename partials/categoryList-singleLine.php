<?php

// Used to output a list of categories, each formatted as a single line of text

if( count( $list_categories ) > 0 ){

	foreach($list_categories as $category){
		?>

		<p>
			<strong>
				<a href="<?php echo get_term_link( $category ); ?>">
					<?php echo $category->name ?>
				</a>
			</strong> 

			<?php
				$separator = '&nbsp;|&nbsp;';
				// Get the parents of this category, formatted as a list of links separated by our separator string
				$parentsMarkup = get_term_parents_list( $category->term_id, 'category', [
					'separator' => $separator,
					'inclusive' => false
				] );
				
				// If the categories being rendered are children of a category, remove the parent from the beginning of the list
				$trimmedParentsMarkup = ( (bool)$child_of ? strstr( $parentsMarkup, $separator ) : $parentsMarkup );
				// Ensure the separator is removed from the beginning and end of the list
				$trimmedParentsMarkup = preg_replace(
					'/(^'.preg_quote( $separator ).')|('.preg_quote( $separator ).'$)/',
					'',
					$trimmedParentsMarkup
				);
			?>

			<?php if( $trimmedParentsMarkup ): ?>
			&mdash; 
			<em>
				<?php echo $trimmedParentsMarkup; ?>
			</em>
			<?php if( $category->count > 0 ): ?>
				(Reports: <?php echo $category->count; ?>)
			<?php endif; ?>
			<?php endif; ?>
		</p>

		<?php
	}
}
?>