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
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row portfolio-detail">
    <div class="col-md-3">
      <?php $imgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
      <img class="img-responsive img-thumbnail" src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>">
    </div>
    <div class="col-md-9">
      <h1><?php the_title()?></h1>
      <h4><?php the_field('duty'); ?></h4>
      <?php the_content()?>
    </div>
  </div>
  <?php endwhile; ?>
</div>

<center><span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
          <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span></center>
<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
