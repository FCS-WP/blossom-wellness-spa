<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version 	1.0.4
 * 
 * WooCommerce Fonts Rules
 * Created by CMSMasters
 * 
 */


function luxury_spa_woocommerce_fonts($custom_css) {
	$cmsmasters_option = luxury_spa_get_global_options();
	
	
	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total .amount, 
	.shop_table td > .amount, 
	.woocommerce-info, 
	.woocommerce-info a, 
	.woocommerce-message, 
	.woocommerce-message a, 
	.woocommerce-error, 
	.woocommerce-error a,
	.shop_attributes td,
	.widget_shopping_cart .total strong, 
	.widget_shopping_cart .total, 
	.widget_price_filter .price_slider_amount .price_label, 
	.shop_table.woocommerce-checkout-review-order-table .order-total td .amount, 
	.shop_table.woocommerce-checkout-review-order-table td.product-name strong,
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total span,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity, 
	.shop_table.order_details .product-name dl {
		font-family:" . luxury_spa_get_google_font($cmsmasters_option['luxury-spa' . '_content_font_google_font']) . $cmsmasters_option['luxury-spa' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['luxury-spa' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['luxury-spa' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['luxury-spa' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['luxury-spa' . '_content_font_font_style'] . ";
	}
	
	.widget_price_filter .price_slider_amount .price_label, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity {
		font-size:" . ((int)$cmsmasters_option['luxury-spa' . '_content_font_font_size'] - 2) . "px;
	}
	
	.shop_table.woocommerce-checkout-review-order-table .order-total td .amount {
		font-weight:normal;
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong,
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.cmsmasters_single_product .product_title {
		font-family:" . luxury_spa_get_google_font($cmsmasters_option['luxury-spa' . '_h2_font_google_font']) . $cmsmasters_option['luxury-spa' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['luxury-spa' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['luxury-spa' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['luxury-spa' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['luxury-spa' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['luxury-spa' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['luxury-spa' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.shop_table.woocommerce-checkout-review-order-table td.product-name,
	.shop_table .product-name a,
	.shop_attributes th, 
	.shop_table thead th, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.order_details tfoot tr:last-child th, 
	.shop_table.order_details tfoot tr:last-child td, 
	.cart_totals table th, 
	ul.order_details, 
	.cmsmasters_products .product .woocommerce-loop-category__title,
	.widget > .product_list_widget a, 
	.widget_shopping_cart .cart_list a {
		font-family:" . luxury_spa_get_google_font($cmsmasters_option['luxury-spa' . '_h3_font_google_font']) . $cmsmasters_option['luxury-spa' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['luxury-spa' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['luxury-spa' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['luxury-spa' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['luxury-spa' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['luxury-spa' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['luxury-spa' . '_h3_font_text_decoration'] . ";
	}
	
	.shop_table.woocommerce-checkout-review-order-table td.product-name {
		font-size:" . ((int) $cmsmasters_option['luxury-spa' . '_h3_font_font_size'] - 2) . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */ 
	.widget_shopping_cart .cart_list .quantity, 
	.widget > .product_list_widget .amount,
	.cmsmasters_product .price, 
	.cmsmasters_single_product .price,
	.shop_table.order_details tfoot tr th,  
	.widget_rating_filter ul li, 
	.widget_rating_filter ul li a, 
	.widget_layered_nav ul li, 
	.widget_layered_nav ul li a, 
	.widget_layered_nav_filters ul li, 
	.widget_layered_nav_filters ul li a, 
	.widget_product_categories ul li, 
	.widget_product_categories ul li a {
		font-family:" . luxury_spa_get_google_font($cmsmasters_option['luxury-spa' . '_h4_font_google_font']) . $cmsmasters_option['luxury-spa' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['luxury-spa' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['luxury-spa' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['luxury-spa' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['luxury-spa' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['luxury-spa' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['luxury-spa' . '_h4_font_text_decoration'] . ";
		letter-spacing:3px;
	}
	
	.widget_shopping_cart .cart_list .quantity, 
	.cmsmasters_single_product .price,
	.cmsmasters_product .price {
		letter-spacing:normal;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.widget_product_tag_cloud a,
	.widget > .product_list_widget del .amount,
	.cmsmasters_single_product .cmsmasters_product_cat,
	.cmsmasters_single_product .cmsmasters_product_cat a,
	.cmsmasters_product .cmsmasters_product_cat,
	.cmsmasters_product .cmsmasters_product_cat a,
	.cmsmasters_woo_wrap_result .woocommerce-result-count, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a,
	.cmsmasters_added_product_info_text,
	.shipping-calculator-button, 
	.shop_table.woocommerce-checkout-review-order-table .shipping th, 
	.shop_table.order_details tfoot tr td, 
	ul.order_details strong {
		font-family:" . luxury_spa_get_google_font($cmsmasters_option['luxury-spa' . '_h5_font_google_font']) . $cmsmasters_option['luxury-spa' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['luxury-spa' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['luxury-spa' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['luxury-spa' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['luxury-spa' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['luxury-spa' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['luxury-spa' . '_h5_font_text_decoration'] . ";
		letter-spacing:2px;
	}
	
	.widget_product_tag_cloud a {
		font-size:" . $cmsmasters_option['luxury-spa' . '_h5_font_font_size'] . "px !important;
	}
	
	.shop_table.woocommerce-checkout-review-order-table .shipping th, 
	.shop_table.order_details tfoot tr td, 
	ul.order_details strong {
		font-size:" . ((int) $cmsmasters_option['luxury-spa' . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['luxury-spa' . '_h5_font_line_height'] + 2) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.onsale, 
	.out-of-stock, 
	.stock, 
	.cmsmasters_product .product_button span,
	.cmsmasters_product .price ins,
	.cmsmasters_product_category_shortcode.puzzle .cmsmasters_product .price del,
	.form-row label, 
	.form-row label a, 
	.cmsmasters_single_product .product_meta, 
	.cmsmasters_single_product .product_meta a, 
	.widget > .product_list_widget ins .amount {
		font-family:" . luxury_spa_get_google_font($cmsmasters_option['luxury-spa' . '_h6_font_google_font']) . $cmsmasters_option['luxury-spa' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['luxury-spa' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['luxury-spa' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['luxury-spa' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['luxury-spa' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['luxury-spa' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['luxury-spa' . '_h6_font_text_decoration'] . ";
		letter-spacing:2px;
	}
	
	.cmsmasters_product .product_button span {
		font-size:" . ((int) $cmsmasters_option['luxury-spa' . '_h6_font_font_size'] + 2) . "px;
		letter-spacing:normal;
	}
	
	.cmsmasters_single_product .price del,
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total .amount, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	.widget > .product_list_widget ins .amount {
		font-size:" . ((int) $cmsmasters_option['luxury-spa' . '_h6_font_font_size'] + 3) . "px;
	}
	
	.cmsmasters_product_category_shortcode.puzzle .cmsmasters_product .price,
	.cmsmasters_product .price ins {
		font-size:" . ((int) $cmsmasters_option['luxury-spa' . '_h6_font_font_size'] + 5) . "px;
		line-height:" . ((int) $cmsmasters_option['luxury-spa' . '_h6_font_font_size'] + 4) . "px;
		letter-spacing:normal;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.woocommerce-message a {
		font-family:" . luxury_spa_get_google_font($cmsmasters_option['luxury-spa' . '_button_font_google_font']) . $cmsmasters_option['luxury-spa' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['luxury-spa' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['luxury-spa' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['luxury-spa' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['luxury-spa' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['luxury-spa' . '_button_font_text_transform'] . ";
		letter-spacing:2px;
	}
	/* Finish Button Font */
	
	
	/* Start Text Fields Font */
	.select2-dropdown,
	.select2-container .select2-choice,
	.select2-container .select2-choice>.select2-chosen,
	.select2-result,
	.select2-container {
		font-family:" . luxury_spa_get_google_font($cmsmasters_option['luxury-spa' . '_input_font_google_font']) . $cmsmasters_option['luxury-spa' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['luxury-spa' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['luxury-spa' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['luxury-spa' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['luxury-spa' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	

/***************** Finish WooCommerce Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('luxury_spa_theme_fonts_filter', 'luxury_spa_woocommerce_fonts');

