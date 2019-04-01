<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemtype="http://schema.org/WebPage">

		<div id="container">
		
		<div id="wrap" class="wrap cf">

		<header class="d-2of7 t-1of5 m-all" itemscope itemtype="http://schema.org/WPHeader">
		
		<?php get_sidebar('sidebar3'); ?>

				<!-- <div id="inner-header"> -->

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					
					<?php if ( function_exists( 'jetpack_the_site_logo' ) ) :?> 
					<div id="logo" >
					<?php  jetpack_the_site_logo( 'jetpack_the_site_logo' ); ?>
					</div>
					<?php else : ?>
					<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					<?php endif; ?>
					

					<?php // if you'd like to use the site description you can un-comment it below ?>
					
			<div id="blogdescirption" class="m-h0" >
			<!--<img src="<?php  echo get_template_directory_uri(); ?>/korbflechten.svg" alt="korbflechten.ch" />-->							
			
		
	
		<svg width="100%" height="100%" viewBox="0 0 192 643" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><text x="-1243.89" y="2066.73" font-family="Arial" font-size="96.528" transform="rotate(-90 -1296.358 701.232)"><?php bloginfo('description'); ?></text></svg>
			 </div>

			</header>
			
			<div id="content" class="m-all d-5of7 t-4of5">
	
							<div id="inner-content" >
							
						<?php get_sidebar('sidebar2'); ?>
						
						

					<nav role="navigation" id="site-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<input type="checkbox" id="nav-trigger" class="nav-trigger t-h0 d-h0 m-all" role="tooltip" />
						<div class="m-menu m-all t-h0 d-h0"> <label for="nav-trigger" >Menu</label></div> 

					
					<div id="toggle" role="tooltip">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
						
						<div>

					</nav>

				

