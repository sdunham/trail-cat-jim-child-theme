<?php
	$posts = get_posts( [
		'numberposts' => -1
	] );
	$num = 1;
?>

<h1>Post List Page</h1>

<p>
	<strong>This page is intended to be an easily scannable and printable list of all posts on the Trailcat Jim site.</strong>
</p>

<section id="post-list-contain">
	<table>
		<tr>
			<th>#</th>
			<th>Post Name</th>
			<th>Categories</th>
			<th>Tags</th>
		</tr>
	<?php foreach( $posts as $post ): ?>
		<tr>
			<td style="text-align: center;"><?php echo $num; ?></td>
			<td>
				<a href="<?php echo get_permalink( $post ); ?>" target="_blank"><?php echo $post->post_title; ?></a> 
				(<?php echo date( 'M j, Y', strtotime( $post->post_date ) ); ?>)
			</td>
			<td>
				<?php echo get_the_category_list( ', ', '', $post->ID ); ?>
			</td>
			<td>
				<?php echo get_the_tag_list( '', ', ', '', $post->ID ); ?>
			</td>
		</tr>
	<?php
		$num++;
		endforeach;
	?>
	</table>
</section>