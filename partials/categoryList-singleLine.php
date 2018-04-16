<?php

// Used to output a list of categories, each formatted as a single line of text

if( count( $list_categories ) > 0 ){

	foreach($list_categories as $category){
		?>

		<p>
			<strong><?php echo $category->name ?></strong> &mdash; 
			<em>
				<?php
				$separator = '&nbsp;|&nbsp;';
				$parentsMarkup = get_category_parents( $category->term_id, true, $separator );
				$trimmedParentsMarkup = preg_replace('/'.preg_quote( $separator ).'$/', '', $parentsMarkup);
				echo $trimmedParentsMarkup;
				?>
			</em>
		</p>

		<?php
	}
}
?>