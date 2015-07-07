<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		<?php /*</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page --> */?>
	</div>
<!-- Footer -->
<footer>
            <div class="container">
            <div class="ftrmain">
            	<div class="col-md-4 paddNone"><a title="Scroll to Top" href="#" id="scroll-to-top" style="display: block; opacity: 1;">Top</a>
                <p style="color:#000;">Copyright &copy; PlanningElegance.com 2015  &nbsp;&nbsp; <a style="color:#000;" href="http://104.131.16.164/planningelegance/?page_id=412">Reviews</a><br>
Site by: <a style="color:#000;" href="http://www.infoicontechnologies.com" target="_blank">Infoicon Technologies</a></p> 
          
                </div>
                   
                <div class="col-md-4">
                <div class="social">
                <a target="_blank" href="https://www.facebook.com/planningelegance" class="fa fa-facebook-square fa-2x"></a>
                <a target="_blank" href="https://twitter.com/intent/follow?source=followbutton&variant=1.0&screen_name=wedding_tips" class="fa fa-twitter-square fa-2x"></a>
                <a target="_blank" href="https://plus.google.com/u/0/108192122824610700587/posts" class="fa fa-google-plus-square fa-2x"></a>
                <a target="_blank" href="https://www.pinterest.com/milisweddings/" class="fa fa-pinterest-square fa-2x"></a>
                  
                </div>
                </div>
                <div class="col-md-4 paddNone text-center">
                <form action="" method="post">
                    <div class="input-prepend"><span class="add-on"><i class="fa fa-envelope"></i></span>
                        <input type="text" id="" name="" placeholder="Newsletter">
                        <input type="submit" value="Subscribe Now!" class="btn btn-large" />
                    </div>
			
                   <script> jQuery("#frm-email").attr("placeholder", "Email Address"); </script>
              </form>
                </div>
                <div class="clearfix"></div>
                </div>
            </div>
        </footer>
</div>

	<?php wp_footer(); ?>
</body>
</html>
