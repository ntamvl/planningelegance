<?php
/**
* Template Name: New Blog
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header(); ?>
<section id="innrbox">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="margin:10px 0px;"><?php the_title(); ?></h1>
            <ol class="breadcrumb">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </ol>
        </div>
    </div>
    <div class="row">
        <br/>
        <div class="col-lg-12">
            <?php
            while (have_posts()): the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
    <div class="row">
        <center>
            <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'planningelegance' ) . '</span> %title' ); ?></span>
            <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'planningelegance' ) . '</span>' ); ?></span>
        </center>
    </div>
    <div class="subscrbBX hide"><?php dynamic_sidebar('subscribenow'); ?></div>
</section>
<?php
get_footer(); ?>
