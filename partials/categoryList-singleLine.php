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
			</strong> &mdash; 
			<em>
				<?php
				$separator = '&nbsp;|&nbsp;';
				$parentsMarkup = get_term_parents_list( $category->term_id, 'category', [
					'separator' => $separator,
					'inclusive' => false
				] );
				
				$trimmedParentsMarkup = preg_replace('/'.preg_quote( $separator ).'$/', '', $parentsMarkup);
				echo $trimmedParentsMarkup;
				?>
			</em>
		</p>

		<?php
	}
}
?>