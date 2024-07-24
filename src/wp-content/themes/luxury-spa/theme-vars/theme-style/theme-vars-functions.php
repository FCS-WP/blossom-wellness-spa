<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version 	1.0.4
 * 
 * Theme Vars Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function luxury_spa_vars_register_css_styles() {
	wp_enqueue_style('luxury-spa-theme-vars-style', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/vars-style.css', array('luxury-spa-retina'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'luxury_spa_vars_register_css_styles');

