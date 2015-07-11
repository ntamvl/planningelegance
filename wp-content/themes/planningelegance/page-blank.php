<?php
/**
* Template Name: New Blank Full Width
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
</section>
<?php
get_footer(); ?>
