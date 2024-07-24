<?php
/**
 * @package 	WordPress
 * @subpackage 	Luxury Spa
 * @version		1.1.1
 *
 * Posts Slider Post Template
 * Created by CMSMasters
 *
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && luxury_spa_slider_post_check_exc_cont('post')) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Posts Slider Post Article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_post'); ?>>
	<div class="cmsmasters_slider_post_outer">
	<?php
		echo '<div class="cmsmasters_slider_post_media_wrap">';

			luxury_spa_thumb_rollover(get_the_ID(), 'cmsmasters-project-masonry-thumb', false, false, false, false, false, false, false, false, true, false, false);

			$categories ? luxury_spa_get_slider_post_category(get_the_ID(), 'category', 'post') : '';

		echo '</div>';


		if ($title || $author || $date || $excerpt || $likes || $comments || $more) {
			echo '<div class="cmsmasters_slider_post_inner">';

				$title ? luxury_spa_slider_post_heading(get_the_ID(), 'post', 'h3') : '';


				if ($author || $date) {
					echo '<div class="cmsmasters_slider_post_cont_info entry-meta">';

						$author ? luxury_spa_get_slider_post_author('post') : '';

						$date ? luxury_spa_get_slider_post_date('post') : '';

					echo '</div>';
				}


				$excerpt ? luxury_spa_slider_post_exc_cont('post') : '';


				if ($more || $likes || $comments) {
					echo '<footer class="cmsmasters_slider_post_footer entry-meta">';

						$comments ? luxury_spa_get_slider_post_comments('post') : '';

						$likes ? luxury_spa_slider_post_like('post') : '';

						$more ? luxury_spa_slider_post_more(get_the_ID()) : '';

					echo '</footer>';
				}

			echo '</div>';
		}
	?>
	</div>
</article>
<!-- Finish Posts Slider Post Article -->

