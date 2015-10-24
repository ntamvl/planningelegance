<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="container">
<div class="row blog-breadcrumb">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ol>
    </div>
</div>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="row blog-detail">
    <div class="col-md-12">
      <?php $imgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
      <?php if ($imgurl): ?>
      <div class="blog-detail-thumb">
        <img class="img-responsive img-thumbnail" src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>">
      </div>
      <?php endif; ?>
      <h1><?php the_title()?></h1>
      <div class="blog-date">
        <span class="entry-date"><?php echo get_the_date(); ?></span>
      </div>
      <div class="blog-single-content">
        <?php the_content()?>
      </div>
    </div>
  </div>
<?php endwhile; ?>
</div>
<center>
  <span class="nav-previous pull-left"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
  <span class="nav-next pull-right"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span></center>
<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
