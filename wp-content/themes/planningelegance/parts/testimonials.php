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
    <?php
    $the_query = new WP_Query(array(
        'post_type'         => 'post',
        'meta_key'          => 'wedding_date',
        'orderby'           => 'meta_value_num',
        'order'             => 'DESC'
    ));
    ?>
    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
    <?php $imgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
    <div class="row news blog">
        <div class="col-md-3">
            <i class="fa fa-quote-left fa-2x fa-pull-right testimo-position"></i>
            <?php if($imgurl): ?>
            <!-- <img class="img-responsive img-thumbnail img-circle circle-image" src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>"> -->
            <a href="<?php the_permalink($post->ID); ?>">
                <img class="circle-image" src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>">
            </a>
            <?php endif; ?>
            <center class="testimo-title">
                <h2 class="news-title">
                    <a href="<?php the_permalink($post->ID); ?>"><?php the_title(); ?></a>
                </h2>
                <!-- <div> <?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?></div> -->
                <?php
                $wedding_date = date('F j, Y');
                $wedding_date_value = get_field('wedding_date');
                if ( $wedding_date_value ) {
                    $date_value = DateTime::createFromFormat('Ymd', $wedding_date_value);
                    $wedding_date = $date_value->format('F j, Y');
                } else {
                    $wedding_date = date('F j, Y');
                }
                ?>
                <div class="testimo-date">WEDDING DATE | <?php echo $wedding_date; ?></div>
                <!-- <div class="news-subtitle"><?php the_field('news_subtitle'); ?></div> -->
            </center>

        </div>
        <div class="col-md-9">
            <span class="news-entry-date hide"><?php echo get_the_date(); ?></span>
            <div class="news-content i-text">
                <!-- <i class="fa fa-quote-left fa-2x fa-pull-left testimo-position"></i> -->
                <?php the_content(); ?>
                <?php //echo get_excerpt(1200); ?>
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
