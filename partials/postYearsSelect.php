<?php
	$years = get_published_post_years();
?>
<label for="postYearSelect">Year</label>
<select style="width: 100%" name="postYear" id="postYearSelect" class="select2 postArchiveSelect">
	<option>Select a year</option>
	<?php
		foreach( $years as $year ){
			echo "<option value='$year'>$year</option>";
		}
	?>
</select>