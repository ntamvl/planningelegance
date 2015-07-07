<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
     <div class="container">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			?>
			<h1><?php the_title()?></h1>
			<?php the_content()?>
			<?php
			
				endwhile;
			?>
		</div><!-- #content -->
<center><span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span></center>
<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
