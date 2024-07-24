<?php 
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version 	1.0.8
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function luxury_spa_options_general_tabs() {
	$cmsmasters_option = luxury_spa_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'luxury-spa');
	
	if ($cmsmasters_option['luxury-spa' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'luxury-spa');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'luxury-spa');
	}
	
	$tabs['header'] = esc_attr__('Header', 'luxury-spa');
	$tabs['content'] = esc_attr__('Content', 'luxury-spa');
	$tabs['footer'] = esc_attr__('Footer', 'luxury-spa');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function luxury_spa_options_general_sections() {
	$tab = luxury_spa_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'luxury-spa');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'luxury-spa');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'luxury-spa');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'luxury-spa');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'luxury-spa');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'luxury-spa');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function luxury_spa_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = luxury_spa_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = luxury_spa_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'luxury-spa' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'luxury-spa') . '|liquid', 
				esc_html__('Boxed', 'luxury-spa') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'luxury-spa' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'luxury-spa') . '|image', 
				esc_html__('Text', 'luxury-spa') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'luxury-spa' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'luxury-spa'), 
			'desc' => esc_html__('Choose your website logo image.', 'luxury-spa'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['luxury-spa' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'luxury-spa' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'luxury-spa'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'luxury-spa'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['luxury-spa' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'luxury-spa' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'luxury-spa' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'luxury-spa' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'luxury-spa'), 
			'desc' => esc_html__('enable', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'luxury-spa' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['luxury-spa' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'luxury-spa' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['luxury-spa' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'luxury-spa' . '_bg_col', 
			'title' => esc_html__('Background Color', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['luxury-spa' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'luxury-spa' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'luxury-spa' . '_bg_img', 
			'title' => esc_html__('Background Image', 'luxury-spa'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'luxury-spa'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['luxury-spa' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'luxury-spa' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'luxury-spa') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'luxury-spa') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'luxury-spa') . '|repeat-y', 
				esc_html__('Repeat', 'luxury-spa') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'luxury-spa' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['luxury-spa' . '_bg_pos'], 
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
			'section' => 'bg_section', 
			'id' => 'luxury-spa' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'luxury-spa') . '|scroll', 
				esc_html__('Fixed', 'luxury-spa') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'luxury-spa' . '_bg_size', 
			'title' => esc_html__('Background Size', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'luxury-spa') . '|auto', 
				esc_html__('Cover', 'luxury-spa') . '|cover', 
				esc_html__('Contain', 'luxury-spa') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'luxury-spa' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => luxury_spa_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'luxury-spa'), 
			'desc' => esc_html__('enable', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'luxury-spa'), 
			'desc' => esc_html__('enable', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'luxury-spa'), 
			'desc' => esc_html__('pixels', 'luxury-spa'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'luxury-spa'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'luxury-spa') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'luxury-spa') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'luxury-spa') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'luxury-spa') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'luxury-spa') . '|default', 
				esc_html__('Compact Style Left Navigation', 'luxury-spa') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'luxury-spa') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'luxury-spa') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'luxury-spa'), 
			'desc' => esc_html__('pixels', 'luxury-spa'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'luxury-spa'), 
			'desc' => esc_html__('pixels', 'luxury-spa'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_search', 
			'title' => esc_html__('Header Search', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'luxury-spa') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'luxury-spa') . '|social', 
				esc_html__('Header Custom HTML', 'luxury-spa') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'luxury-spa' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'luxury-spa'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'luxury-spa') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['luxury-spa' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'luxury-spa'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'luxury-spa'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['luxury-spa' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'luxury-spa'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'luxury-spa'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['luxury-spa' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'luxury-spa'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'luxury-spa'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['luxury-spa' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'luxury-spa'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'luxury-spa'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['luxury-spa' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'luxury-spa') . '|left', 
				esc_html__('Right', 'luxury-spa') . '|right', 
				esc_html__('Center', 'luxury-spa') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_heading_scheme', 
			'title' => esc_html__('Heading Color Scheme by Default', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['luxury-spa' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'luxury-spa'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'luxury-spa'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['luxury-spa' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'luxury-spa') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'luxury-spa') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'luxury-spa') . '|repeat-y', 
				esc_html__('Repeat', 'luxury-spa') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'luxury-spa') . '|scroll', 
				esc_html__('Fixed', 'luxury-spa') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'luxury-spa') . '|auto', 
				esc_html__('Cover', 'luxury-spa') . '|cover', 
				esc_html__('Contain', 'luxury-spa') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'luxury-spa'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['luxury-spa' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'luxury-spa'), 
			'desc' => esc_html__('pixels', 'luxury-spa'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['luxury-spa' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Color Scheme', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['luxury-spa' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['luxury-spa' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'luxury-spa' . '_footer_scheme', 
			'title' => esc_html__('Footer Color Scheme', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['luxury-spa' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'luxury-spa' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'luxury-spa') . '|default', 
				esc_html__('Small', 'luxury-spa') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'luxury-spa' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['luxury-spa' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'luxury-spa') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'luxury-spa') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'luxury-spa') . '|social', 
				esc_html__('Custom HTML', 'luxury-spa') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'luxury-spa' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'luxury-spa' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'luxury-spa'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'luxury-spa'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['luxury-spa' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'luxury-spa' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'luxury-spa'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'luxury-spa'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['luxury-spa' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'luxury-spa' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'luxury-spa' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'luxury-spa' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'luxury-spa'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'luxury-spa') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['luxury-spa' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'luxury-spa' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

