<?php
/**
 * Template Name: Faqs Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
 <section id="innrbox">

        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin:10px 0px;">FAQS</h1>
                <ol class="breadcrumb">
                        <?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
                </ol>
            </div>
        </div>
       
        <div class="row">
        <div class="col-lg-12">
        	
            <?php while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; // end of the loop. ?>
            <hr>
            <p>&nbsp;</p>
        </div>
        
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                1. Ask a Wedding Planner: If you could give ONE piece of advice to every single newly engaged couple planning a wedding, what would it be?</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                                I would definitely advise brides to take the time to really RESEARCH every wedding vendor.  You need to be able to trust these people without worrying on your wedding day if they’re doing a good job – especially your wedding coordinator.  The best way to do this is to ask all the vendors you meet with for live testimonials, which are phone numbers or email addresses of past clients.  Speaking with past clients give you a realistic idea of how that particular vendor performs – they will be honest and give you advice on how the vendor delivered on their wedding day.
                                <i class="fa fa-quote-right"></i><br><br>
                                <strong>-Amy S. Patel</strong><br>
								Owner & Head Coordinator of Planning Elegance<br><br></p>
                              <a target="_blank" class="btn btn-warning" type="button" href="<?php echo get_site_url(); ?>/?page_id=35">Request a free quote today!</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1">
                                2. What Does a Wedding Planner Do?</a>
                            </h4>
                        </div>
                        <div id="collapseOne1" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                               Our job entails several different aspects, but mainly we do everything in our power to make sure our clients are 100% happy with everything. To sum up, we bring your dream wedding to reality! Planning Elegance wedding professionals will help you with every detail of your wedding from scheduling meetings for you to searching for the most unique vendor to cramming everything you want into your budget to being there for you throughout your entire wedding day. We are your managers, your assistants, your designers, your advisers, and most of all, your piece of mind. Wedding planners guarantee that everything will be in place for your wedding day so that you and your beau can enjoy your special day without worrying about any of the details.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne2">
                                3. How Does a Wedding Planner Manage Everything?</a>
                            </h4>
                        </div>
                        <div id="collapseOne2" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                                Planning Elegance wedding planners are pretty much your own personal assistants. We have done things like pick-up wedding gowns from the dry cleaners, escorted uninvited guests out of wedding receptions, suggested songs for cake cuttings and bouquet tosses, helped the best man with his wedding speech, and the list goes on and on. We manage all your paperwork including the wedding itinerary, venue layouts, all the vendor contracts, placecards, and even wedding programs! We help give you advice to create and stick to your budget by saving you money on vendors, venues, and details of your wedding that you might be able to DIY or cut back on. Best of all, we have electronic and hard copies of everything we’ve done for you. We save all e-mail conversations between vendors and you and take notes during every phone conversation, we have a separate file for every client (both electronically and old school) to ensure that all your information in confidential, accurate, and organized.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne3">
                                4. Can I Have the Venue’s Catering Manager Plan my Wedding?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne3" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                                When venues (particularly hotels and larger venues) have a catering and events manager that you’re talking to from the beginning and create a relationship with, you may feel compelled to rely on then rather than hire another person. The reason this is not recommended is that although they are wonderful at their job and know the facility inside and out like the back of their hand, their job is to have the venue’s best interest in mind. When you hire a wedding planner, we have YOUR best interest in mind because you hired us and we work for you. We have different contacts than the venue to offer you a variety of things that can meet your needs rather than just meeting the venue’s needs. Your wedding planner still keeps in close contact with the catering and events manager, but works with them to sort things out. Since we have different responsibilities than the venue employees, we work very well beside them to iron out every detail.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne4">
                                5. I Want my Wedding my Way, Will the Wedding Planner Take Over?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne4" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                                Although wedding planners keep tabs on the latest trends, love trying new things and ideas, and have the ability to creatively mold any event, we understand taht it’s not our wedding. Additionally, we’re happy that’s it’s YOUR wedding. Planning Elegance wedding planners can do as much or as little as you want. Sometimes we are hired just to help with spcific traditions or aspects of the wedding, while other times we do complete A to Z planning. We can advise on costs, negotiate certain contracts, and find you the best deal for what you want, but we don’t push you to have anything you don’t want or take away things that are important to you. We can advise you as far as you’d like, but will never push you into something you don’t want.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne5">
                                6. How Do I Know if I’m Choosing the Right Wedding Planner?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne5" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                               Get recommendations! Ask for testimonials, search Wedding Wire, Google, or anything for the company’s name and see what’s out there! You can feel free to ask us for previous clients’ names, pictures, and contact information. If we have permission from past clients, we will let you know that you can contact them and personally ask them anything you’d like.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne6">
                                7. What Do I Ask My Wedding Planner?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne6" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                              You have to meet your wedding planner before deciding to hire them. It is very important that you click with their personality because you will be working with them every step of the way and talking to them more than any other vendor. When you meet with them, take your time to get to know them and ask as many questions as you can think of. Here are some examples to get you started:
                              <i class="fa fa-quote-right"></i></p>
                              <ul class="wht-fnt">
                              	<li class="wht-fnt">What are the different services you offer?</li>
                                <li class="wht-fnt">Do you have experience in my culture or religion’s weddings?</li>
                                <li class="wht-fnt">How and when do we have to pay you?</li>
                                <li class="wht-fnt">What was your favorite wedding to plan?</li>
                                <li class="wht-fnt">How long have you been doing this for?</li>
                                <li class="wht-fnt">How long will you be there for on my wedding day?</li>
                               <li class="wht-fnt">What’s your favorite aspect of wedding planning?</li>
                              </ul>
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne7">
                                8. What is the difference between a wedding coordinator and planner?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne7" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                              Planning a wedding encompasses putting all the pieces of the event(s) together to make a memorable celebration.  Coordinating a wedding encompasses all the aspects of planning one in addition to timing out all the details and physically being at the event ensuring every moment goes as scheduled.  A coordinator also helps the different vendors come together and organizes them on the wedding day so that the bride, groom, and guests don’t have to worry about collaboration.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne8">
                                9. How do we set a wedding date?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne8" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                              Sometimes the wedding date is a date that is already significant to the couple, such as a dating anniversary, holy day, or one year from the engagement date.  Other times the wedding date is set for convenience, like a 3-day weekend or whenever the desired venue is available.  The couple needs to decide what is important to them about their wedding date.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne9">
                                10. What if we don’t get the date we want?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne9" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                             An alternate wedding date should be set in case the desired venue is not available on your day.  Generally, if you don’t book your vendors at least one year in advance, they may not be available.  The case differs depending on the popularity of the vendor you want and the date you chose.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne10">
                                11. Will Planning Elegance help us chose the venue?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne10" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                             Planning Elegance offers great articles in our blog section with free advice on how to choose a venue.  If you choose to purchase Planning Elegance’s wedding services, we will help you chose your wedding venue according to the characteristics you desire, such as beauty, location, pricing, catering, etc.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne11">
                                12. Will Planning Elegance help us chose the décor?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne11" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                            Planning Elegance offers great articles in our blog section with free advice and ideas for floral arrangements, themes, décor, etc.  If you choose to purchase Planning Elegance’s wedding services, we will help you chose your wedding décor, flowers, favors, etc. according to a personalized theme of your choice.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne12">
                                13. What is a hair and make-up consultation/trial?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne12" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                            It is a trial of your wedding look so that you can perfect it, see how much time it will take, and get a pricing estimate before your wedding.  This will reduce the stress on your wedding  day and ensure that you get your perfect look.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne13">
                                14. How do we choose a photographer?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne13" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                           You need to meet numerous photographers and see several samples of their bridal and non-bridal looks.  Based on your desired style and their previous work, talk with the photographers to see who can meet your needs best at the most reasonable price. Take some advice on how to find the perfect wedding photographer.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne14">
                                15. Can we get a photographer and a videographer from the same company?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne14" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                           There are several companies that do both photo and video, this option can save you some money.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne15">
                                16. How do we choose a cake?  Does the caterer include a cake?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne15" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                           Choosing a cake needs to be based off of the number of guests you will have, flavors you and your fiancée like, and matching frosting and artwork that goes with the theme of your wedding.  Some caterers will include the cake in your food pricing.  If they don’t, you will need to find a separate bakery.  Many couples like to save the top tier of their cake to eat on their one-year wedding anniversary.  If you would like to do this, let the person cutting the cake know not to touch it and to store it properly.  If the cake the frozen, it will be good to eat even a year after your wedding!
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne16">
                                17. What does the groom do to look good for the wedding?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne16" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                          Grooms should get their hair trimmed a week before the wedding.  Many grooms also enjoy a spa manicure and pedicure with no nail polish to relax themselves, scuff off dead skin cells, and have their skin conditioned.  Men also need to make sure their suit fits properly and their skin is nice and acne-free for their big day.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne17">
                                18. What type of entertainment should we have at our reception?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne17" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                         Speeches, dancers, musicians, DJs, a slideshow…these are the most common, but anything that the couple and guests will enjoy is acceptable.  You can get a discount if you use Planning Elegance’s entertainers, contact us to see how.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne18">
                                19. What do we do between the wedding and the reception?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne18" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p class="wht-fnt"><i class="fa fa-quote-left"></i>
                         Traditionally there is a cocktail hour.  These can be longer or shorter than 60 minutes and appetizers or hors d’oeuvres can be served during this time as well.  Sometimes light music is played in the background softly while people mingle with each other and awe at your décor.
                                <i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
       </section>
<?php
get_footer(); ?>
