<?php if ( ot_get_option('cb_sticky_sb', 'on') == 'on' ) { echo '<div class="cb-sticky-sidebar">'; } ?>

<?php
    $cb_sidebar_id = 'tcj-archive-sidebar';
	if ( is_active_sidebar( $cb_sidebar_id ) == true ) {

        echo '<aside class="cb-sidebar clearfix">';
  		dynamic_sidebar( $cb_sidebar_id );
        echo '</aside>';

	}
?>

<?php if ( ot_get_option('cb_sticky_sb', 'on') == 'on' ) { echo '</div>'; } ?>