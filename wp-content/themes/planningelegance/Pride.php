<?php
/**
 * Template Name: Pride Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section id="innrbox">
      
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin:10px 0px;">PRIDE</h1>
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
							'child_of' => 421, 
							'parent ' => 421,
							'hierarchical' => 0,
							'sort_column' => 'menu_order', 
							'sort_order' => 'asc'
							);
							
					$mypages = get_pages( $args );			
					foreach($mypages as $page)
					{
						if($page->post_parent==421)
						{	
						  $content = $page->post_content;
						  $name	=	strtolower($page->post_title);
						  $name	=	str_replace (" ", "", $name);
						  $imgurl = wp_get_attachment_url( get_post_thumbnail_id($page->ID) );				  
			?>
 <div >
<h2><strong><?php //echo $name;?></strong></h2>
<div >
<p class="wht-fnt"><?php echo $content;?></p>
<p style="text-align: center;"><img src="<?php echo $imgurl; ?>" class="img-responsive" alt=""></p>
</div>
                </div>
                <?php }} ?>
                
                <p style="text-align: center;"><img width="526" height="188" alt="" src="[php snippet=1]/imeges/Logo-Color-1-2.jpg" title="lindsay ricketts" class="aligncenter size-full wp-image-6875"></p>
                
            </div>
            </div>
    </div>
      
       </section>
<?php
get_footer();
?>

