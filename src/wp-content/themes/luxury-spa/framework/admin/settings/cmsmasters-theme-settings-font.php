<?php 
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version		1.0.7
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function luxury_spa_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'luxury-spa');
	$tabs['link'] = esc_attr__('Links', 'luxury-spa');
	$tabs['nav'] = esc_attr__('Navigation', 'luxury-spa');
	$tabs['heading'] = esc_attr__('Heading', 'luxury-spa');
	$tabs['other'] = esc_attr__('Other', 'luxury-spa');
	$tabs['google'] = esc_attr__('Google Fonts', 'luxury-spa');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function luxury_spa_options_font_sections() {
	$tab = luxury_spa_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'luxury-spa');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'luxury-spa');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'luxury-spa');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'luxury-spa');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'luxury-spa');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'luxury-spa');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function luxury_spa_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = luxury_spa_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = luxury_spa_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'luxury-spa' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'luxury-spa' . '_link_font', 
			'title' => esc_html__('Links Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'luxury-spa' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['luxury-spa' . '_link_hover_decoration'], 
			'choices' => luxury_spa_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'luxury-spa' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'luxury-spa' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'luxury-spa' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'luxury-spa' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'luxury-spa' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'luxury-spa' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'luxury-spa' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'luxury-spa' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'luxury-spa' . '_button_font', 
			'title' => esc_html__('Button Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'luxury-spa' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'luxury-spa' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'luxury-spa' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['luxury-spa' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'luxury-spa' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['luxury-spa' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'luxury-spa' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'luxury-spa') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'luxury-spa') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'luxury-spa') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'luxury-spa') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'luxury-spa') . '|' . 'greek', 
				esc_html__('Greek Extended', 'luxury-spa') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'luxury-spa') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'luxury-spa') . '|' . 'japanese', 
				esc_html__('Korean', 'luxury-spa') . '|' . 'korean', 
				esc_html__('Thai', 'luxury-spa') . '|' . 'thai', 
				esc_html__('Bengali', 'luxury-spa') . '|' . 'bengali', 
				esc_html__('Devanagari', 'luxury-spa') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'luxury-spa') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'luxury-spa') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'luxury-spa') . '|' . 'hebrew', 
				esc_html__('Kannada', 'luxury-spa') . '|' . 'kannada', 
				esc_html__('Khmer', 'luxury-spa') . '|' . 'khmer', 
				esc_html__('Malayalam', 'luxury-spa') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'luxury-spa') . '|' . 'myanmar', 
				esc_html__('Oriya', 'luxury-spa') . '|' . 'oriya', 
				esc_html__('Sinhala', 'luxury-spa') . '|' . 'sinhala', 
				esc_html__('Tamil', 'luxury-spa') . '|' . 'tamil', 
				esc_html__('Telugu', 'luxury-spa') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

