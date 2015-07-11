<?php
/**
 * Template Name: New Home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="row">
  <?php
      while ( have_posts() ) : the_post();
          the_content();
      endwhile;
  ?>
    <div class="col-lg-12">

    </div>
</div>

<?php
//get_sidebar();
get_footer();
