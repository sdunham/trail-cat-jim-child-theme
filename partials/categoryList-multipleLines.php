<?php

// Used to output a list of categories, each formatted as multiple lines of text

if( count( $list_categories ) > 0 ){

	foreach($list_categories as $category){
		?>
		
		<h4><?php echo $category->name ?></h4>
		<?php if( $category->description ): ?>
			<p>
				<em>
					<?php echo $category->description; ?>
				</em>
			</p>
		<?php endif; ?>
		<p>
			<strong>
				<?php
				$separator = '&nbsp;|&nbsp;';
				$parentsMarkup = get_category_parents( $category->term_id, true, $separator );
				$trimmedParentsMarkup = preg_replace('/'.preg_quote( $separator ).'$/', '', $parentsMarkup);
				echo $trimmedParentsMarkup;
				?>
			</strong>
		</p>
		
		<?php
	}
}
?>