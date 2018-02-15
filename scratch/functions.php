<?php

/**
*Theme customizations
*
*@package   Scratch
*@author    Sharon Dunn
*@link      http://www.studiogold.com.au
*@copyright Copyright (c) 2018, Sharon Dunn
*@license   GPL-2.0+
*/

// Load child theme textdomain.
load_child_theme_textdomain('scratch');

add_action('genesis_setup', 'scratch_setup');