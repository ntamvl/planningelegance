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
    <?php while (have_posts()): the_post(); ?>
    <?php $imgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
    <div class="row blog">
        <div class="col-md-4">
            <h2>
                <a href="<?php the_permalink($post->ID); ?>"><?php the_title(); ?></a>
            </h2>
            <span class="entry-date"><?php echo get_the_date(); ?></span>
        </div>
        <div class="col-md-8">
            <?php if($imgurl): ?>
                <img class="img-responsive img-thumbnail" src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="blog-content">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
    <div class="blog-line"></div>
    <?php endwhile; ?>
    <div class="row hide">
        <center>
            <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'planningelegance' ) . '</span> %title' ); ?></span>
            <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'planningelegance' ) . '</span>' ); ?></span>
        </center>
    </div>
    <div class="subscrbBX hide"><?php dynamic_sidebar('subscribenow'); ?></div>
</section>