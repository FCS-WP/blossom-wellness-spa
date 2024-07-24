<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version		1.0.8
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('luxury_spa_system_fonts_list')) {
	function luxury_spa_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('luxury_spa_text_decoration_list')) {
	function luxury_spa_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'luxury-spa'), 
			'underline' => esc_html__('underline', 'luxury-spa'), 
			'overline' => esc_html__('overline', 'luxury-spa'), 
			'line-through' => esc_html__('line-through', 'luxury-spa'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('luxury_spa_custom_color_schemes_list')) {
	function luxury_spa_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'luxury-spa'), 
			'second' => esc_html__('Custom 2', 'luxury-spa'), 
			'third' => esc_html__('Custom 3', 'luxury-spa') 
		);
		
		
		return apply_filters('luxury_spa_custom_color_schemes_list_filter', $list);
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Require Files Function
if (!function_exists('luxury_spa_locate_template')) {
	function luxury_spa_locate_template($template_names, $require_once = true, $load = true) {
		$located = '';
		
		
		foreach ((array) $template_names as $template_name) {
			if (!$template_name) {
				continue;
			}
			
			
			if (file_exists(get_stylesheet_directory() . '/' . $template_name)) {
				$located = get_stylesheet_directory() . '/' . $template_name;
				
				
				break;
			} elseif (file_exists(get_template_directory() . '/' . $template_name)) {
				$located = get_template_directory() . '/' . $template_name;
				
				
				break;
			}
		}
		
		
		if ($load && $located != '') {
			if ($require_once) {
				require_once($located);
			} else {
				require($located);
			}
		}
		
		
		return $located;
	}
}



// CMSMasters Content Composer Plugin Compatibility
define('CMSMASTERS_CONTENT_COMPOSER', true);

// CMSMasters Donations Plugin Compatibility
define('CMSMASTERS_DONATIONS', false);

// CMSMasters Events Schedule Plugin Compatibility
define('CMSMASTERS_EVENTS_SCHEDULE', false);

// CMSMasters Contact Form Builder Plugin Compatibility
define('CMSMASTERS_CONTACT_FORM_BUILDER', true);

// CMSMasters Mega Menu Plugin Compatibility
define('CMSMASTERS_MEGA_MENU', true);

// CMSMasters Sermons Plugin Compatibility
define('CMSMASTERS_SERMONS', false);

// CMSMasters Importer Compatibility
define('CMSMASTERS_IMPORTER', true);

// CMSMasters Custom Fonts Compatibility
define('CMSMASTERS_CUSTOM_FONTS', true);

// WooCommerce Plugin Compatibility
define('CMSMASTERS_WOOCOMMERCE', class_exists('woocommerce') ? true : false);

// The Events Calendar Plugin Compatibility
define('CMSMASTERS_TRIBE_EVENTS', class_exists('Tribe__Events__Main') ? false : false);

// Timetable Responsive Schedule For WordPress Plugin Compatibility
define('CMSMASTERS_TIMETABLE', function_exists('timetable_events_init') ? false : false);

// MP Timetable and Event Schedule Plugin Compatibility
define('CMSMASTERS_MP_TIMETABLE', class_exists('Mp_Time_Table') ? false : false);

// LearnPress Plugin Compatibility
define('CMSMASTERS_LEARNPRESS', class_exists('LearnPress') ? false : false);

// WordPress Event Ticketing Plugin Compatibility
define('CMSMASTERS_TC_EVENTS', class_exists('TC') ? false : false);

// Instagram Feed Plugin Compatibility
define('CMSMASTERS_INSTAGRAM_FEED', function_exists('sb_instagram_activate') ? false : false);

// MailPoet Plugin Compatibility
define('CMSMASTERS_MAILPOET', (class_exists('WYSIJA') || class_exists('\MailPoet\Config\Initializer')) ? true : false);

// Theme Style Compatibility
define('CMSMASTERS_THEME_STYLE_COMPATIBILITY', false);

// Theme Style
define('CMSMASTERS_THEME_STYLE', (CMSMASTERS_THEME_STYLE_COMPATIBILITY && get_option('cmsmasters_luxury-spa_theme_style') ? get_option('cmsmasters_luxury-spa_theme_style') : ''));

// Theme Colored Categories Compatibility
define('CMSMASTERS_COLORED_CATEGORIES', false);

// Theme Categories Icon Compatibility
define('CMSMASTERS_CATEGORIES_ICON', true);

// Theme Projects Compatibility
define('CMSMASTERS_PROJECT_COMPATIBLE', true);

// Theme Profiles Compatibility
define('CMSMASTERS_PROFILE_COMPATIBLE', true);

// Theme Developer Mode
define('CMSMASTERS_DEVELOPER_MODE', false);

// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}


// Theme Settings All Theme Styles
if (!function_exists('luxury_spa_all_theme_styles')) {
	function luxury_spa_all_theme_styles() {
		$out = array( 
			'Default|', 
			'Theme Style 1|1', 
			'Theme Style 2|2' 
		);
		
		
		return $out;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('luxury_spa_all_color_schemes_list')) {
	function luxury_spa_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'luxury-spa'), 
			'header' => 		esc_html__('Header', 'luxury-spa'), 
			'navigation' => 	esc_html__('Navigation', 'luxury-spa'), 
			'header_top' => 	esc_html__('Header Top', 'luxury-spa'), 
			'footer' => 		esc_html__('Footer', 'luxury-spa') 
		);
		
		
		$out = array_merge($list, luxury_spa_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// CMSMasters Framework Directories Constants
define('CMSMASTERS_FRAMEWORK', get_template_directory() . '/framework');
define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
define('CMSMASTERS_VARS', get_template_directory() . '/theme-vars');
define('CMSMASTERS_VARS_STYLE', CMSMASTERS_VARS . '/theme-style' . CMSMASTERS_THEME_STYLE);
define('CMSMASTERS_DEMO_FILES_PATH', CMSMASTERS_VARS_STYLE . '/admin/demo-content/');



// Load Framework Parts
require_once(CMSMASTERS_CLASS . '/browser.php');

if (class_exists('Cmsmasters_Theme_Importer')) {
	require_once(CMSMASTERS_VARS_STYLE . '/admin/demo-content-importer.php');
}

require_once(CMSMASTERS_VARS_STYLE . '/admin/theme-settings-defaults.php');

require_once(CMSMASTERS_ADMIN_INC . '/config-functions.php');

require_once(CMSMASTERS_FUNCTION . '/general-functions.php');

require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/theme-functions.php');

require_once(CMSMASTERS_VARS_STYLE . '/theme-vars-functions.php');

require_once(CMSMASTERS_VARS . '/plugin-activator.php');

require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php');

require_once(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php');

require_once(CMSMASTERS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMASTERS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMASTERS_FUNCTION . '/likes.php');

require_once(CMSMASTERS_FUNCTION . '/views.php');

require_once(CMSMASTERS_FUNCTION . '/pagination.php');


$cmsmasters_wp_version = get_bloginfo('version');

if (version_compare($cmsmasters_wp_version, '5', '>=') || function_exists('is_gutenberg_page')) {
	require_once(get_template_directory() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-module-functions.php');
}


// Theme Colored Categories functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	require_once(CMSMASTERS_FUNCTION . '/theme-colored-categories.php');
}

// Theme Categories Icon functions
if (CMSMASTERS_CATEGORIES_ICON) {
	require_once(CMSMASTERS_FUNCTION . '/theme-categories-icon.php');
}

// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
	require_once(get_template_directory() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// CMSMasters Events Schedule functions
if (CMSMASTERS_EVENTS_SCHEDULE && class_exists('Cmsmasters_Events_Schedule')) {
	require_once(get_template_directory() . '/cmsmasters-events-schedule/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// CMSMasters Sermons functions
if (CMSMASTERS_SERMONS && class_exists('Cmsmasters_Sermons')) {
	require_once(get_template_directory() . '/cmsmasters-sermons/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Tribe Events functions
if (CMSMASTERS_TRIBE_EVENTS) {
	require_once(get_template_directory() . '/tribe-events/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Timetable functions
if (CMSMASTERS_TIMETABLE) {
	require_once(get_template_directory() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// MP Timetable functions
if (CMSMASTERS_MP_TIMETABLE) {
	require_once(get_template_directory() . '/mp-timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// LearnPress functions
if (CMSMASTERS_LEARNPRESS) {
	require_once(get_template_directory() . '/learnpress/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
	
	add_filter('learn_press_template_path', function() {return 'learnpress/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/templates';});
}

// TC Events functions
if (CMSMASTERS_TC_EVENTS) {
	require_once(get_template_directory() . '/tc-events/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Instagram Feed functions
if (CMSMASTERS_INSTAGRAM_FEED) {
	require_once(get_template_directory() . '/instagram-feed/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}


// Load Theme Local File
if (!function_exists('luxury_spa_load_theme_textdomain')) {
	function luxury_spa_load_theme_textdomain() {
		load_theme_textdomain('luxury-spa', CMSMASTERS_VARS . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'luxury_spa_load_theme_textdomain')) {
	add_action('after_setup_theme', 'luxury_spa_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('luxury_spa_theme_activation')) {
	function luxury_spa_theme_activation() {
		if (get_option('cmsmasters_active_theme') != 'luxury-spa') {
			add_option('cmsmasters_active_theme', 'luxury-spa', '', 'yes');
			
			
			luxury_spa_add_global_options();
			
			
			luxury_spa_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'luxury_spa_theme_activation');



// Framework Deactivation
if (!function_exists('luxury_spa_theme_deactivation')) {
	function luxury_spa_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

add_action('switch_theme', 'luxury_spa_theme_deactivation');



// Plugin Activation Regenerate Styles
if (!function_exists('luxury_spa_plugin_activation')) {
	function luxury_spa_plugin_activation($plugin, $network_activation) {
		update_option('cmsmasters_plugin_activation', 'true');		
		
		if ($plugin == 'classic-editor/classic-editor.php') {
			update_option('classic-editor-replace', 'no-replace');
		}
	}
}

add_action('activated_plugin', 'luxury_spa_plugin_activation', 10, 2);


if (!function_exists('luxury_spa_plugin_activation_regenerate')) {
	function luxury_spa_plugin_activation_regenerate() {
		if (!get_option('cmsmasters_plugin_activation')) {
			add_option('cmsmasters_plugin_activation', 'false');
		}
		
		if (get_option('cmsmasters_plugin_activation') != 'false') {
			luxury_spa_regenerate_styles();

			luxury_spa_add_global_options();
			
			luxury_spa_add_global_icons();
			
			update_option('cmsmasters_plugin_activation', 'false');
		}
	}
}

add_action('init', 'luxury_spa_plugin_activation_regenerate');



/* Yith WooCommerce Ajax Search Color Default */
function luxury_spa_woocommerce_catalog_images_default() {
	update_option('shop_catalog_image_size', array(
		'width'  => '450',
		'height' => '450',
		'crop'   => 1
	));
	update_option('shop_thumbnail_image_size', array(
		'width'  => '50',
		'height' => '50',
		'crop'   => 1
	));
}

add_action('activate_woocommerce/woocommerce.php', 'luxury_spa_woocommerce_catalog_images_default');



/* Yith WooCommerce Ajax Search Color Default */
function luxury_spa_ajax_search_premium_colors_default() {
	update_option('yith_wcas_sale_badge_bgcolor', '');
	update_option('yith_wcas_sale_badge_color', '');
	update_option('yith_wcas_featured_badge_bgcolor', '');
	update_option('yith_wcas_featured_badge_color', '');
	update_option('yith_wcas_outofstock_badge_bgcolor', '');
	update_option('yith_wcas_outofstock_badge_color', '');
	update_option('yith_wcas_search_title_color', '');
}

add_action('activate_yith-woocommerce-ajax-search-premium/init.php', 'luxury_spa_ajax_search_premium_colors_default');



/* Yith WooCommerce Ajax Search Color Default */
function luxury_spa_ajax_search_colors_default() {
	update_option('yith_wcas_search_submit_label', '');
}

add_action('activate_yith-woocommerce-ajax-search/init.php', 'luxury_spa_ajax_search_colors_default');



/* Yith WooCommerce Quick View Color Default */
function luxury_spa_quick_view_colors_default() {
	update_option('yith-wcqv-button-label', '');
	update_option('yith-wcqv-background-modal', '');
	update_option('yith-wcqv-close-color', '');
	update_option('yith-wcqv-close-color-hover', '');
}

add_action('activate_yith-woocommerce-quick-view/init.php', 'luxury_spa_quick_view_colors_default');



/* Yith WooCommerce Quick View Color Default */
function luxury_spa_quick_view_premium_colors_default() {
	update_option('yith-wcqv-background-modal', '');
	update_option('yith-wcqv-button-quick-view-color', '');
	update_option('yith-wcqv-button-quick-view-text-color', '');
	update_option('yith-wcqv-button-quick-view-color-hover', '');
	update_option('yith-wcqv-button-quick-view-text-color-hover', '');
	update_option('yith-wcqv-main-text-color', '');
	update_option('yith-wcqv-star-color', '');
	update_option('yith-wcqv-button-cart-color', '');
	update_option('yith-wcqv-button-cart-text-color', '');
	update_option('yith-wcqv-button-cart-color-hover', '');
	update_option('yith-wcqv-button-cart-text-color-hover', '');
	update_option('yith-wcqv-button-details-color', '');
	update_option('yith-wcqv-button-details-text-color', '');
	update_option('yith-wcqv-button-details-color-hover', '');
	update_option('yith-wcqv-button-details-text-color-hover', '');
	update_option('yith-wcqv-close-color', '');
	update_option('yith-wcqv-close-color-hover', '');
}

add_action('activate_yith-woocommerce-quick-view-premium/init.php', 'luxury_spa_quick_view_premium_colors_default');


function luxury_spa_run_reinit_import_options($post_id, $key, $value) {
	if (!get_post_meta($post_id, 'cmsmasters_heading', true)) {
		$custom_post_meta_fields = luxury_spa_get_custom_all_meta_fields();
		
		foreach ($custom_post_meta_fields as $field) {
			if ( 
				$field['type'] != 'tabs' && 
				$field['type'] != 'tab_start' && 
				$field['type'] != 'tab_finish' && 
				$field['type'] != 'content_start' && 
				$field['type'] != 'content_finish' 
			) {
				update_post_meta($post_id, $field['id'], $field['std']);
			}
		}
	}


	if ($key === 'cmsmasters_composer_show' && $value === 'true') {
		update_post_meta($post_id, 'cmsmasters_gutenberg_show', 'true');
	}
}

add_action('import_post_meta', 'luxury_spa_run_reinit_import_options', 10, 3);



