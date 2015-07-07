<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section id="innrbox">
 <div class="row">
            <div class="col-lg-12">
                <h1 style="margin:10px 0px;">ABOUT THE PLANNING ELEGANCE TEAM</h1>
                <ol class="breadcrumb">
                     <?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
                </ol>
            </div>
        </div>

		           <div class="row"><br/>
            <?php 
		while ( have_posts() ) : the_post();
		$imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );				  
	?>
            <div class="col-md-6">               
                <img class="img-responsive" src="<?php echo $imgurl;?>" alt="<?php the_title();?>">
            </div>
            <div class="col-md-6">
				<?php the_content();?>
				
            </div>
        <?php endwhile; // end of the loop. ?>
        </div>
        <!-- /.row -->
    <div id="portfolio">
            <div class="row">
                <div class="col-lg-12">
                    <h2>OUR COORDINATORS</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
            	<div class="services">
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a1.jpg" class="img-responsive" alt="">
                        
                    </a>
                    <h4 class="text-center h4bg">Mili R. Shah</h4>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a2.jpg" class="img-responsive" alt="">
                        
                    </a>
                    <h4 class="text-center h4bg">Sara Seto</h4>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a3.jpg" class="img-responsive" alt="">
                        
                    </a>
                    <h4 class="text-center h4bg">Bea Hilario</h4>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a4.jpg" class="img-responsive" alt="">
                        
                    </a>
                    <h4 class="text-center h4bg">Cindy Boun</h4>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a5.jpg" class="img-responsive" alt="">
                        
                    </a>
                    <h4 class="text-center h4bg">Jessica White</h4>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a6.jpg" class="img-responsive" alt="">
                        
                    </a>
                    <h4 class="text-center h4bg">Cristen Flores</h4>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a7.jpg" class="img-responsive" alt="">
                        
                    </a>
                    <h4 class="text-center h4bg">Sarah Sutman</h4>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a8.jpg" class="img-responsive" alt="">
                        
                    </a>
                    <h4 class="text-center h4bg">Teresa Arriaza</h4>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a9.jpg" class="img-responsive" alt="">
                        
                    </a>
                    <h4 class="text-center h4bg">Elizabeth Nordenholt</h4>
                </div>
                <div class="col-lg-9 pull-right">
               	  <p class="wht-fnt">We would like to thank Lindsay Ricketts of Lindsay Ricketts Photography for providing us with our wonderful company portraits. Lindsay has photographed for numerous South Asian weddings and Planning Elegance looks forward to continually working with her company.</p>
                    <div class="col-lg-5 paddNone"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo-Color-1-2.jpg" class="img-responsive" alt=""/></div>
                </div>
            </div>
            </div>
    </div>
      </section>
<?php get_footer(); ?>
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 paddNone">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/a1.jpg" class="img-responsive img-centered" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h3>Mili R. Shah</h3>
                            <h4>Owner and Lead Wedding Coordinator</h4>
                            <a href="#">Blogger for the Groom</a>
                            <p>&nbsp;</p>
                            <p>Mili is one of the founders of Planning Elegance, and wanted to create a company that can combined team work and hard work to any type of event. She prides herself on her unique ideas and friendly personality. She loves how Planning Elegance caters to different cultures and religions. She enjoys the knowledge and immersion into various cultures that she gets through this job. Her favorite type of weddings are fusion weddings which include inter-racial, inter-cultural, and inter-religious weddings. Mili is great with kids, as her formal educational training and occupation are teaching. Mili takes the lead on the wedding day while remaining calm through hectic situations and is still able to manage whatever comes her way. She loves Indian food, family, and Las Vegas!</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 paddNone">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/a2.jpg" class="img-responsive img-centered" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h3>Sara Seto</h3>
                            <h4>Lead Assistant Coordinator</h4>
                            <a href="#">Dream Wedding Blogger</a>
                            <p>&nbsp;</p>
                            <p>Sara has been interested in event planning since high school and has coordinated many events in different organizations which she has been a part of. She recently graduated with a Bachelors of Arts in Psychology from the University of California, Los Angele.  At UCLA, she was involved in the Pediatric AIDS Coalition, Cub Tours and Delta Delta Delta Sorority. She was able to intern the summer of 2011 for Planning Elegance and realized how much of a passion she has for wedding planning and cannot wait to be able to assist at more weddings! Sara’s favorite part of weddings is when the bride and groom walk down the aisle together after the ceremony as husband and wife. She loves all types of ethnic foods, but her favorite is Japanese. In her free time Sara loves watching movies, baking, and scrap-booking.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 paddNone">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/a3.jpg" class="img-responsive img-centered" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h3>Bea Hilario</h3>
                            <h4>Assistant Coordinator</h4>
                            <a href="#">Bride To Bea Blogger</a>
                            <p>&nbsp;</p>
                            <p>Bea Hilario discovered her passion for event planning while helping her former employer plan their Christmas party. Bea enjoyed every aspect of it from researching possible venues to making her very own invitations. Bea joined the Planning Elegance team in 2012 and is now certain that planning weddings is her true passion. When it comes to planning weddings, Bea likes to think outside the box to keep things interesting! In her spare time, Bea loves to hike, travel, attend concerts, and spend time with her 3 year old niece, Jaylene.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 paddNone">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/a4.jpg" class="img-responsive img-centered" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h3>Cindy Boun</h3>
                            <h4>Assistant Coordinator</h4>
                            <a href="#">Uniquely You Blogger</a>
                            <p>&nbsp;</p>
                            <p>Growing up being a flower girl for many of her auntie’s and uncle’s weddings, Cindy fell in love with the wedding industry and always dreamed to be a part of it. After being graced with the opportunity to work at Planning Elegance, Cindy has fallen even more in love with the industry and is so grateful to be learning and working with some of the most knowledgeable, fun, and awesome wedding coordinators. Her favorite aspect in helping plan a wedding is the moment the couple’s dreams and visions for their wedding come to life on the special day. The entire process, the before and after of a venue, the mesmerizing decorations, etc. are part of what make this job amazing for her. Her favorite types of wedding is any kind of wedding that showcases the couple’s personalities and quirks. Those are the most genuine and fun to work! Her favorite type of food is pasta, she could live off it. When Cindy is not working with Planning Elegance, she is an ambitious student at California State University, Fullerton with high hopes of attending law school in the near future.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 paddNone">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/a5.jpg" class="img-responsive img-centered" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h3>Jessica White</h3>
                            <h4>Assistant Coordinator</h4>
                            <a href="#">Fantastic Fusion Blogger</a>
                            <p>&nbsp;</p>
                            <p>Jessica is a twenty-seven year old graduate student who loves working with Planning Elegance. Having worked with different event groups, Jessica enjoys the unique opportunities to encounter different cultures from working with Planning Elegance. Her first experience working with Planning Elegance was a fusion Indian Mexican Wedding in Los Angeles. The fusion of the two cultures was such a special experience. Jessica enjoys working with all the different vendors to ensure that guests have a unique experience that is memorable and special. Her favorite part of the wedding is seeing all the artistic elements come together to create these extravagant beautiful reception venues. She loves Indian food and getting the chance to try something new every event! In her free time, Jessica loves to travel. She has been to thirteen countries so far and plans to see more of the world, perhaps even India one day!</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 paddNone">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/a6.jpg" class="img-responsive img-centered" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h3>Cristen Flores</h3>
                            <h4>Assistant Coordinator</h4>
                            <a href="#">Do It Yourself Blogger</a>
                            <p>&nbsp;</p>
                            <p>Cristen became interested in wedding planning in college due to an internship in 2008. Since then, she has had the pleasure of helping create weddings throughout Southern California. When she had the opportunity to join the Planning Elegance team, she was so excited to have a chance to learn about South Asian weddings and all the various events that come with them. The best thing about all weddings is the fact that the bride and groom are uniting their families and friends to celebrate their love. Whether it is an intimate elopement or a four day extravaganza, one thing remains the same: love is always celebrated. In Cristen’s spare time, she loves doing crafts for her house, and her friends, or she has random photo shoots with her two year old daughter.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 paddNone">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/a7.jpg" class="img-responsive img-centered" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h3>Sarah Sutman</h3>
                            <h4>Assistant Coordinator</h4>
                            <a href="#">Budget Bride Blogger</a>
                            <p>&nbsp;</p>
                            <p>Sarah was inspired to become a wedding planner during college when she started creating events for several organizations at Cal State Fullerton and her friends. After her career as a Reality TV producer, Sarah started interning as a wedding coordinator. From bridal showers to celebrity weddings, Sarah has experience and a passion for planning all types of events. What she loves about Planning Elegance is that it is a company made up of extremely passionate, talented, and young women who strive to create the perfect day for the bride and groom. Her favorite aspect of wedding coordination is being able to make the day that the bride and groom have always dreamed of come to life. Sarah enjoys researching different ways to create a budget friendly event that is just as spectacular as one that costs thousands. Sarah is a huge fan of Do It Yourself projects that not only help save money but add a special touch to any event. She is a vegetarian that could live off Indian and Thai cuisine. In her free time, she enjoys to be active outdoors: hiking, bike-riding, kayaking. Those are just a few of her favorite things to do with her husband and friends.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 paddNone">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/a8.jpg" class="img-responsive img-centered" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h3>Teresa Arriaza</h3>
                            <h4>Assistant Coordinator</h4>
                            <a href="#">International & Culture Blogger</a>
                            <p>&nbsp;</p>
                            <p>Teresa has been helping friends and family plan their weddings and special events for over ten years. After helping her best friend plan her wedding and being the maid of honor, she realized that wedding planning brought her joy. Teresa likes that Planning Elegance makes couples feel comfortable during the planning process of their dream wedding and that the execution of the special day goes smoothly. Teresa’s favorite aspects of event coordination is analyzing the collaborative thoughts and ideas that the couples have and making them all come together during the event. Cultural and themed weddings are some of Teresa’s favorite types! When she is not working, she enjoys camping, bowling, wine tasting, off road racing, traveling, and spending time with friends. Coming from a Norwegian mother and Chilean father, Teresa appreciates international traditions and takes pleasure in continuously learning about different cultures and traditions.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 paddNone">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/a9.jpg" class="img-responsive img-centered" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h3>Elizabeth Nordenholt</h3>
                            <h4>Assistant Coordinator Intern</h4>
                            <a href="#">Offbeat Blogger</a>
                            <p>&nbsp;</p>
                            <p>Elizabeth hails from Texas and is excited to be joining the Planning Elegance team. She was initially drawn to wedding and event planning as a way to use her theatre management background in a way that more directly impacted people. She loves how Planning elegance helps to facilitate so many people’s special days! Her favorite part of working events is getting to meet and interact with the happy couple on their special day. She enjoys working high energy and unique wedding that reflect who the couple is and their personal tastes. Her favorite type of food is anything spicy as well as southern comfort food like chicken fried steak. When she’s not working weddings, she enjoys running, working on theatrical productions, wine tastings, and reading. She is currently training for her third half marathon and looking forward to working Planning Elegance weddings!</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
