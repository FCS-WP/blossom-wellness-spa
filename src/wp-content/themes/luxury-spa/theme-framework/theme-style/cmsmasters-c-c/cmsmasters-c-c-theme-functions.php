<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version 	1.0.4
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function luxury_spa_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('luxury-spa-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('luxury-spa-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array(  
			'featured_block_link' =>	 				esc_attr__('Featured Block Link', 'luxury-spa'), 
			'featured_block_link_descr' =>	 			esc_attr__('Enter featured block link here', 'luxury-spa'), 
			'featured_block_target' =>	 				esc_attr__('Featured Block Target', 'luxury-spa'), 
			'featured_block_target_descr' =>	 		esc_attr__('Enter featured block target here', 'luxury-spa'), 
			'featured_block_hover' =>	 				esc_attr__('Featured Block Hover', 'luxury-spa'), 
			'featured_block_hover_descr' =>	 			esc_attr__('Add hover for this featured block', 'luxury-spa')
		));
	}
}

add_action('admin_enqueue_scripts', 'luxury_spa_theme_register_c_c_scripts');



// Featured Block Shortcode Attributes Filter
add_filter('cmsmasters_featured_block_atts_filter', 'cmsmasters_featured_block_atts');

function cmsmasters_featured_block_atts() {
	return array( 
		'shortcode_id' => 					'', 
		'text_width' => 					'100', 
		'text_position' => 					'center', 
		'text_padding' => 					'', 
		'text_align' => 					'left', 
		'block_link' => 					'', 
		'block_link_target' => 				'', 
		'color_overlay' => 					'', 
		'fb_bg_color' => 					'', 
		'bg_img' => 						'', 
		'bg_position' => 					'', 
		'bg_repeat' => 						'', 
		'bg_attachment' => 					'', 
		'bg_size' => 						'', 
		'hover' => 							'', 
		'top_padding' => 					'', 
		'bottom_padding' => 				'', 
		'resp_vert_pad' => 					'', 
		'padding_top_laptop' => 			'', 
		'padding_bottom_laptop' => 			'', 
		'padding_top_tablet' => 			'', 
		'padding_bottom_tablet' => 			'', 
		'padding_top_mobile_h' => 			'', 
		'padding_bottom_mobile_h' =>		'', 
		'padding_top_mobile_v' => 			'', 
		'padding_bottom_mobile_v' => 		'', 
		'border_radius' => 					'', 
		'animation' => 						'', 
		'animation_delay' => 				'', 
		'classes' => 						'' 
	);
}