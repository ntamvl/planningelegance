<section id="innrbox">
    <div class="row">
        <div class="col-lg-12">
            <center class="blog-category-title">
                <h1 style="margin:10px 0px;"><?php echo get_the_category()[0]->name; ?></h1>
            </center>
            <ol class="breadcrumb">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </ol>
        </div>
    </div>
    <div class="space-20"></div>
    <?php while (have_posts()): the_post(); ?>
    <?php $imgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
    <?php $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'news-thumb' )[0]; ?>

    <div class="row news blog">
        <div class="col-md-5">
            <?php if($thumb_url): ?>
                <img class="img-thumbnail news-thumbnail" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
        <div class="col-md-7">
            <h2 class="news-title">
                <a href="<?php the_permalink($post->ID); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="news-subtitle"><?php the_field('news_subtitle'); ?></div>
            <span class="news-entry-date hide"><?php echo get_the_date(); ?></span>

            <div class="news-content">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
    <div class="row hide">
        <center>
            <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'planningelegance' ) . '</span> %title' ); ?></span>
            <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'planningelegance' ) . '</span>' ); ?></span>
        </center>
    </div>
    <div class="subscrbBX hide"><?php dynamic_sidebar('subscribenow'); ?></div>
</section>