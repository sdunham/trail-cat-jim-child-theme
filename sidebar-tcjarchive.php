<?php if ( ot_get_option('cb_sticky_sb', 'on') == 'on' ) { echo '<div class="cb-sticky-sidebar">'; } ?>

<?php
    $cb_sidebar_id = 'tcj-archive-sidebar';
	if ( is_active_sidebar( $cb_sidebar_id ) == true ) {

        echo '<div class="sidebar-wrap tipi-xs-12 tipi-m-4 tipi-col clearfix"><aside class="cb-sidebar sidebar">';
  		dynamic_sidebar( $cb_sidebar_id );
        echo '</aside></div>';

	}
?>

<?php if ( ot_get_option('cb_sticky_sb', 'on') == 'on' ) { echo '</div>'; } ?>