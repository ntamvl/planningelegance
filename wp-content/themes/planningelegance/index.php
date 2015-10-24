<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

die('yogi');
?>

<div id="main-content" class="main-content">
<h1>HHHH</h1>
<?php
  if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
    // Include the featured content template.
    get_template_part( 'featured-content' );
  }
?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
    <?php die;?>
    <?php while ( have_posts() ) : the_post(); ?>
                            <div class="four-fifths left last">
                                <!-- FEATURED IMAGE -->

                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <?php if($image):?>
                  <div class="corp-head">
                    <a class="fancybox" data-fancybox-group="gallery" href="img/chef11.jpg" title="<?php the_title();?>">
                      <img alt="profileimage" src="<?php echo $image[0]; ?>" ></a>
                  </div>
                  <?php endif;?>
                  <div class="pcontent" id="pcontent">
                    <h1><?php the_title();?></h1>
                    <?php $content = get_the_content();
                          $content = strip_tags($content);  ?>
                    <?php echo substr($content, 0, 194); ?>

                    <span><a href="<?php the_permalink($post->ID); ?>" class="btn">Read More</a></span>
                  </div>
                  <!-- THE CONTENT -->
                      <?php   //wp_pagenavi();  ?>
                            </div>

              <?php endwhile; // end of the loop.?>

    </div><!-- #content -->
  </div><!-- #primary -->
  <?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->
<center><span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
          <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span></center>
<?php
//get_sidebar();
get_footer();
