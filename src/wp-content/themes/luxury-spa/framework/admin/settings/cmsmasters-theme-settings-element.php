<?php 
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version 	1.2.3
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function luxury_spa_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'luxury-spa');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'luxury-spa');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'luxury-spa');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'luxury-spa');
	$tabs['error'] = esc_attr__('404', 'luxury-spa');
	$tabs['code'] = esc_attr__('Custom Codes', 'luxury-spa');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'luxury-spa');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function luxury_spa_options_element_sections() {
	$tab = luxury_spa_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'luxury-spa');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'luxury-spa');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'luxury-spa');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'luxury-spa');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'luxury-spa');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'luxury-spa');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'luxury-spa');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function luxury_spa_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = luxury_spa_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = luxury_spa_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'luxury-spa' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['luxury-spa' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'luxury-spa' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['luxury-spa' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'luxury-spa') . '|dark', 
				esc_html__('Light', 'luxury-spa') . '|light', 
				esc_html__('Mac', 'luxury-spa') . '|mac', 
				esc_html__('Metro Black', 'luxury-spa') . '|metro-black', 
				esc_html__('Metro White', 'luxury-spa') . '|metro-white', 
				esc_html__('Parade', 'luxury-spa') . '|parade', 
				esc_html__('Smooth', 'luxury-spa') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'luxury-spa'), 
			'desc' => esc_html__('Sets path for switching windows', 'luxury-spa'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'luxury-spa') . '|vertical', 
				esc_html__('Horizontal', 'luxury-spa') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'luxury-spa'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'luxury-spa'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'luxury-spa'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'luxury-spa'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'luxury-spa'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'luxury-spa'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'luxury-spa'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'luxury-spa'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'luxury-spa'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'luxury-spa'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'luxury-spa'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'luxury-spa'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'luxury-spa') . '|center', 
				esc_html__('Fit', 'luxury-spa') . '|fit', 
				esc_html__('Fill', 'luxury-spa') . '|fill', 
				esc_html__('Stretch', 'luxury-spa') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'luxury-spa'), 
			'desc' => esc_html__('Sets buttons be available or not', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'luxury-spa'), 
			'desc' => esc_html__('Enable the arrow buttons', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'luxury-spa'), 
			'desc' => esc_html__('Sets the fullscreen button', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'luxury-spa'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'luxury-spa'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'luxury-spa'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'luxury-spa'), 
			'desc' => esc_html__('Sets the swipe navigation', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'luxury-spa' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'luxury-spa'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'luxury-spa' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'luxury-spa' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'luxury-spa' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'luxury-spa' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'luxury-spa' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'luxury-spa' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_color', 
			'title' => esc_html__('Text Color', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'luxury-spa'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'luxury-spa'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'luxury-spa') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'luxury-spa') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'luxury-spa') . '|repeat-y', 
				esc_html__('Repeat', 'luxury-spa') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'luxury-spa') . '|top left', 
				esc_html__('Top Center', 'luxury-spa') . '|top center', 
				esc_html__('Top Right', 'luxury-spa') . '|top right', 
				esc_html__('Center Left', 'luxury-spa') . '|center left', 
				esc_html__('Center Center', 'luxury-spa') . '|center center', 
				esc_html__('Center Right', 'luxury-spa') . '|center right', 
				esc_html__('Bottom Left', 'luxury-spa') . '|bottom left', 
				esc_html__('Bottom Center', 'luxury-spa') . '|bottom center', 
				esc_html__('Bottom Right', 'luxury-spa') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'luxury-spa') . '|scroll', 
				esc_html__('Fixed', 'luxury-spa') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'luxury-spa') . '|auto', 
				esc_html__('Cover', 'luxury-spa') . '|cover', 
				esc_html__('Contain', 'luxury-spa') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_search', 
			'title' => esc_html__('Search Line', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'luxury-spa' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'luxury-spa' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['luxury-spa' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'luxury-spa' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['luxury-spa' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'luxury-spa' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'luxury-spa' . '_twitter_access_data', 
			'title' => esc_html__('Twitter Access Data', 'luxury-spa'), 
			'desc' => sprintf(
				/* translators: Twitter access data. %s: Link to twitter access data generator */
				esc_html__( 'Generate %s and paste access data to fields.', 'luxury-spa' ),
				'<a href="' . esc_url( 'https://api.cmsmasters.net/wp-json/cmsmasters-api/v1/twitter-request-token' ) . '" target="_blank">' .
					esc_html__( 'twitter access data', 'luxury-spa' ) .
				'</a>'
			), 
			'type' => 'multi-text', 
			'std' => $defaults[$tab]['luxury-spa' . '_twitter_access_data'], 
			'class' => 'regular-text', 
			'choices' => array( 
				esc_html__('Consumer Key', 'luxury-spa') . '|consumer_key', 
				esc_html__('Consumer Secret', 'luxury-spa') . '|consumer_secret', 
				esc_html__('Access Token', 'luxury-spa') . '|access_token', 
				esc_html__('Access Token Secret', 'luxury-spa') . '|access_token_secret' 
			) 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'luxury-spa' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'luxury-spa' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

