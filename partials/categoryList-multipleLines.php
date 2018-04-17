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
		<p>
			<strong>
				<?php
				$separator = '&nbsp;|&nbsp;';
				$parentsMarkup = get_term_parents_list( $category->term_id, 'category', [
					'separator' => $separator,
					'inclusive' => false
				] );
				
				$trimmedParentsMarkup = preg_replace('/'.preg_quote( $separator ).'$/', '', $parentsMarkup);
				echo $trimmedParentsMarkup;
				?>
			</strong>
		</p>
		
		<?php
	}
}
?>