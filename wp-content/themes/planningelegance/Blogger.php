<?php
/**
 * Template Name: Blogger Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section id="innrbox">
 <div class="row">
            <div class="col-lg-12">
                <h1 style="margin:10px 0px;">BLOGGER PAGE</h1>
                <ol class="breadcrumb">
                     <?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
                </ol>
            </div>
        </div>
     <div class="row">
        <div id="portfolio">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Blogger Personalities</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
            	
                      <div>
<div >
<p style="text-align: center;">
</p>
                    <?php
				$args = array( 
							'child_of' => 368, 
							'parent ' => 368,
							'hierarchical' => 0,
							'sort_column' => 'menu_order', 
							'sort_order' => 'asc'
							);
							
					$mypages = get_pages( $args );			
					foreach($mypages as $page)
					{
						if($page->post_parent==368)
						{	
						  $content = $page->post_content;
						  $name	=	strtolower($page->post_title);
						  $name	=	str_replace (" ", "", $name);
						  $imgurl = wp_get_attachment_url( get_post_thumbnail_id($page->ID)      );				  
			?>
			<p style="text-align: center;"><img width="28" height="28" alt="" src="<?php echo get_template_directory_uri(); ?>/images/PE-Flower-White-BG-e1334697099117.png" title="Wedding Planners Orange County" class="aligncenter size-full wp-image-4321"></p>
			  <center><img src="<?php echo $imgurl; ?>" class="img-responsive" alt=""></center>
			<?php echo $content;?>


	    <?php }} ?>
	
	<p style="text-align: center;"><img width="28" height="28" alt="" src="<?php echo get_template_directory_uri(); ?>/images/PE-Flower-White-BG-e1334697099117.png" title="Wedding Planners Orange County" class="aligncenter size-full wp-image-4321"></p>


</div></div>

                     
           </div>
                    </a>
                   
                </div>
                
      </section>
<?php
get_footer(); ?>

