<?php
/**
 * Template Name: Blank Full Width
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
        <?php
            // the_content();
            // while ( have_posts() ) : the_post();

            // endwhile;
        ?>
    </div>
</div>

<?php
get_footer();
?>
