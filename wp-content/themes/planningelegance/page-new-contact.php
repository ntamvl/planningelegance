<?php
/**
 * Template Name: New Contact
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<div class="row">
  <article class="post-35 page type-page status-publish hentry">
    <header class="entry-header"><h1 class="entry-title"><?php the_title(); ?></h1></header>
    <div class="entry-content">
      <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </ol>
        </div>
      </div>
      <div class="wht-fnt">
        <div class="col-lg-12">
        <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        ?>
        </div>
      </div>
    </div>

  </article>
</div>

<?php
//get_sidebar();
get_footer();
