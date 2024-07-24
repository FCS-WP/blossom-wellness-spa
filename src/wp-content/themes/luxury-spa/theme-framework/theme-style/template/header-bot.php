<?php 
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version		1.0.8
 * 
 * Header Bottom Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = luxury_spa_get_global_options();


if ($cmsmasters_option['luxury-spa' . '_header_styles'] != 'default') {
	echo '<div class="header_bot" data-height="' . esc_attr($cmsmasters_option['luxury-spa' . '_header_bot_height']) . '">' . 
		'<div class="header_bot_outer">' . 
			'<div class="header_bot_inner">';
				do_action('cmsmasters_before_header_bot', $cmsmasters_option);
				
				
				if (
					$cmsmasters_option['luxury-spa' . '_header_styles'] == 'c_nav'
				) { 
					if (
						$cmsmasters_option['luxury-spa' . '_header_add_cont'] == 'cust_html' && 
						$cmsmasters_option['luxury-spa' . '_header_add_cont_cust_html'] !== ''
					) {
						echo '<div class="slogan_wrap">' . 
							'<div class="slogan_wrap_inner">' . 
								'<div class="slogan_wrap_text">' . 
									stripslashes($cmsmasters_option['luxury-spa' . '_header_add_cont_cust_html']) . 
								'</div>' . 
							'</div>' . 
						'</div>';
					} elseif (
						$cmsmasters_option['luxury-spa' . '_header_add_cont'] == 'social' && 
						isset($cmsmasters_option['luxury-spa' . '_social_icons'])
					) {
						luxury_spa_social_icons();
					}
				}
				
				
				echo '<div class="resp_bot_nav_wrap">' . 
					'<div class="resp_bot_nav_outer">' . 
						'<a class="responsive_nav resp_bot_nav cmsmasters_theme_icon_resp_nav" href="' . esc_js("javascript:void(0)") . '"></a>' . 
					'</div>' . 
				'</div>'; 
				
				
				if (
					$cmsmasters_option['luxury-spa' . '_header_styles'] == 'c_nav'
				) { 
					if (
						$cmsmasters_option['luxury-spa' . '_header_search']
					) {
						echo '<div class="bot_search_but_wrap">' . 
							'<a href="' . esc_js("javascript:void(0)") . '" class="bot_search_but cmsmasters_header_search_but cmsmasters_theme_icon_search"></a>' . 
						'</div>';
					}
				}
				
				if (
					$cmsmasters_option['luxury-spa' . '_header_styles'] == 'c_nav'
				) { 
					do_action('cmsmasters_after_logo', $cmsmasters_option);
				}
				
				
				echo '<!-- Start Navigation -->' . 
				'<div class="bot_nav_wrap">' . 
					'<nav>';
						
						$nav_args = array( 
							'theme_location' => 	'primary', 
							'menu_id' => 			'navigation', 
							'menu_class' => 		'bot_nav navigation', 
							'link_before' => 		'<span class="nav_item_wrap">', 
							'link_after' => 		'</span>', 
							'fallback_cb' => 		false 
						);
						
						
						if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
							$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
						}
						
						
						wp_nav_menu($nav_args);
						
					echo '</nav>' . 
				'</div>' . 
				'<!-- Finish Navigation -->';

				if ($cmsmasters_option['luxury-spa' . '_header_styles'] == 'c_nav') {
					do_action('cmsmasters_after_search', $cmsmasters_option);
				}

			echo '</div>' . 
		'</div>' . 
	'</div>';
}

