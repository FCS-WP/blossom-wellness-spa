<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version 	1.0.7
 * 
 * WooCommerce Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function luxury_spa_woocommerce_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('luxury-spa-woocommerce-extend', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-plugin-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('luxury-spa-woocommerce-extend', 'cmsmasters_woocommerce_shortcodes', array( 
			'product_ids' => 								luxury_spa_woocommerce_product_ids(), 
			'products_title' =>								esc_html__('Products', 'luxury-spa'), 
			'products_shortcode_title' =>					esc_html__('WooCommerce Shortcode', 'luxury-spa'), 
			'products_shortcode_descr' =>					esc_html__('Choose a WooCommerce shortcode to use', 'luxury-spa'), 
			'choice_recent_products' =>						esc_html__('Recent Products', 'luxury-spa'), 
			'choice_featured_products' =>					esc_html__('Featured Products', 'luxury-spa'), 
			'choice_product_categories' =>					esc_html__('Product Categories', 'luxury-spa'), 
			'choice_sale_products' =>						esc_html__('Sale Products', 'luxury-spa'), 
			'choice_best_selling_products' =>				esc_html__('Best Selling Products', 'luxury-spa'), 
			'choice_top_rated_products' =>					esc_html__('Top Rated Products', 'luxury-spa'), 
			'products_field_orderby_descr' =>				esc_html__("Choose your products 'order by' parameter", 'luxury-spa'), 
			'products_field_orderby_descr_note' =>			esc_html__("Sorting will not be applied for", 'luxury-spa'), 
			'products_field_prod_number_title' =>			esc_html__('Number of Products', 'luxury-spa'), 
			'products_field_prod_number_descr' =>			esc_html__('Enter the number of products for showing per page', 'luxury-spa'), 
			'products_field_col_count_descr' =>				esc_html__('Choose number of products per row', 'luxury-spa'), 
			'selected_products_title' =>					esc_html__('Selected Products', 'luxury-spa'), 
			'selected_products_field_ids' => 				esc_html__('Products', 'luxury-spa'), 
			'selected_products_field_ids_descr' => 			esc_html__('Choose products to be shown', 'luxury-spa'), 
			'selected_products_field_ids_descr_note' => 	esc_html__('All products will be shown if empty', 'luxury-spa'), 
			/* Products Category */
			'product_category_title' =>							esc_attr__('Products Category', 'luxury-spa'), 
			'product_category_field_layout_descr' =>			esc_attr__('Choose layout type for your products category shortcode', 'luxury-spa'), 
			'product_category_field_layout_choice_grid' =>		esc_attr__('Grid', 'luxury-spa'), 
			'product_category_field_layout_choice_puzzle' =>	esc_attr__('Puzzle', 'luxury-spa'), 
			'product_category_field_cat' =>						esc_attr__('Categories', 'luxury-spa'), 
			'product_category_field_cat_descr' =>				esc_attr__('Show product associated with certain categories.', 'luxury-spa'), 
			'product_category_field_cat_descr_note' =>			esc_attr__("Note: If you don't choose any product categories, all your products will be shown", 'luxury-spa'), 
			'product_category_field_prmeta_title' => 			esc_attr__('Product Metadata', 'luxury-spa'), 
			'product_category_field_prmeta_descr' => 			esc_attr__('Choose product metadata you want to be shown', 'luxury-spa'), 
			'product_category_field_choice_rating' => 			esc_attr__('Rating', 'luxury-spa'), 
			'product_category_field_choice_price' => 			esc_attr__('Price', 'luxury-spa') 
		));
	}
}

add_action('admin_enqueue_scripts', 'luxury_spa_woocommerce_register_c_c_scripts');


/* Product IDs */
function luxury_spa_woocommerce_product_ids() {
	$product_ids = get_posts(array(
		'numberposts' => -1, 
		'post_type' => 'product'
	));
	
	
	$out = array();
	
	
	if (!empty($product_ids)) {
		foreach ($product_ids as $product_id) {
			$out[$product_id->ID] = esc_html($product_id->post_title);
		}
	}
	
	
	return $out;
}


/* Product Category */
function luxury_spa_composer_product_cat() {
	$categories = get_terms('product_cat', array( 
		'hide_empty' => 0 
	));
	
	
		$out = "\n" . '<script type="text/javascript"> ' . "\n" . 
	'/* <![CDATA[ */' . "\n\t" . 
		'function luxury_spa_composer_product_cat() { ' . "\n\t\t" . 
			'return { ' . "\n";
	
	
	if (CMSMASTERS_WOOCOMMERCE && !empty($categories)) {
		foreach ($categories as $category) {
			$out .= "\t\t\t\"" . $category->slug . "\" : \"" . esc_html($category->name) . "\", \n";
		}
		
		
		$out = substr($out, 0, -3);
	}
	
	
		$out .= "\n\t\t" . '}; ' . "\n\t" . 
		'} ' . "\n" . 
	'/* ]]> */' . "\n" . 
	'</script>' . "\n\n";
	
	
	echo luxury_spa_return_content($out);
}


add_action('admin_footer', 'luxury_spa_composer_product_cat');

