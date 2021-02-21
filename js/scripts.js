(function( $ ) {
	$(document).ready(function(){
		// Initialize select2
		$('select.select2').select2();

		// When the archive year select field changes, update the month select field
		// with months in that year with at least one post
		$('select#postYearSelect').on('change', function(e){
			var year = $(this).val();
			var season = $('select#postSeasonSelect').val();

			updatePostsByYearAndSeason(year, season);
		});

		// When the archive season select field changes, update the list of posts displayed
		$('select#postSeasonSelect').on('change', function(e, skipUpdate){
			var year = $('select#postYearSelect').val();
			var season = $(this).val();

			updatePostsByYearAndSeason(year, season);
		});

		// Takes a year and season, and updates post list with post from that year and season
		function updatePostsByYearAndSeason(year, season){
			// If there isn't an actual year or season selected, return
			if(!year && !season){
				updatePostArchiveMarkup('<em>'+scriptParams.archiveDefaultText+'</em>');
				return;
			}

			// Remove previous posts markup
			updatePostArchiveMarkup('', true);

			// Show loading animation
			$('#postArchiveLoading').removeClass('cb-hidden');

			// Get posts from the selected year and season, and display them on the page
			$.ajax({
				method: "POST",
				url: scriptParams.ajaxurl,
				data: {
					action: 'get_archive_posts',
					year: year,
					season: season
				}
			})
			.done(function( postsMarkup ) {
				// Hide loading animation
				$('#postArchiveLoading').addClass('cb-hidden');

				updatePostArchiveMarkup( postsMarkup );
			});
		}

		// Updates the archive page's post markup with the provided string
		function updatePostArchiveMarkup(strMarkup, forceEmpty){
			if (strMarkup || forceEmpty) {
				$('#postArchivePostsContain').html(strMarkup);
			} else {
				updatePostArchiveMarkup('<em>No posts found matching your search. Please try again.</em>');
			}
		}
	}); 
})(jQuery);