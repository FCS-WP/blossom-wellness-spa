<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version 	1.0.8
 *
 * CMSMasters WooCommerce Admin Settings
 * Created by CMSMasters
 *
 */


/* Single Settings */
function luxury_spa_woocommerce_options_general_fields($options, $tab) {
	$defaults = luxury_spa_settings_general_defaults();

	if ($tab == 'header') {
		$options[] = array(
			'section' => 'header_section',
			'id' => 'luxury-spa' . '_woocommerce_cart_dropdown',
			'title' => esc_html__('Disable WooCommerce Cart', 'luxury-spa'),
			'desc' => '',
			'type' => 'checkbox',
			'std' => $defaults[$tab]['luxury-spa' . '_woocommerce_cart_dropdown']
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'luxury_spa_woocommerce_options_general_fields', 10, 2);

