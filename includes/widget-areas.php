<?php 
 /**
* Register widget areas
*
* @package   Scratch
* @author    Sharon Dunn
* @link      http://www.studiogold.com.au
* @copyright Copyright (c) 2018, Sharon Dunn
* @license   GPL-2.0+
*/
 
 
//* Register front page widget area
    genesis_register_sidebar( array(
	'id'            => 'home-welcome',
	'name'          => __( 'Home Welcome', 'scratch' ),
	'description'   => __( 'This is a home widget area that will show on the front page', 'scratch' ),
) );
    
    genesis_register_sidebar( array(
	'id'            => 'call-to-action',
	'name'          => __( 'Call To Action', 'scratch' ),
	'description'   => __( 'This is a call to action widget area that will show on the front page', 'scratch' ),
) );