
<h1>Trailcat Jim Reports Page</h1>

<p>
	<strong>A collection of reports about content on the Trailcat Jim site. Click a button below to load the corresponding report data.</strong>
</p>

<p>
    <a href="#" id="get-missing-captions" class="button button-primary">Missing Photo Captions</a>
    <a href="#" id="get-missing-primary-cats" class="button button-primary">Missing Post Primary Category</a>
    <a href="#" id="get-missing-featured-images" class="button button-primary">Missing Post Feature Image</a>
    <a href="#" id="get-missing-no-crop-featured-images" class="button button-primary">Post Not Using "No Crop" Option</a>
</p>

<section id="tcj-reports-contain"></section>

<script>
    (function($) {
        $('#get-missing-captions').click(function(e){
            e.preventDefault();

            $('#tcj-reports-contain').html('<img src="/wp-admin/images/spinner-2x.gif" />');
            $.post(ajaxurl, {'action': 'get_missing_caption_report'}, function(response) {
                $('#tcj-reports-contain').html(response);
            });
        });

        $('#get-missing-primary-cats').click(function(e){
            e.preventDefault();

            $('#tcj-reports-contain').html('<img src="/wp-admin/images/spinner-2x.gif" />');
            $.post(ajaxurl, {'action': 'get_missing_primary_categories_report'}, function(response) {
                $('#tcj-reports-contain').html(response);
            });
        });

        $('#get-missing-featured-images').click(function(e){
            e.preventDefault();

            $('#tcj-reports-contain').html('<img src="/wp-admin/images/spinner-2x.gif" />');
            $.post(ajaxurl, {'action': 'get_missing_featured_images_report'}, function(response) {
                $('#tcj-reports-contain').html(response);
            });
        });

        $('#get-missing-no-crop-featured-images').click(function(e){
            e.preventDefault();

            $('#tcj-reports-contain').html('<img src="/wp-admin/images/spinner-2x.gif" />');
            $.post(ajaxurl, {'action': 'get_missing_no_crop_featured_images_report'}, function(response) {
                $('#tcj-reports-contain').html(response);
            });
        });
    })( jQuery );
</script>