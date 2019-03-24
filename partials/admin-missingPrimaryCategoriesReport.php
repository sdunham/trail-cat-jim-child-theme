<?php
    $num = 1;
?>
<h2>Missing Primary Categories</h2>
<table>
    <tr>
        <th>#</th>
        <th>Post</th>
        <th>Categories</th>
    </tr>
    <?php foreach( $postsMissingPrimaryCategory as $post ): ?>
		<tr>
			<td style="text-align: center;"><?php echo $num; ?></td>
			<td>
                <a href="<?php echo get_edit_post_link( $post ); ?>" target="_blank"><?php echo $post->post_title; ?></a> 
				(<?php echo date( 'M j, Y', strtotime( $post->post_date ) ); ?>) 
            </td>
            <td>
                <?php echo get_the_category_list( ', ', '', $post->ID ); ?>
            </td>
		</tr>
	<?php
		$num++;
		endforeach;
	?>
</table>