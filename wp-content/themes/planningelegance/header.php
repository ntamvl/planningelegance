<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<!--Template CSS-->
<!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet" type="text/css">

    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.photoset-grid.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <!--Menu Section Start***************************************************-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu_script.js"></script>
    <!--Menu Section Close***************************************************-->

    <!--Image Slider Section Start***************************************************-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slider.css" />
<!--Image Slider Section Close ***************************************************-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php /*
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">*/?>
<?php if(is_front_page() || is_home() || $post->post_name == "home"){?>
<div id="wrap">
	<?php }else{?>
<div id="wrapInnr">
	<?php } ?>
	 <div class="container">
    <!-- Navigation -->
    	<div id='cssmenu'>
		<?php

					wp_nav_menu(
						array(
							'menu' => 'header menu',
							'container' => '',
							'menu_class' => ''

						)
					);
				?>
             <!--<ul>
               <li class="active"><a href='index.php'><span>Home</span></a></li>
               <li><a href="<?php echo get_site_url('Home'); ?>/?page_id=5"><span>About Us</span></a></li>
               <li><a href="<?php echo get_site_url('Home'); ?>/?page_id=11"><span>Services</span></a></li>
               <li><a href="<?php echo get_site_url('Home'); ?>/?page_id=19"><span>South Asian</span></a></li>
               <li><a href="<?php echo get_site_url('Home'); ?>/?page_id=23"><span>Gallery</span></a></li>
               <li><a href="<?php echo get_site_url('Home'); ?>/?page_id=26"><span>News</span></a></li>
               <li><a href="<?php echo get_site_url('Home'); ?>/?page_id=29"><span>Testimonials</span></a></li>
               <li><a href="<?php echo get_site_url('Home'); ?>/?page_id=32"><span>FAQs</span></a></li>
               <li><a href="<?php echo get_site_url('Home'); ?>/?page_id=35"><span>Contact Us</span></a></li>
               <li class='last'><a href="<?php echo get_site_url('Home'); ?>/?page_id=38"><span>Blog</span></a></li>
            </ul>-->
            </div>
    <!-- /Navigation -->
		<div class="row">
            <div class="col-lg-12 text-center"><div class="logo">
				<a href='index.php'>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive" alt=""/></a>
				<div class="srchh"><?php dynamic_sidebar('blogsearch');?></div>
				</div></div>

      </div>


<?php wp_footer(); ?>
