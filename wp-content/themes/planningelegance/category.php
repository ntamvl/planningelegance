<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php $current_category = single_cat_title("", false); ?>

<?php
if (strtolower($current_category) == "blog") get_template_part('parts/blog');
elseif (strtolower($current_category) == "news") {
	get_template_part('parts/news');
} elseif (strtolower($current_category) == "testimonials") {
	get_template_part('parts/testimonials');
} else {
	get_template_part('parts/blog');
}

?>
<div class="row blog-paginate">
	<div class="col-md-12 text-center">
		<?php if ( function_exists('wp_bootstrap_pagination') ) wp_bootstrap_pagination(); ?>
	</div>
</div>

<?php

get_footer();
