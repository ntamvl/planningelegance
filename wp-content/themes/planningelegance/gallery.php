<?php
/**
 * Template Name: Gallery Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section id="innrbox">
 <div class="row">
            <div class="col-lg-12">
                <h1 style="margin:10px 0px;">GALLERY PAGE</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">HOME</a>
                    </li>
                    <li class="active">GALLERY</li>
                </ol>
            </div>
        </div><div class="row">
        <div id="portfolio">
            <div class="row">
                <div class="col-lg-12">
                    <h2>GALLERY – PICTURES FROM OUR PAST EVENTS</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
            	<div class="services">
                <div class="portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php while ( have_posts() ) : the_post(); ?>
			<?php the_content();?>
			<?php endwhile;?>
                        <?php //echo do_shortcode("[huge_it_gallery id='2']"); ?>
                        <!--<div>
<p style="text-align: center;">Planning Elegance would like to thank the following photographers for sharing these images with us:</p>
<p style="text-align: center;"><a target="_blank" href="http://www.aacreation.com" title="Indian Wedding Photography">AAcreation Photography</a><br>
<a target="_blank" href="http://www.globalphotography.net/" title="Indian Wedding Photographers">Global Photography</a><a href="http://www.globalphotography.net/" title="Indian Wedding Photographers"></a><br>
<a target="_blank" href="http://www.harvardphotography.com" title="Wedding Photographers">Harvard Photography</a><br>
<a target="_blank" href="http://www.lucerophotography.com" title="Wedding Photographers">Lucero Photography</a><br>
<a target="_blank" href="http://www.samsonproductions.com" title="Muslim Wedding Photographers">Samson Productions</a><br>
<a target="_blank" href="http://www.cantinalightpictures.com">Cantina Light Pictures</a><br>
<a target="_blank" href="http://www.ceanone.com">Cean One Photography</a><br>
<a target="_blank" href="http://www.jimkennedyphotographers.com">Jim Kennedy Photographers</a><br>
<a target="_blank" href="http://www.two1studio.com">Two1 Studios</a></p>
                     </div>-->
                     <br>
                     <center>
                     <?php #echo get_feild('bottom_links',23);?>
                     <?php 
                     $field = get_field('bottom_links',23); 
                     echo $field;
                     ?>
                     </center> 
                    </a>
                   
                </div>
                
      </section>
<?php
get_footer(); ?>
