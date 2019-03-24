<?php
    $num = 1;
?>
<h2>Missing Photo Captions</h2>
<table>
    <tr>
        <th>#</th>
        <th>Media Item Name</th>
    </tr>
    <?php foreach( $photosMissingCaptions as $post ): ?>
		<tr>
			<td style="text-align: center;"><?php echo $num; ?></td>
			<td>
				<a href="<?php echo get_edit_post_link( $post->ID ); ?>" target="_blank"><?php echo $post->post_title; ?></a> 
			</td>
		</tr>
	<?php
		$num++;
		endforeach;
	?>
</table>