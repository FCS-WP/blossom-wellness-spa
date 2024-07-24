<?php 
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function luxury_spa_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'luxury-spa');
	$tabs['export'] = esc_attr__('Export', 'luxury-spa');
	
	
	return $tabs;
}


function luxury_spa_options_demo_sections() {
	$tab = luxury_spa_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'luxury-spa');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'luxury-spa');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function luxury_spa_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = luxury_spa_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'luxury-spa' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'luxury-spa'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'luxury-spa') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note that when importing theme settings, these settings will be applied to the appropriate Theme Style (with the same name).", 'luxury-spa') . '<br />' . esc_html__("To see these settings applied, please enable appropriate", 'luxury-spa') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("Theme Style", 'luxury-spa') . '</a>.</span>' : ''), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'luxury-spa' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'luxury-spa'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file.", 'luxury-spa') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note, that when exporting theme settings, you will export settings for the currently active Theme Style.", 'luxury-spa') . '<br />' . esc_html__("Theme Style can be set", 'luxury-spa') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("here", 'luxury-spa') . '</a>.</span>' : ''), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'luxury-spa'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

