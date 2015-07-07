<?php
/**
 * Template Name: Blog Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

        <div id="container paddNone">
            <div id="content">
 <div class="row">
            <div class="col-lg-12">
                <h1 style=" margin: 32px 0 10px;">BLOG PAGE</h1>
                <ol class="breadcrumb">
                  <?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
                </ol>
            </div>
		<div class="subscrbBX"><?php dynamic_sidebar('subscribenow'); ?></div>
        </div>
         <div class="row">
                <div class="col-lg-12">
                    <h2 style="margin-left:0px;">BLOG – PICTURES FROM OUR PAST EVENTS</h2>
			
                    <hr class="star-primary">
                </div>
            </div>
            <a target="_blank" class="pp-pinit-link" href="https://www.pinterest.com/milisweddings/"><img style="margin-left: 17px;" width="100" height="100" alt="" src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png"></a> <img style="margin-left: 17px;"class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/26.jpg" width="823" alt="" title="" id="wows1_0"/>
<div class="yogiimg">
<?php
$type = 'post';
$args=array(
  'post_type' => $type,
  'post_status' => 'publish');

$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    
    <h2><?php the_title(); ?></h2>
    </a>
    <?php the_content(); ?>
   </div>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
            </div><!-- #content -->
        </div><!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

