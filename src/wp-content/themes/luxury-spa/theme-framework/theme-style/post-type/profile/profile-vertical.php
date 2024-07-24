<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version		1.1.1
 *
 * Profile Vertical Template
 * Created by CMSMasters
 *
 */


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>
<!-- Start Profile Vertical Article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_profile_vertical'); ?>>
	<div class="profile_outer">
	<?php
	if (has_post_thumbnail()) {
		luxury_spa_thumb(get_the_ID(), 'cmsmasters-profile-thumb', true, false, false, false, false);
	}


	echo '<div class="profile_inner">' .
		'<div class="profile_header_wrap">';

		luxury_spa_profile_heading(get_the_ID(), 'h2', $cmsmasters_profile_subtitle, 'h5');

		echo '</div>';

		luxury_spa_profile_exc_cont();

		luxury_spa_profile_social_icons($cmsmasters_profile_social, $profile_id);

	echo '</div>';
	?>
	</div>
</article>
<!-- Finish Profile Vertical Article -->

