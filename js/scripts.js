(function( $ ) {
	$(document).ready(function(){
		// Initialize select2
		$('select.select2').select2();

		// When the archive year select field changes, update the month select field
		// with months in that year with at least one post
		$('select#postYearSelect').on('change', function(e){
			var year = $(this).val();

			updatePostsAndMonthsByYear(year);
		});

		// When the archive month select field changes, update the list of posts displayed
		$('select#postMonthSelect').on('change', function(e, skipUpdate){
			var year = $('select#postYearSelect').val();
			var month = $(this).val();

			// If an actual month is selected, just update the list of posts based on the current year and month
			if(month){
				updatePostsByYearAndMonth(year, month);
			}
			// If not told to skip an update, update the posts and month select based on the currently selected year
			else if(!skipUpdate){
				updatePostsAndMonthsByYear(year);
			}
		});

		// Takes a year and gets a list of posts and months with posts from that year
		// Updates list of posts and month select options with results
		// If no year is passed, the default search text is shown instead
		function updatePostsAndMonthsByYear(year){
			// Clear month select options
			$('select#postMonthSelect option').remove();

			// If there isn't an actual year selected, clear the posts and return
			if(!year){
				updatePostArchiveMarkup('<em>'+scriptParams.archiveDefaultText+'</em>');
				return;
			}

			// Remove previous posts markup
			updatePostArchiveMarkup('');

			// Show loading animation
			$('#postArchiveLoading').removeClass('cb-hidden');

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
				// Hide loading animation
				$('#postArchiveLoading').addClass('cb-hidden');

				addOptionsToMonthSelect(res.months);
				updatePostArchiveMarkup( res.postsMarkup );
			});
		}

		// Takes a year and month, and updates post list with post from that year and month
		function updatePostsByYearAndMonth(year, month){
			// If there isn't an actual month selected, return
			if(!month){
				return;
			}

			// Remove previous posts markup
			updatePostArchiveMarkup('');

			// Show loading animation
			$('#postArchiveLoading').removeClass('cb-hidden');

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
				// Hide loading animation
				$('#postArchiveLoading').addClass('cb-hidden');

				updatePostArchiveMarkup( postsMarkup );
			});
		}

		// Update the post month select based on the array of months provided
		function addOptionsToMonthSelect(arrMonths){
			var select = $('select#postMonthSelect');
			var option = new Option('Select a month', '');
			select.append(option);

			$.each(arrMonths, function(index, value){
				var option = new Option(value, index);
				select.append(option);
			});

			// Trigger a change on the update month select, but also pass an
			// extra parameter to the change event to avoid updating any markup
			select.trigger('change', [true]);
		}

		// Updates the archive page's post markup with the provided string
		function updatePostArchiveMarkup(strMarkup){
			$('#postArchivePostsContain').html(strMarkup);
		}
	}); 
})(jQuery);