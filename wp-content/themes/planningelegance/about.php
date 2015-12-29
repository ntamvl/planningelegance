<?php
/**
* Template Name: About Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header(); ?>
<section id="innrbox">
    <div class="row">
        <div class="col-lg-12">
            <center class="blog-category-title">
                <h1 style="margin:10px 0px;"><?php the_title(); ?></h1>
            </center>
            <ol class="breadcrumb">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </ol>
        </div>
    </div>
    <div class="row"><br/>
        <?php
        while (have_posts()) :the_post();
            $imgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
        <!-- <div class="col-md-6">
            <img class="img-responsive" src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>">
        </div> -->
        <div class="col-md-12 about-link">
            <?php the_content(); ?>
        </div>
        <?php
        endwhile;
        ?>
    </div>
    <div class="row">
      <h2 class="breadcrumb text-center">OUR COORDINATORS</h2>
      <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 50 );
      $portfolio = new WP_Query( $args );
      while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
      <?php $imgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
      <div class="row portfolio-item">
          <div class="col-md-3">
            <a href="<?php the_permalink() ?>" alt="<?php the_title(); ?>">
              <img class="img-responsive" src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>"></a>
          </div>
          <div class="col-md-9">
            <div class="portfolio-title">
              <a href="<?php the_permalink() ?>" alt="<?php the_title(); ?>">
                <?php the_title(); ?></a>
            </div>
            <div class="portfolio-title-sub"><?php the_field('duty'); ?></div>
            <div class="portfolio-title-line"></div>
            <div class="portfolio-content"><?php the_content(); ?></div>
          </div>
      </div>
      <?php endwhile; ?>
    </div>
</section>
<?php
get_footer(); ?>
