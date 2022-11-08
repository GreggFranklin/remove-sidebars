<?php

/**
 * Remove unneeded Sidebars
 *
 * Remove Kadence Theme default (Primary, Secondary) sidebars. This site does not use them.
 */
function fn_remove_some_widgets(){
	
    unregister_sidebar( 'sidebar-primary' );
    unregister_sidebar( 'sidebar-secondary' );
}
add_action( 'widgets_init', 'fn_remove_some_widgets', 11 );
