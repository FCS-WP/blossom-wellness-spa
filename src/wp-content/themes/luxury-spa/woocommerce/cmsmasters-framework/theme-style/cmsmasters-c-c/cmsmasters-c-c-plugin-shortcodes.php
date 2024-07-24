<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version 	1.1.4
 * 
 * WooCommerce Content Composer Shortcodes
 * Created by CMSMasters
 * 
 */


function luxury_spa_woocommerce_shortcodes($shortcodes) {
	$shortcodes[] = 'cmsmasters_products';
	
	$shortcodes[] = 'cmsmasters_selected_products';
	
	$shortcodes[] = 'cmsmasters_product_category';
	
	
	return $shortcodes;
}

add_filter('cmsmasters_custom_shortcodes_filter', 'luxury_spa_woocommerce_shortcodes');


/**
 * Products
 */
function cmsmasters_products($atts, $content = null) {
	extract(shortcode_atts(array( 
		'shortcode_id' => 			'', 
		'products_shortcode' => 	'recent_products', 
		'orderby' => 				'date', 
		'order' => 					'DESC', 
		'count' => 					'10', 
		'columns' => 				'4', 
		'classes' => 				'' 
	), $atts));
	
	
    $out = '<div class="cmsmasters_products_shortcode' . ' cmsmasters_' . $products_shortcode . 
	(($classes != '') ? ' ' . $classes : '') . 
	'">';
	
	
	if (!is_admin()) {
		$out .= do_shortcode('[' . $products_shortcode . ' ' . (($products_shortcode != 'best_selling_products' && $products_shortcode != 'top_rated_products') ? 'orderby="' . $orderby . '" order="' . $order . '" ' : '') . 'limit="' . $count . '" columns="' . $columns . '"]');
	}
	
	
	$out .= '</div>';
	
	
	return $out;
}



/**
 * Selected Products
 */
function cmsmasters_selected_products($atts, $content = null) {
	extract(shortcode_atts(array( 
		'shortcode_id' => 			'', 
		'orderby' => 				'date', 
		'order' => 					'DESC', 
		'ids' => 					'', 
		'columns' => 				'4', 
		'classes' => 				'' 
	), $atts));
	
	
    $out = '<div class="cmsmasters_selected_products_shortcode' . 
	(($classes != '') ? ' ' . $classes : '') . 
	'">';
	
	
	if (!is_admin()) {
		$out .= do_shortcode('[products orderby="' . $orderby . '" order="' . $order . '" columns="' . $columns . '" ids="' . $ids . '"]');
	}
	
	
	$out .= '</div>';
	
	
	return $out;
}



/**
 * Products Category
 */
function cmsmasters_product_category($atts, $content = null) {
    $new_atts = apply_filters('cmsmasters_product_category_atts_filter', array( 
		'shortcode_id' => 			'', 
		'layout' => 				'grid', 
		'columns' => 				'4', 
		'category' => 				'', 
		'orderby' => 				'date', 
		'order' => 					'DESC', 
		'product_metadata' => 		'categories,title,rating,price', 
		'classes' => 				'' 
    ) );
	
	
	$shortcode_name = 'product-category';
	
	$shortcode_path = CMSMASTERS_CONTENT_COMPOSER_TEMPLATE_DIR . '/cmsmasters-' . $shortcode_name . '.php';
	
	
	if (luxury_spa_locate_template($shortcode_path)) {
		$template_out = cmsmasters_composer_load_template($shortcode_path, array( 
			'atts' => 		$atts, 
			'new_atts' => 	$new_atts, 
			'content' => 	$content 
		) );
		
		
		return $template_out;
	}
	
	
	extract(shortcode_atts($new_atts, $atts));
	
	
	$unique_id = $shortcode_id;
	
	
	$args = array( 
		'ignore_sticky_posts' => 	1, 
		'orderby' => 				$orderby, 
		'order' => 					$order, 
		'posts_per_page' => 		'1000' 
	);
	
	
	if ($category != '') {
		$cat_array = explode(",", $category);
		
		$args['tax_query'] = array(
			array( 
				'taxonomy' => 	'product_cat', 
				'field' => 		'slug', 
				'terms' => 		$cat_array 
			)
		);
	}
	
	
	$query = new WP_Query($args);
	
	
	$out = '';
	
	
	if ($query->have_posts()) : 
	
		$out .= '<div id="cmsmasters_product_category_shortcode_' . esc_attr($unique_id) . '" class="cmsmasters_product_category_shortcode ' . esc_attr($layout) . 
		(($classes != '') ? ' ' . $classes : '') . '"' . 
			' data-layout="' . esc_attr($layout) . '"' . 
			' data-url="' . CMSMASTERS_CONTENT_COMPOSER_URL . '"' . 
			' data-categories="' . esc_attr($category) . '"' . 
			' data-orderby="' . esc_attr($orderby) . '"' . 
			' data-order="' . esc_attr($order) . '"' . 
			' data-metadata="' . esc_attr($product_metadata) . '"' . 
		'>';
		
			$out .= '<div class="woocommerce' . (($layout == 'grid') ? ' columns-' . $columns : '') . '" category="' . $category . '" orderby="' . $orderby . '" order="' . $order . '">' . 
				'<ul class="products cmsmasters_products' . (($layout == 'grid') ? ' columns-' . $columns : '') . '">';
			
			
					while ($query->have_posts()) : $query->the_post();
						
						/* Start Body Shortcode */
						
						if ( ! defined( 'ABSPATH' ) ) {
							exit; // Exit if accessed directly
						}
						
						global $post, $product, $woocommerce;

						// Ensure visibility
						if ( empty( $product ) || ! $product->is_visible() ) {
							return;
						}
						
						
						if ( ! isset( $classes ) ) 
							$classes = '';
						
						
						$cmsmasters_metadata = explode(',', $product_metadata);
						
						$categories = (get_terms(get_the_ID(), 'pr-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
						$title = in_array('title', $cmsmasters_metadata) ? true : false;
						$rating = in_array('rating', $cmsmasters_metadata) ? true : false;
						$price = in_array('price', $cmsmasters_metadata) ? true : false;
						
						
						$cmsmasters_product_size = get_post_meta(get_the_ID(), 'cmsmasters_product_size', true);
						
						if (!$cmsmasters_product_size) {
							$cmsmasters_product_size = 'one_x_one';
						}
						
						
						$attachment_ids = $product->get_gallery_image_ids();
						
						
						$out .= '<li class="' . join(' ', get_post_class() ) . ' ' . $cmsmasters_product_size . '">' . 
							'<article class="cmsmasters_product">' . 
								'<figure class="cmsmasters_product_img preloader">';
									
									if ($layout == 'grid') {
										$out .= woocommerce_get_product_thumbnail();
										
										
										if ($attachment_ids) {
											$attachment_id = $attachment_ids[0];
											
											$image = wp_get_attachment_image($attachment_id, apply_filters('single_product_small_thumbnail_size', 'shop_catalog'));
											
											$out .= apply_filters('woocommerce_single_product_image_thumbnail_html', sprintf($image));
										}
									} else {
										$out .= get_the_post_thumbnail( $post->ID, 'full');
									}
									
									
									if ( $product->is_on_sale() ) : 
										$out .= apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'luxury-spa' ) . '</span>', $post, $product ); 
									endif;
									
									
									$availability = $product->get_availability();
									
									
									if (esc_attr($availability['class']) == 'out-of-stock') {
										$out .= apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</span>', $availability['availability']);
									}
									
									
								$out .= '</figure>' . 
								'<div class="cmsmasters_product_inner">';
									
									
									if ($layout == 'puzzle') {
										
										if ($rating || $price || $categories || $title) {
											$out .= '<div class="cmsmasters_product_in_inner">';
											
											if ($rating || $price) {
												$out .= '<div class="cmsmasters_product_rating_price">';
												
												if ($rating) {
													$out .= luxury_spa_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full', false, '', false);
												}
												
												if ($price) {
													if ( $price_html = $product->get_price_html() ) : 
														
														$out .= '<span class="price">' . $price_html . '</span>';
													
													endif;
												}
												
												$out .= '</div>';
											}
											
											if ($categories || $title) {
												$out .= '<div class="cmsmasters_product_cat_title">';
												
												if ($categories) {
													if (get_the_terms($product->get_type(), 'product_cat')) {
														$out .= '<div class="cmsmasters_product_cat entry-meta">' . 
															luxury_spa_get_the_category_list($product->get_type(), 'product_cat', ', ') . 
														'</div>';
													}
												}
												
												if ($title) {
													$out .= '<header class="cmsmasters_product_header entry-header">' . 
														'<h2 class="cmsmasters_product_title entry-title">' . 
															'<a href="' . get_the_permalink() . '">' . 
																get_the_title() . 
															'</a>' . 
														'</h2>' . 
													'</header>';
												}
												
												$out .= '</div>';
											}
											
											$out .= '</div>';
										}
									} elseif ($layout == 'grid') {
										if ($title) {
											$out .= '<header class="cmsmasters_product_header entry-header">' . 
												'<h2 class="cmsmasters_product_title entry-title">' . 
													'<a href="' . get_the_permalink() . '">' . 
														get_the_title() . 
													'</a>' . 
												'</h2>' . 
											'</header>';
										}
										
										if ($categories) {
											if (get_the_terms($product->get_type(), 'product_cat')) {
												$out .= '<div class="cmsmasters_product_cat entry-meta">' . 
													luxury_spa_get_the_category_list($product->get_type(), 'product_cat', ', ') . 
												'</div>';
											}
										}
										
										$out .= '<div class="cmsmasters_product_info_wrap">' . 
											'<div class="cmsmasters_product_info">';
											
											if ($rating) {
												$out .= luxury_spa_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full', false, '', false);
											}
											
											if ($price) {
												if ( $price_html = $product->get_price_html() ) : 
													
													$out .= '<span class="price">' . $price_html . '</span>';
												
												endif;
											}
											
											$out .= '</div>';
											
											if ( 
												$product->is_purchasable() && 
												$product->get_type() == 'simple' && 
												$product->is_in_stock() 
											) {
												$out .= '<div class="cmsmasters_product_add_wrap">' . 
													'<a href="' . esc_url($product->add_to_cart_url()) . '" data-product_id="' . esc_attr($product->get_type()) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="product_button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="' . esc_attr__('Add to Cart', 'luxury-spa') . '">' . 
														'<span>' . esc_html__('Add to Cart', 'luxury-spa') . '</span>' . 
													'</a>';
													
													
													if (!is_admin()) {
														$out .= '<a href="' . esc_url(wc_get_cart_url()) . '" class="product_button added_to_cart wc-forward" title="' . esc_attr__('View Cart', 'luxury-spa') . '">' . 
															'<span>' . esc_html__('View Cart', 'luxury-spa') . '</span>' . 
														'</a>';
													}
													
												$out .= '</div>';
											}
											
										$out .= '</div>';
									}
									
								$out .= '</div>' . 
							'</article>' . 
						'</li>';
						
						/* Finish Body Shortcode */
						
					endwhile;
					
				$out .= '</ul>' . 
			'</div>';
			
			
		$out .= '</div>';
		
	endif;
	
	
	wp_reset_postdata();
	
	
	return $out;
}
