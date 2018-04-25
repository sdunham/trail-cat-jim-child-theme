(function( $ ) {
	$(document).ready(function(){
		// Initialize select2
		$('select.select2').select2();

		// When the archive year select field changes, update the month select field
		// with months in that year with at least one post
		$('select#postYearSelect').on('change', function(e){
			// Get new year selection
			var year = $(this).val();

			// Clear month select options
			$('select#postMonthSelect option').remove();

			// If there isn't an actual value selected, clear the posts and return
			if(!year){
				updatePostArchiveMarkup('<em>'+scriptParams.archiveDefaultText+'</em>');
				return;
			}

			// Remove previous posts markup
			updatePostArchiveMarkup('');

			// Update month select options
			$.ajax({
				method: "POST",
				url: scriptParams.ajaxurl,
				data: {
					action: 'get_post_months_by_year',
					year: year
				}
			})
			.done(function( res ) {
				addOptionsToMonthSelect(res.months);
				updatePostArchiveMarkup( res.postsMarkup );
			});
		});

		// When the archive month select field changes, update the list of posts displayed
		$('select#postMonthSelect').on('change', function(e){
			// Get new month selection
			var month = $(this).val();

			// If there isn't an actual value selected, clear the posts and return
			if(!month){
				updatePostArchiveMarkup('<em>'+scriptParams.archiveDefaultText+'</em>');
				return;
			}

			// Get the selected year
			var year = $('select#postYearSelect').val();

			// Get posts from the selected year and month, and display them on the page
			$.ajax({
				method: "POST",
				url: scriptParams.ajaxurl,
				data: {
					action: 'get_archive_posts',
					year: year,
					month: month
				}
			})
			.done(function( postsMarkup ) {
				updatePostArchiveMarkup( postsMarkup );
			});

			''
		});

		// Update the post month select based on the array of months provided
		function addOptionsToMonthSelect(arrMonths){
			var select = $('select#postMonthSelect');
			var option = new Option('Select a month', '');
			select.append(option);

			$.each(arrMonths, function(index, value){
				var option = new Option(value, index);
				select.append(option);
			});

			select.trigger('change');
		}

		// Updates the archive page's post markup with the provided string
		function updatePostArchiveMarkup(strMarkup){
			$('#postArchivePostsContain').html(strMarkup);
		}
	}); 
})(jQuery);