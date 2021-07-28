<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(' | '); ?></title>

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

		<?php include_once("analyticstracking.php") // Google Analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
						<!-- This animated signature is adapted from https://codepen.io/tylerhancock/pen/YWJNpd -->

<a href="<?php echo home_url(); ?>" rel="nofollow"><div id="logo" itemscope itemtype="http://schema.org/Organization">
<svg id="signature" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2020 850">
  <path class="line1" pathLength="1000" d="M248.49,334.27A354.91,354.91,0,0,0,99.84,446.47C62.46,494.94,32.13,562,58.43,622.5,69,646.81,88,668.28,112.86,678.33c29.87,12.07,62.27,3.75,89.68-10.73C230.87,652.63,256.75,632,280,610a438.23,438.23,0,0,0,60.38-70.86,432.75,432.75,0,0,0,44-82c10-24.84,18.74-52.54,13.43-79.57-5.07-25.74-26.38-43.56-53-41.79-29.52,1.95-55,21.62-75,41.86A286.5,286.5,0,0,0,189.85,543c-3.43,28.22-3.6,59,8.93,85.22,12.64,26.42,38.53,40.71,67.46,40.45,32.28-.28,60.61-17.2,84.9-37.07a739.06,739.06,0,0,0,75.8-72.24c46.41-50.56,85.28-110.57,97.83-179a246.22,246.22,0,0,0,4.05-49.3,1.46,1.46,0,0,0-1.42-1.42C505,327.93,488.84,346.79,478,364c-14.48,23-26.42,47.94-37.1,72.87C419.42,487,403.16,540.93,396.34,595.19c-1.41,11.22,1.93,19.52,12.79,23.92,10.68,4.33,22.74,4.07,33.72,1.07C467,613.57,487,596,505,579.42A486.06,486.06,0,0,0,653.7,307.23a1.45,1.45,0,0,0-1-1.75c-15.39-2.61-28.22,13.87-37.1,24.2A219,219,0,0,0,588.87,369c-15.59,29-25.61,60.72-33.65,92.55-4.14,16.39-7.78,32.9-11.31,49.43-3.63,17-7,35.6.37,52.16C550,576,561.92,585.77,576.58,585c16.14-.88,30-12.5,40.4-24a231.27,231.27,0,0,0,53.66-104.58,1.43,1.43,0,0,0-2.37-1.38A111.54,111.54,0,0,0,634,505.32a109.39,109.39,0,0,0-5.6,30.2c-.35,8.56-.49,19.12,6.48,25.32,13.23,11.78,33.37-2.85,44.17-11,17-12.8,33.89-25.8,49.71-40.05s30.53-29.74,42.59-47.27a178.56,178.56,0,0,0,15.9-28c3-6.68,8.21-16.39,1.12-22.27-6.34-5.25-17-4.66-24.38-2.55-9.14,2.6-17.14,8.26-24.05,14.64-7.91,7.31-14.65,15.91-20.79,24.74-6.4,9.19-12,19.19-14.71,30.14-9.49,38.67,22.22,75.15,58.25,84.18,42.76,10.72,88.36-8.13,121.87-34.12a207.73,207.73,0,0,0,68.22-94.51A187.27,187.27,0,0,0,960.51,406c1.56-8.62,1.73-17.68-5.79-23.6-14.85-11.69-38.78-4.59-53.73,3-18.25,9.26-36,24-46.09,42a60.75,60.75,0,0,0-3.81,51.49c6.29,16.82,18.7,31.13,33.78,40.74,17,10.82,37,14.48,57,12.43,42.68-4.4,79.77-31.93,107.14-63.46,26.42-30.43,45.08-66.77,57.84-104.83,13.12-39.12,20.24-80.07,24.09-121.08,1.92-20.37,3.47-41,3.32-61.47-.13-17.18-1.91-35.12-9-51-7-15.64-20.23-27.58-37.56-30.14-20.61-3-41.23,6.06-58.08,17.13-31.28,20.56-52.83,52.31-67.27,86.33-15.51,36.54-23.58,75.77-29,114.95A851.27,851.27,0,0,0,925.05,449c1.48,85.33,17.7,172,58.75,247.6a396.53,396.53,0,0,0,34.65,53.15c1.09,1.42,3.56,0,2.44-1.43C972.74,686,945.71,610.51,934.47,533c-11.38-78.46-8.13-159.64,5.22-237.66,11.56-67.56,35.72-144.26,99.06-180.42,18.38-10.5,42.1-18,62.2-7.61,15,7.74,23,23.49,26.74,39.32,4,16.76,4,34.08,3.32,51.19-.75,18.88-2.06,37.73-4.13,56.51-8.17,74.14-28.37,151-77.29,209.17-25.73,30.6-60,57.55-100.27,64.64-19.82,3.49-40.65,1.55-58.43-8.27-15.75-8.69-29-22.57-36-39.21-7.45-17.62-6.41-36.83,3.36-53.35,10.42-17.61,28.29-32,46.65-40.72,9.68-4.58,20.41-7.54,31.19-7.24s22.34,5.07,22.64,17.31c.23,9.47-3.17,19.9-5.89,28.9a196.75,196.75,0,0,1-10.27,26.75A204.83,204.83,0,0,1,870,536.2c-34.39,22.49-82.14,38-121.57,19.18-17.16-8.18-31.71-22.89-38.65-40.69-7.81-20.06-3.43-40.09,7.69-58,10.53-16.93,25.39-36.77,45-43.59,9.88-3.45,31.1-3.82,25.5,12.36-3.27,9.45-8.28,18.59-13.5,27.09-21,34.2-52.24,60.65-83.72,84.86-7.47,5.74-14.86,11.91-22.83,16.95-7.25,4.6-17.24,9.62-26.07,7.1-11.6-3.32-11.05-18-10.51-27.68a107.21,107.21,0,0,1,6-29.36,108.81,108.81,0,0,1,33-47.4l-2.37-1.38A230.52,230.52,0,0,1,628,543.14c-9.79,13.14-21,26.74-35.83,34.4-15.88,8.22-33.48,4.72-42.92-11s-6.79-34.65-3.24-51.74q4.69-22.57,10.1-45c7.06-29.06,15.5-58,28.13-85.18a240.9,240.9,0,0,1,24.3-41.55,190.58,190.58,0,0,1,17-20c6.87-7.05,15.62-16.68,26.46-14.84l-1-1.75a484.56,484.56,0,0,1-123.39,246.6c-16.2,17.27-33.68,34.35-53.06,48-10.36,7.33-21.74,13.72-34.14,16.77-11.59,2.85-28.7,3.16-37.76-6.13-5.7-5.84-3.81-14.34-2.7-21.55q1.47-9.57,3.23-19.09,3.53-19,8.23-37.83a627.89,627.89,0,0,1,61-154c11.39-20.38,27.81-48.87,55-46.79L526,331.06c1.27,66.38-25.94,129.51-64.63,182.3-19.8,27-42.61,51.7-66.64,75-23,22.25-46.77,45.78-74.71,61.76-26.26,15-59.89,22.39-88.27,8.48-26.89-13.19-37.89-42.59-40.34-70.78-5.07-58.56,15.27-120.22,47.78-168.41,16.46-24.4,37.18-48.5,62.08-64.61,23.34-15.09,57.28-25.71,80-3.53,19.17,18.74,17,49.62,11.12,73.48-6.88,27.69-19.79,54.51-33.63,79.34A433.53,433.53,0,0,1,242.17,638.32c-25.13,19-53.49,37.65-85.33,42.17-29.25,4.15-56.85-7-76.45-28.77-18.89-21-28.84-48.76-29-76.86-.15-33.18,11.73-65.31,28.28-93.66,30.47-52.17,76.49-95.56,129.1-124.94A351.48,351.48,0,0,1,249.25,337c1.67-.67.94-3.41-.76-2.73Z"/>
  <path class="line2" pathLength="1000" d="M1193.86,437.55c-21.81-4.55-46.52-9-67.51,1.05-9.61,4.61-17.55,12-24.21,20.23-9.24,11.42-17.36,24.47-22.17,38.39-5.12,14.8-6.16,31.22.12,45.83,5.44,12.67,16,23.16,29.6,26.4,31.91,7.56,60-22.74,78-44.77,23.09-28.33,41.35-62.1,42.44-99.36a1.43,1.43,0,0,0-2.42-1c-22.3,21.55-38.84,49.61-45.74,79.95-2.81,12.39-3.53,27.59,6.74,36.92,9.21,8.36,23,8.25,34.36,5,28-8,48.18-34,63-57.61a507.45,507.45,0,0,0,44.93-91.83A526.13,526.13,0,0,0,1359.38,283a1.46,1.46,0,0,0-.65-1.6c-10.71-4.95-21.4,1.31-28.9,9.06-8.75,9-15.13,21-20.39,32.29-11,23.7-16.54,49.48-19.38,75.35a581.66,581.66,0,0,0-2.91,82.32c.35,10.46,3.55,21.24,14.72,24.36,10.89,3.05,21.69-2.33,29.07-10.13,5-5.27,8.82-11.49,12.68-17.59l14.55-23,29.56-46.72-2.59-1.1c-6.25,30.63-9.14,61.86-15.39,92.49-.3,1.46,1.9,2.65,2.59,1.09,9.74-22.06,16.49-45.39,27.64-66.85a89.44,89.44,0,0,1,8.13-13.3,24.13,24.13,0,0,1,8.27-7.29c1.58-.77,3.8-1.58,5.59-1,3.52,1.22,3.59,4.88,3.84,7.87,1.54,18.32,2,36.79,3,55.15a1.43,1.43,0,0,0,2.64.72q16.86-30.62,36.2-59.74l-1.94.51c8.31,4.9,9,15.76,9.71,24.38.65,7.6.69,16.56,5.19,23.09,6.14,8.91,17,6.68,25.62,3a139.25,139.25,0,0,0,33.62-20.67A134.08,134.08,0,0,0,1566.77,416c5.84-9,11.25-22,5.72-32.34-4.94-9.27-16.35-11.29-25.63-8-11.15,4-17.35,14.5-20.8,25.24-6.77,21-10.8,52,14.37,62.06,24,9.64,53.22,1,73.77-12.81,22.66-15.17,38.17-38.22,48.28-63.21a249.61,249.61,0,0,0,12.43-41.71c1.08-5.05,2.25-10.91-1.93-14.91-3.58-3.43-9.4-4.27-14.14-4.12A31.59,31.59,0,0,0,1632.75,342c-4.55,8.19-5,20.66,4.86,25.06,5.71,2.54,12.69,1.74,18.71,1.22A139.08,139.08,0,0,0,1676.8,365a141,141,0,0,0,38.72-15.59,144,144,0,0,0,17-11.83l-2.42-1c-.94,25-19.69,44.24-25.38,67.87-2.54,10.56-1.83,21.73,3.56,31.32s14.31,16.45,24.17,20.71c24.77,10.69,51.42,2.44,74.27-9.17,27.64-14.05,54.09-31.08,79.82-48.32q43.74-29.31,84.44-62.82c1.41-1.15-.6-3.15-2-2a1070.53,1070.53,0,0,1-146.31,101.17c-23.47,13.48-51.23,28.53-79.21,21.83-23.35-5.59-41.6-25.18-36.4-50.2,5.15-24.77,24.89-44.41,25.88-70.39a1.44,1.44,0,0,0-2.42-1,138.05,138.05,0,0,1-69,29.33c-10.28,1.28-28.93,4.1-29.2-11-.21-11.45,9.84-21,20.26-23.83a24.55,24.55,0,0,1,14.79.3c8.75,3.3,5,13.18,3.44,20.05a244.07,244.07,0,0,1-10.57,34.47c-8.71,22-21.7,42.79-40.37,57.68-17.91,14.27-40.86,23.24-64,21.09-12.6-1.17-25.45-6-30.09-18.85-3.74-10.31-2.1-22,.15-32.41,2.31-10.69,5.65-22.65,14.47-29.91,8.41-6.92,23.78-8.36,29.57,2.69,5.41,10.34-1.31,23.2-7.28,31.75a138,138,0,0,1-56,46.23c-6.11,2.75-13.77,6-20.15,2.23-3.58-2.14-5.35-6-6.37-9.88-3.49-13.31.91-33.68-13.1-41.93a1.45,1.45,0,0,0-1.94.5q-19.32,29.11-36.2,59.73l2.64.72L1429,425.51c-.27-4.85.55-12.18-3.86-15.57-3.63-2.8-8.4-1.24-11.88,1-7.91,5-12.7,14.57-16.78,22.7-5.07,10.1-9.29,20.61-13.38,31.14-4.35,11.22-8.34,22.62-13.2,33.63l2.59,1.09c6.25-30.63,9.15-61.85,15.39-92.48a1.42,1.42,0,0,0-2.59-1.09c-15.27,24.14-30.47,48.33-45.82,72.42-6.31,9.91-13.86,21.22-26.16,23.88-5.68,1.22-12.18.57-16.77-3.29-5-4.2-6.17-11-6.49-17.13-.62-12.08-.15-24.34.09-36.42.23-11.86.7-23.71,1.65-35.53,1.9-23.54,5.68-47.1,13.53-69.44a170.6,170.6,0,0,1,17.29-35.74c6.87-10.67,20-27.63,34.7-20.83l-.65-1.6a524.3,524.3,0,0,1-60,182.42c-13.9,25.28-29.71,52-54,68.63-11.07,7.6-24.44,13.59-38.18,11.84-6.87-.87-13.31-4-17.27-9.86-4.16-6.14-4.81-13.89-4.12-21.09,1.58-16.44,8.3-33.06,16-47.51a162.89,162.89,0,0,1,30.52-40.34l-2.42-1c-.91,31-14.08,59.74-31.87,84.62a230.49,230.49,0,0,1-30.29,35.13c-11.37,10.53-25.49,20.59-41.33,22.37-15,1.68-28.78-5.4-37-17.85-8.62-13.11-10-29.14-6.3-44.14,3.54-14.59,11.28-27.91,20.07-39.95,6.21-8.51,13.53-16.5,22.61-22,21-12.68,47.24-8,69.93-3.25,1.78.37,2.54-2.36.75-2.73Z"/>
</svg>
</div></a>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
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

					</nav>

				</div>

			</header>
