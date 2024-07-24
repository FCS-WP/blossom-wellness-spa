<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version 	1.2.5
 *
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 *
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('luxury_spa_register_theme_plugins')) {

function luxury_spa_register_theme_plugins() {
	$plugins = array(
		array(
			'name'					=> esc_html__('CMSMasters Content Composer', 'luxury-spa'),
			'slug'					=> 'cmsmasters-content-composer',
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-content-composer.zip',
			'required'				=> true,
			'version'				=> '2.5.4',
			'force_activation'		=> false,
			'force_deactivation' 	=> false
		),
		array(
			'name'					=> esc_html__('CMSMasters Mega Menu', 'luxury-spa'),
			'slug'					=> 'cmsmasters-mega-menu',
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-mega-menu.zip',
			'required'				=> true,
			'version'				=> '1.2.9',
			'force_activation'		=> false,
			'force_deactivation' 	=> false
		),
		array(
			'name' 					=> esc_html__('LayerSlider WP', 'luxury-spa'),
			'slug' 					=> 'LayerSlider',
			'source'				=> get_template_directory() . '/theme-vars/plugins/LayerSlider.zip',
			'required'				=> false,
			'version'				=> '7.11.1',
			'force_activation'		=> false,
			'force_deactivation' 	=> false
		),
		array(
			'name' 					=> esc_html__('Revolution Slider', 'luxury-spa'),
			'slug' 					=> 'revslider',
			'source'				=> get_template_directory() . '/theme-vars/plugins/revslider.zip',
			'required'				=> false,
			'version'				=> '6.7.12',
			'force_activation'		=> false,
			'force_deactivation' 	=> false
		),
		array(
			'name'					=> esc_html__('CMSMasters Importer', 'luxury-spa'),
			'slug'					=> 'cmsmasters-importer',
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-importer.zip',
			'required'				=> true,
			'version'				=> '1.0.7',
			'force_activation'		=> false,
			'force_deactivation' 	=> false
		),
		array(
			'name'					=> esc_html__('CMSMasters Custom Fonts', 'luxury-spa'),
			'slug'					=> 'cmsmasters-custom-fonts',
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-custom-fonts.zip',
			'required'				=> true,
			'version'				=> '1.0.1',
			'force_activation'		=> false,
			'force_deactivation' 	=> false
		),
		array(
			'name'					=> esc_html__('Envato Market', 'luxury-spa'),
			'slug'					=> 'envato-market',
			'source'				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
			'required'				=> false
		),
		array(
			'name'					=> esc_html__('GDPR Cookie Consent', 'luxury-spa'),
			'slug'					=> 'cookie-law-info',
			'required'				=> false
		),
		array(
			'name' 					=> esc_html__('WooCommerce', 'luxury-spa'),
			'slug' 					=> 'woocommerce',
			'required'				=> false
		),
		array(
			'name' 					=> esc_html__('Contact Form 7', 'luxury-spa'),
			'slug' 					=> 'contact-form-7',
			'required' 				=> false
		),
		array(
			'name'					=> esc_html__('MailPoet 3', 'luxury-spa'),
			'slug'					=> 'mailpoet',
			'required'				=> false
		)
	);


	$config = array(
		'id' => 			'luxury-spa',
		'menu' => 			'theme-required-plugins',
		'strings' => array(
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'luxury-spa'),
			'menu_title' => 	esc_html__('Theme Plugins', 'luxury-spa'),
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'luxury-spa')
		)
	);


	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'luxury_spa_register_theme_plugins');

