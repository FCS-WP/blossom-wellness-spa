<?php 
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version		1.0.3
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by CMSMasters
 * 
 */


function luxury_spa_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'luxury-spa');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'luxury-spa');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'luxury-spa');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function luxury_spa_options_single_sections() {
	$tab = luxury_spa_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'luxury-spa');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'luxury-spa');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'luxury-spa');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function luxury_spa_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = luxury_spa_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = luxury_spa_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'luxury-spa') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'luxury-spa'), 
			'desc' => esc_html__('enable', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_nav_order_cat'] 
		);
		
		if (class_exists('Cmsmasters_Content_Composer')) {
			$options[] = array( 
				'section' => 'post_section', 
				'id' => 'luxury-spa' . '_blog_post_share_box', 
				'title' => esc_html__('Sharing Box', 'luxury-spa'), 
				'desc' => esc_html__('show', 'luxury-spa'), 
				'type' => 'checkbox', 
				'std' => $defaults[$tab]['luxury-spa' . '_blog_post_share_box'] 
			);
		}
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'luxury-spa') . '|related', 
				esc_html__('Show Popular Posts', 'luxury-spa') . '|popular', 
				esc_html__('Show Recent Posts', 'luxury-spa') . '|recent', 
				esc_html__('Hide More Posts Box', 'luxury-spa') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'luxury-spa'), 
			'desc' => esc_html__('posts', 'luxury-spa'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'luxury-spa' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'luxury-spa'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'luxury-spa'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['luxury-spa' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'luxury-spa'), 
			'desc' => esc_html__('Enter a project details block title', 'luxury-spa'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Projects Navigation Order by Category', 'luxury-spa'), 
			'desc' => esc_html__('enable', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'luxury-spa'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'luxury-spa') . '|related', 
				esc_html__('Show Popular Projects', 'luxury-spa') . '|popular', 
				esc_html__('Show Recent Projects', 'luxury-spa') . '|recent', 
				esc_html__('Hide More Projects Box', 'luxury-spa') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'luxury-spa'), 
			'desc' => esc_html__('projects', 'luxury-spa'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'luxury-spa'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'luxury-spa'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'luxury-spa'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'luxury-spa'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'luxury-spa'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'luxury-spa'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'luxury-spa' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'luxury-spa'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'luxury-spa'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'luxury-spa' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'luxury-spa' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'luxury-spa'), 
			'desc' => esc_html__('Enter a profile details block title', 'luxury-spa'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'luxury-spa' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'luxury-spa' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'luxury-spa' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'luxury-spa' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'luxury-spa' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'luxury-spa'), 
			'desc' => esc_html__('enable', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'luxury-spa' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'luxury-spa'), 
			'desc' => esc_html__('show', 'luxury-spa'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['luxury-spa' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'luxury-spa' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'luxury-spa'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'luxury-spa'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'luxury-spa' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'luxury-spa'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'luxury-spa'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['luxury-spa' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

