<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa Child
 * @version		1.0.0
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


function luxury_spa_enqueue_styles() {
    wp_enqueue_style('luxury-spa-child-style', get_stylesheet_uri(), array(), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'luxury_spa_enqueue_styles', 11);
?>