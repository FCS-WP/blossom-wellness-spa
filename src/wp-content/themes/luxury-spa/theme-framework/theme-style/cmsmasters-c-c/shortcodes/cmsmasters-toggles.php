<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version 	1.0.0
 * 
 * Content Composer Toggles Shortcode
 * Created by CMSMasters
 * 
 */

extract(shortcode_atts($new_atts, $atts));


$this->toggles_atts = array(
	'sort_toggles' => 		array(), 
	'toggle_active' => 		(int) $active, 
	'toggle_counter' => 	0 
);


$toggles_filter = '';

$toggles = do_shortcode($content);


if ($sort == 'true') {
	$toggles_filter = '<div class="cmsmasters_toggles_filter">' . "\n\t" . 
		'<a href="#" data-key="all" title="' . esc_attr__('All', 'luxury-spa') . '" class="current_filter">' . esc_html__('All', 'luxury-spa') . '</a>' . "\n";
	
	foreach ($this->toggles_atts['sort_toggles'] as $sort_toggle_key => $sort_toggle_value) {
		$toggles_filter .= "\t" . '<a href="#" data-key="' . esc_attr($sort_toggle_key) . '" title="' . esc_attr($sort_toggle_value) . '">' . esc_html($sort_toggle_value) . '</a>' . "\n";
	}
	
	$toggles_filter .= '</div>';
}


echo '<div class="cmsmasters_toggles toggles_mode_' . esc_attr($mode) . 
(($classes != '') ? ' ' . esc_attr($classes) : '') . 
'"' . 
(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
'>' . 
	$toggles_filter . "\n" . 
	$toggles . 
'</div>';