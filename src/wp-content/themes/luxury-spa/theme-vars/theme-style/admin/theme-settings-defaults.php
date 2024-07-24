<?php 
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version		1.2.3
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('luxury_spa_settings_general_defaults')) {

function luxury_spa_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'luxury-spa' . '_theme_layout' => 		'liquid', 
			'luxury-spa' . '_logo_type' => 			'image', 
			'luxury-spa' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'luxury-spa' . '_logo_url_retina' => 	'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'luxury-spa' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Luxury Spa', 
			'luxury-spa' . '_logo_subtitle' => 		'', 
			'luxury-spa' . '_logo_custom_color' => 	0, 
			'luxury-spa' . '_logo_title_color' => 	'', 
			'luxury-spa' . '_logo_subtitle_color' => '' 
		), 
		'bg' => array( 
			'luxury-spa' . '_bg_col' => 			'#ffffff', 
			'luxury-spa' . '_bg_img_enable' => 	0, 
			'luxury-spa' . '_bg_img' => 			'', 
			'luxury-spa' . '_bg_rep' => 			'no-repeat', 
			'luxury-spa' . '_bg_pos' => 			'top center', 
			'luxury-spa' . '_bg_att' => 			'scroll', 
			'luxury-spa' . '_bg_size' => 		'cover' 
		), 
		'header' => array( 
			'luxury-spa' . '_fixed_header' => 				1, 
			'luxury-spa' . '_header_overlaps' => 			0, 
			'luxury-spa' . '_header_top_line' => 			0, 
			'luxury-spa' . '_header_top_height' => 			'45', 
			'luxury-spa' . '_header_top_line_short_info' => 	'', 
			'luxury-spa' . '_header_top_line_add_cont' => 	'nav', 
			'luxury-spa' . '_header_styles' => 				'default', 
			'luxury-spa' . '_header_mid_height' => 			'110', 
			'luxury-spa' . '_header_bot_height' => 			'60', 
			'luxury-spa' . '_header_search' => 				1, 
			'luxury-spa' . '_header_add_cont' => 			'social', 
			'luxury-spa' . '_header_add_cont_cust_html' => 	'',
			'luxury-spa' . '_woocommerce_cart_dropdown' =>  0
		), 
		'content' => array( 
			'luxury-spa' . '_layout' => 					'r_sidebar', 
			'luxury-spa' . '_archives_layout' => 		'r_sidebar', 
			'luxury-spa' . '_search_layout' => 			'r_sidebar', 
			'luxury-spa' . '_other_layout' => 			'r_sidebar', 
			'luxury-spa' . '_heading_alignment' => 		'center', 
			'luxury-spa' . '_heading_scheme' => 			'first', 
			'luxury-spa' . '_heading_bg_image_enable' => 0, 
			'luxury-spa' . '_heading_bg_image' => 		'', 
			'luxury-spa' . '_heading_bg_repeat' => 		'no-repeat', 
			'luxury-spa' . '_heading_bg_attachment' => 	'scroll', 
			'luxury-spa' . '_heading_bg_size' => 		'cover', 
			'luxury-spa' . '_heading_bg_color' => 		'', 
			'luxury-spa' . '_heading_height' => 			'170', 
			'luxury-spa' . '_breadcrumbs' => 			1, 
			'luxury-spa' . '_bottom_scheme' => 			'second', 
			'luxury-spa' . '_bottom_sidebar' => 			0, 
			'luxury-spa' . '_bottom_sidebar_layout' => 	'121414' 
		), 
		'footer' => array( 
			'luxury-spa' . '_footer_scheme' => 				'footer', 
			'luxury-spa' . '_footer_type' => 				'default', 
			'luxury-spa' . '_footer_additional_content' => 	'social', 
			'luxury-spa' . '_footer_logo' => 				1, 
			'luxury-spa' . '_footer_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'luxury-spa' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'luxury-spa' . '_footer_nav' => 					0, 
			'luxury-spa' . '_footer_social' => 				1, 
			'luxury-spa' . '_footer_html' => 				'', 
			'luxury-spa' . '_footer_copyright' => 			'Luxury Spa ' . date('Y') . ' | ' . esc_html__('All Rights Reserved', 'luxury-spa') 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Theme Settings Fonts Default Values */
if (!function_exists('luxury_spa_settings_font_defaults')) {

function luxury_spa_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'luxury-spa' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'26', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'luxury-spa' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'26', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'luxury-spa' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'luxury-spa' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'12', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'luxury-spa' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'luxury-spa' . '_h1_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Marcellus', 
				'font_size' => 			'30', 
				'line_height' => 		'46', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'luxury-spa' . '_h2_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Marcellus', 
				'font_size' => 			'24', 
				'line_height' => 		'34', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'luxury-spa' . '_h3_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Marcellus', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'luxury-spa' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'14', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'luxury-spa' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'12', 
				'line_height' => 		'18', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'luxury-spa' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'11', 
				'line_height' => 		'16', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'luxury-spa' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'11', 
				'line_height' => 		'44', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'luxury-spa' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'luxury-spa' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			), 
			'luxury-spa' . '_quote_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Marcellus', 
				'font_size' => 			'18', 
				'line_height' => 		'32', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'google' => array( 
			'luxury-spa' . '_google_web_fonts' => array( 
				'Hind:300,400,700|Hind', 
				'Karla:400,700|Karla', 
				'Lora:400,400i,700,700i|Lora', 
				'Marcellus|Marcellus',
				'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
				'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
				'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
				'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
				'Droid+Sans:400,700|Droid Sans', 
				'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
				'PT+Sans:400,400italic,700,700italic|PT Sans', 
				'PT+Sans+Caption:400,700|PT Sans Caption', 
				'PT+Sans+Narrow:400,700|PT Sans Narrow', 
				'PT+Serif:400,400italic,700,700italic|PT Serif', 
				'Ubuntu:400,400italic,700,700italic|Ubuntu', 
				'Ubuntu+Condensed|Ubuntu Condensed', 
				'Headland+One|Headland One', 
				'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
				'Lato:400,400italic,700,700italic|Lato', 
				'Cuprum:400,400italic,700,700italic|Cuprum', 
				'Oswald:300,400,700|Oswald', 
				'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
				'Lobster|Lobster', 
				'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
				'Questrial|Questrial', 
				'Raleway:300,400,500,600,700|Raleway', 
				'Dosis:300,400,500,700|Dosis', 
				'Cutive+Mono|Cutive Mono', 
				'Quicksand:300,400,700|Quicksand', 
				'Montserrat:400,700|Montserrat', 
				'Cookie|Cookie' 
			) 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#000000', 
		'#ffffff', 
		'#d43c18', 
		'#5173a6', 
		'#959595', 
		'#c0c0c0', 
		'#f4f4f4', 
		'#e1e1e1' 
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('luxury_spa_color_schemes_defaults')) {

function luxury_spa_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#6a6560', 
			'link' => 		'#b8a48d', 
			'hover' => 		'#a28869', 
			'heading' => 	'#2d2a27', 
			'bg' => 		'#f7f4f0', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#d8d3d2' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'rgba(255,255,255,0.8)', 
			'mid_link' => 		'#ffffff', 
			'mid_hover' => 		'#e8d2b8', 
			'mid_bg' => 		'#2a2d2c', 
			'mid_bg_scroll' => 	'#2a2d2c', 
			'mid_border' => 	'rgba(255,255,255,0.2)', 
			'bot_color' => 		'rgba(255,255,255,0.8)', 
			'bot_link' => 		'#ffffff', 
			'bot_hover' => 		'#e8d2b8', 
			'bot_bg' => 		'#4a4643', 
			'bot_bg_scroll' => 	'#4a4643', 
			'bot_border' => 	'#4a4643' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'#e8d2b8', 
			'title_link_current' => 	'#e8d2b8', 
			'title_link_subtitle' => 	'rgba(255,255,255,0.5)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'rgba(255,255,255,0.5)',  
			'dropdown_bg' => 			'#474443', 
			'dropdown_border' => 		'#474443', 
			'dropdown_link' => 			'rgba(255,255,255,0.6)',  
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_subtitle' => 'rgba(255,255,255,0.5)',  
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'#474443' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'rgba(255,255,255,0.8)', 
			'link' => 					'#ffffff', 
			'hover' => 					'#e8d2b8', 
			'bg' => 					'#000000', 
			'border' => 				'#000000', 
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'#e8d2b8', 
			'title_link_bg' => 			'#000000', 
			'title_link_bg_hover' => 	'#000000', 
			'title_link_border' => 		'#000000', 
			'dropdown_bg' => 			'#474443', 
			'dropdown_border' => 		'#474443', 
			'dropdown_link' => 			'rgba(255,255,255,0.6)', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_highlight' => '#e8d2b8', 
			'dropdown_link_border' => 	'#474443' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'rgba(255,255,255,0.4)', 
			'link' => 		'rgba(255,255,255,0.6)', 
			'hover' => 		'#e8d2b8', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#1f1e1d', 
			'alternate' => 	'#1f1e1d', 
			'border' => 	'#1f1e1d' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'rgba(255,255,255,0.4)', 
			'link' => 		'#ffffff', 
			'hover' => 		'#a28869', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#3a3735', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#d8d3d2' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#ffffff', 
			'link' => 		'#a28869', 
			'hover' => 		'#3f3e3b', 
			'heading' => 	'#c8b59f', 
			'bg' => 		'#282824', 
			'alternate' => 	'#2a2926', 
			'border' => 	'#3f3e3b' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#6a6560', 
			'link' => 		'#616161', 
			'hover' => 		'#a28869', 
			'heading' => 	'#8f8f8f', 
			'bg' => 		'#f7f4f0', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#d8d3d2' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('luxury_spa_settings_element_defaults')) {

function luxury_spa_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'luxury-spa' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'luxury-spa' . '_social_icons' => array( 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'luxury-spa') . '|true||', 
				'cmsmasters-icon-instagram-1|#|' . esc_html__('Instagram', 'luxury-spa') . '|true||', 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'luxury-spa') . '|true||', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'luxury-spa') . '|true||', 
				'cmsmasters-icon-pinterest|#|' . esc_html__('Pinterest', 'luxury-spa') . '|true||' 
			) 
		), 
		'lightbox' => array( 
			'luxury-spa' . '_ilightbox_skin' => 					'dark', 
			'luxury-spa' . '_ilightbox_path' => 					'vertical', 
			'luxury-spa' . '_ilightbox_infinite' => 				0, 
			'luxury-spa' . '_ilightbox_aspect_ratio' => 			1, 
			'luxury-spa' . '_ilightbox_mobile_optimizer' => 		1, 
			'luxury-spa' . '_ilightbox_max_scale' => 			1, 
			'luxury-spa' . '_ilightbox_min_scale' => 			0.2, 
			'luxury-spa' . '_ilightbox_inner_toolbar' => 		0, 
			'luxury-spa' . '_ilightbox_smart_recognition' => 	0, 
			'luxury-spa' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'luxury-spa' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'luxury-spa' . '_ilightbox_controls_toolbar' => 		1, 
			'luxury-spa' . '_ilightbox_controls_arrows' => 		0, 
			'luxury-spa' . '_ilightbox_controls_fullscreen' => 	1, 
			'luxury-spa' . '_ilightbox_controls_thumbnail' => 	1, 
			'luxury-spa' . '_ilightbox_controls_keyboard' => 	1, 
			'luxury-spa' . '_ilightbox_controls_mousewheel' => 	1, 
			'luxury-spa' . '_ilightbox_controls_swipe' => 		1, 
			'luxury-spa' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'luxury-spa' . '_sitemap_nav' => 		1, 
			'luxury-spa' . '_sitemap_categs' => 		1, 
			'luxury-spa' . '_sitemap_tags' => 		1, 
			'luxury-spa' . '_sitemap_month' => 		1, 
			'luxury-spa' . '_sitemap_pj_categs' => 	1, 
			'luxury-spa' . '_sitemap_pj_tags' => 	1 
		), 
		'error' => array( 
			'luxury-spa' . '_error_color' => 			'#b8a48d', 
			'luxury-spa' . '_error_bg_color' => 			'#ffffff', 
			'luxury-spa' . '_error_bg_img_enable' => 	0, 
			'luxury-spa' . '_error_bg_image' => 			'', 
			'luxury-spa' . '_error_bg_rep' => 			'no-repeat', 
			'luxury-spa' . '_error_bg_pos' => 			'top center', 
			'luxury-spa' . '_error_bg_att' => 			'scroll', 
			'luxury-spa' . '_error_bg_size' => 			'cover', 
			'luxury-spa' . '_error_search' => 			1, 
			'luxury-spa' . '_error_sitemap_button' => 	1, 
			'luxury-spa' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'luxury-spa' . '_custom_css' => 			'', 
			'luxury-spa' . '_custom_js' => 			'', 
			'luxury-spa' . '_gmap_api_key' => 		'', 
			'luxury-spa' . '_twitter_access_data' => 	array(), 
		), 
		'recaptcha' => array( 
			'luxury-spa' . '_recaptcha_public_key' => 	'', 
			'luxury-spa' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('luxury_spa_settings_single_defaults')) {

function luxury_spa_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'luxury-spa' . '_blog_post_layout' => 		'r_sidebar', 
			'luxury-spa' . '_blog_post_title' => 		1, 
			'luxury-spa' . '_blog_post_date' => 			1, 
			'luxury-spa' . '_blog_post_cat' => 			1, 
			'luxury-spa' . '_blog_post_author' => 		1, 
			'luxury-spa' . '_blog_post_comment' => 		1, 
			'luxury-spa' . '_blog_post_tag' => 			1, 
			'luxury-spa' . '_blog_post_like' => 			1, 
			'luxury-spa' . '_blog_post_nav_box' => 		1, 
			'luxury-spa' . '_blog_post_nav_order_cat' => 		0, 
			'luxury-spa' . '_blog_post_share_box' => 	1, 
			'luxury-spa' . '_blog_post_author_box' => 	1, 
			'luxury-spa' . '_blog_more_posts_box' => 	'popular', 
			'luxury-spa' . '_blog_more_posts_count' => 	'4', 
			'luxury-spa' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'luxury-spa' . '_portfolio_project_title' => 		1, 
			'luxury-spa' . '_portfolio_project_details_title' => '', 
			'luxury-spa' . '_portfolio_project_date' => 			1, 
			'luxury-spa' . '_portfolio_project_cat' => 			1, 
			'luxury-spa' . '_portfolio_project_author' => 		1, 
			'luxury-spa' . '_portfolio_project_comment' => 		0, 
			'luxury-spa' . '_portfolio_project_tag' => 			0, 
			'luxury-spa' . '_portfolio_project_like' => 			1, 
			'luxury-spa' . '_portfolio_project_link' => 			0, 
			'luxury-spa' . '_portfolio_project_share_box' => 	1, 
			'luxury-spa' . '_portfolio_project_nav_box' => 		1, 
			'luxury-spa' . '_portfolio_project_nav_order_cat' => 		0, 
			'luxury-spa' . '_portfolio_project_author_box' => 	1, 
			'luxury-spa' . '_portfolio_more_projects_box' => 	'popular', 
			'luxury-spa' . '_portfolio_more_projects_count' => 	'4', 
			'luxury-spa' . '_portfolio_more_projects_pause' => 	'5', 
			'luxury-spa' . '_portfolio_project_slug' => 			'project', 
			'luxury-spa' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'luxury-spa' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'luxury-spa' . '_profile_post_title' => 			1, 
			'luxury-spa' . '_profile_post_details_title' => 	'', 
			'luxury-spa' . '_profile_post_cat' => 			1, 
			'luxury-spa' . '_profile_post_comment' => 		1, 
			'luxury-spa' . '_profile_post_like' => 			1, 
			'luxury-spa' . '_profile_post_nav_box' => 		1, 
			'luxury-spa' . '_profile_post_nav_order_cat' => 		0, 
			'luxury-spa' . '_profile_post_share_box' => 		1, 
			'luxury-spa' . '_profile_post_slug' => 			'profile', 
			'luxury-spa' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('luxury_spa_project_puzzle_proportion')) {

function luxury_spa_project_puzzle_proportion() {
	return 1;
}

}



/* Project Puzzle Proportion */
if (!function_exists('luxury_spa_project_puzzle_large_gar_parameters')) {

function luxury_spa_project_puzzle_large_gar_parameters() {
	$parameter = array ( 
		'container_width' 		=> 1160, 
		'bottomStaticPadding' 	=> 2 
	);
	
	
	return $parameter;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('luxury_spa_get_image_thumbnail_list')) {

function luxury_spa_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		70, 
			'height' => 	70, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		360, 
			'height' => 	360, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'luxury-spa') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'luxury-spa') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'luxury-spa') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	386, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Project', 'luxury-spa') 
		), 
		'cmsmasters-profile-thumb' => array( 
			'width' => 		380, 
			'height' => 	292, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Profile', 'luxury-spa') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	560, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'luxury-spa') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'luxury-spa') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	600, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'luxury-spa') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	600, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'luxury-spa') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'luxury-spa') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('luxury_spa_project_labels')) {

function luxury_spa_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'luxury-spa'), 
		'singular_name' => 			esc_html__('Project', 'luxury-spa'), 
		'menu_name' => 				esc_html__('Projects', 'luxury-spa'), 
		'all_items' => 				esc_html__('All Projects', 'luxury-spa'), 
		'add_new' => 				esc_html__('Add New', 'luxury-spa'), 
		'add_new_item' => 			esc_html__('Add New Project', 'luxury-spa'), 
		'edit_item' => 				esc_html__('Edit Project', 'luxury-spa'), 
		'new_item' => 				esc_html__('New Project', 'luxury-spa'), 
		'view_item' => 				esc_html__('View Project', 'luxury-spa'), 
		'search_items' => 			esc_html__('Search Projects', 'luxury-spa'), 
		'not_found' => 				esc_html__('No projects found', 'luxury-spa'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'luxury-spa') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'luxury_spa_project_labels');


if (!function_exists('luxury_spa_pj_categs_labels')) {

function luxury_spa_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'luxury-spa'), 
		'singular_name' => 			esc_html__('Project Category', 'luxury-spa') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'luxury_spa_pj_categs_labels');


if (!function_exists('luxury_spa_pj_tags_labels')) {

function luxury_spa_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'luxury-spa'), 
		'singular_name' => 			esc_html__('Project Tag', 'luxury-spa') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'luxury_spa_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('luxury_spa_profile_labels')) {

function luxury_spa_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'luxury-spa'), 
		'singular_name' => 			esc_html__('Profiles', 'luxury-spa'), 
		'menu_name' => 				esc_html__('Profiles', 'luxury-spa'), 
		'all_items' => 				esc_html__('All Profiles', 'luxury-spa'), 
		'add_new' => 				esc_html__('Add New', 'luxury-spa'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'luxury-spa'), 
		'edit_item' => 				esc_html__('Edit Profile', 'luxury-spa'), 
		'new_item' => 				esc_html__('New Profile', 'luxury-spa'), 
		'view_item' => 				esc_html__('View Profile', 'luxury-spa'), 
		'search_items' => 			esc_html__('Search Profiles', 'luxury-spa'), 
		'not_found' => 				esc_html__('No Profiles found', 'luxury-spa'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'luxury-spa') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'luxury_spa_profile_labels');


if (!function_exists('luxury_spa_pl_categs_labels')) {

function luxury_spa_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'luxury-spa'), 
		'singular_name' => 			esc_html__('Profile Category', 'luxury-spa') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'luxury_spa_pl_categs_labels');

