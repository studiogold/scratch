<?php
/**
* Front page template
*
* @package   Scratch
* @author    Sharon Dunn
* @link      http://www.studiogold.com.au
* @copyright Copyright (c) 2018, Sharon Dunn
* @license   GPL-2.0+
*/

function scratch_home_page() {
    
    $home_sidebars = array(
      'home_welcome' => is_active_sidebar( 'home-welcome'),
      'call-to-action' => is_active_sidebar( 'call-to-action'), 
    );
    
    // Return early if no sidebars are active.
    if ( ! in_array(true, $home_sidebars ) ) {
        return;
    }
    
    // Add home welcome area if 'Home Welcome' widget area is active.
    if ( $home_sidebars['home_welcome'] ) {
       add_action( 'genesis_after_header', 'scratch_add_home_welcome' );
    }

    // Add home welcome area if 'Call To Action' widget area is active.
    if ( $home_sidebars['call_to_action'] ) {
     add_action( 'genesis_after_header', 'scratch_add_call_to_action' );
    }

}

/**
* Display content for the "Home Welcome" section.
*
* @since 1.0.0
*/
function scratch_add_home_welcome() {
    
    genesis_widget_area( 'home-welcome',
        array(
           'before' => '<div class="home-welcome"><div class="wrap">',
        )               
    );
    
}

/**
* Display content for the "Call to Action" section.
*
* @since 1.0.0
*/
function scratch_add_call_to_action() {
    
    genesis_widget_area( 'call-to-action',
        array(
           'before' => '<div class="call-to-action"><div class="wrap">',
        )               
    );
    
}

genesis();