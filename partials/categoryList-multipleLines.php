<?php

// Used to output a list of categories, each formatted as multiple lines of text

if( count( $list_categories ) > 0 ){

	foreach($list_categories as $category){
		?>
		
		<h4>
			<a href="<?php echo get_term_link( $category ); ?>">
				<?php echo $category->name ?>
			</a>
		</h4>
		<?php if( $category->description ): ?>
			<p>
				<em>
					<?php echo $category->description; ?>
				</em>
			</p>
		<?php endif; ?>


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
		<p>
			<strong>
				<?php echo $trimmedParentsMarkup; ?>
			</strong>
		</p>
		<?php endif; ?>
		
		<?php
	}
}
?>