<?php
	$years = get_published_post_years();
?>
<label for="postYearSelect">Year<span style="color: red;">*</span></label>
<select style="width: 100%" name="postYear" id="postYearSelect" class="select2 postArchiveSelect">
	<option value="">Select a year</option>
	<?php
		foreach( $years as $year ){
			echo "<option value='$year'>$year</option>";
		}
	?>
</select>