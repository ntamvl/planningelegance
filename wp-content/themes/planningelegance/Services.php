
<?php
/**
 * Template Name: Services Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section id="innrbox">
      
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin:10px 0px;">SERVICES</h1>
                <ol class="breadcrumb">
                    <?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
                </ol>
            </div>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; // end of the loop. ?>

        
      <div id="portfolio">
            <div class="row">
            	<div class="services">
				
				<?php
				$args = array( 
							'child_of' => 11, 
							'parent ' => 11,
							'hierarchical' => 0,
							'sort_column' => 'menu_order', 
							'sort_order' => 'asc'
							);
							
					$mypages = get_pages( $args );			
					foreach($mypages as $page)
					{
						if($page->post_parent==11)
						{	
						  $content = $page->post_content;
						  $name	=	strtolower($page->post_title);
						  $name	=	str_replace (" ", "", $name);
						  $imgurl = wp_get_attachment_url( get_post_thumbnail_id($page->ID) );				  
			?>
					
                <div class="col-sm-6 portfolio-item">
                    <img src="<?php echo $imgurl; ?>" class="img-responsive" alt="">
                    <h4 class="text-center h4bg"><?php echo $name;?></h4>
                    <div class="serv-txt text-center">
                    <?php echo $content;?>
                    <a target="_blank" class="btn btn-warning" type="button" href="<?php echo get_site_url(); ?>/?page_id=35">Request a free quote today!</a>
                    </div>
                </div>
                <?php }} ?>
                
                
                <p style="text-align: center;" class="wht-fnt">We would like to thank <strong><a target="_blank" href="http://www.aacreation.com/#/home/" title="Wedding Photography">AAcreation Photography</a></strong> for these behind-the-scenes images.</p>
            </div>
            </div>
    </div>
      
       </section>
<?php
get_footer();
?>

