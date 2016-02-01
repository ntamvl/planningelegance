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
    <?php if (get_field('only_show_images') != true) { ?>
    <div class="row blog">
        <div class="col-md-4">
            <h2>
                <a href="<?php the_permalink($post->ID); ?>"><?php the_title(); ?></a>
            </h2>
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
            <span class="entry-date"><?php echo $wedding_date; ?></span>
        </div>
        <div class="col-md-8">
            <?php if($imgurl): ?>
                <img class="img-responsive img-thumbnail" src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="blog-content">
                <?php the_excerpt(); ?>
            </div>

            <div>
                <?php if (get_field('image_preview')) { ?>
                    <img class="img-responsive img-thumbnail" src="<?php echo get_field('image_preview'); ?>" alt="<?php the_title(); ?>">
                <?php } ?>
                <div class="photoset-grid-basic hide" data-layout="12" style="visibility: hidden;">
                    <?php if (get_field('thumbnail_1')) { ?>
                        <img src="<?php echo wp_get_attachment_image_src( get_field('thumbnail_1') , 'featured-blog-image')[0]; ?>" data-highres="<?php echo wp_get_attachment_image_src( get_field('thumbnail_1') , 'large')[0]; ?>">
                    <?php } ?>
                    <?php if (get_field('thumbnail_2')) { ?>
                        <img src="<?php echo wp_get_attachment_image_src( get_field('thumbnail_2') , 'medium')[0]; ?>" data-highres="<?php echo wp_get_attachment_image_src( get_field('thumbnail_2') , 'large')[0]; ?>">
                    <?php } ?>
                    <?php if (get_field('thumbnail_3')) { ?>
                        <img src="<?php echo wp_get_attachment_image_src( get_field('thumbnail_3') , 'medium')[0]; ?>" data-highres="<?php echo wp_get_attachment_image_src( get_field('thumbnail_3') , 'large')[0]; ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="row blog">
        <div class="col-md-4">
            <h2>
                <a href="<?php the_permalink($post->ID); ?>"><?php the_title(); ?></a>
            </h2>
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
            <span class="entry-date"><?php echo $wedding_date; ?></span>
        </div>
        <div class="col-md-8">
            <?php if (get_field('image_preview')) { ?>
                <img class="img-responsive img-thumbnail" src="<?php echo get_field('image_preview'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>
            <div class="blog-content hide">
                <?php the_excerpt(); ?>
            </div>

            <div class="hide">
                <?php if (get_field('image_preview')) { ?>
                    <img class="img-responsive img-thumbnail" src="<?php echo get_field('image_preview'); ?>" alt="<?php the_title(); ?>">
                <?php } ?>
                <div class="photoset-grid-basic hide" data-layout="12" style="visibility: hidden;">
                    <?php if (get_field('thumbnail_1')) { ?>
                        <img src="<?php echo wp_get_attachment_image_src( get_field('thumbnail_1') , 'featured-blog-image')[0]; ?>" data-highres="<?php echo wp_get_attachment_image_src( get_field('thumbnail_1') , 'large')[0]; ?>">
                    <?php } ?>
                    <?php if (get_field('thumbnail_2')) { ?>
                        <img src="<?php echo wp_get_attachment_image_src( get_field('thumbnail_2') , 'medium')[0]; ?>" data-highres="<?php echo wp_get_attachment_image_src( get_field('thumbnail_2') , 'large')[0]; ?>">
                    <?php } ?>
                    <?php if (get_field('thumbnail_3')) { ?>
                        <img src="<?php echo wp_get_attachment_image_src( get_field('thumbnail_3') , 'medium')[0]; ?>" data-highres="<?php echo wp_get_attachment_image_src( get_field('thumbnail_3') , 'large')[0]; ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php }  ?>
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

<script type="text/javascript">

    $('.photoset-grid-basic').photosetGrid({
        gutter: '5px',
        borderActive: true,
        borderWidth: '3px',
        borderColor: '#fff',
        onComplete: function(){
            $('.photoset-grid-basic').attr('style', '');
        }
    });

</script>