<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo wp_get_document_title(); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


	<!-- 
	====================================================================
		DEVELOPED BY WebComplete (webcomplete.io)
	====================================================================
	 -->


	<div class="wcl-body-inner">


		<!-- HEADER -->
		<header id="wcl-main-header">

				<!-- !!! HEADER CONTENT GOES HERE !!! -->

				<!-- Show Main Menu -->
				<?php /*
				<nav class="header-navigation">

					<?php wp_nav_menu(array(
						'theme_location' 	=> 'main-menu',
						'container'			=> 'false',
						'menu_class'		=> 'nav main-menu'

					)); ?>

				</nav>
				*/ ?>
				
		</header> <!-- #wcl-main-header -->