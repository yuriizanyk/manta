<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
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

	<?php
	$logo = get_field('logo', 'option');
	$logo = wp_get_attachment_image($logo, 'full');
	?>
	<div class="wcl-body-inner">

		<!-- HEADER -->
		<header id="wcl-main-header" class="wcl-header">
			<div class="data-container wcl-container">
				<div class="data-row">
					<div class="data-col">
						<div class="data-logo">
							<a href="<?php echo site_url('/'); ?>">
								<?php if (!empty($logo)) : ?>
									<?php echo $logo; ?>
								<?php else :
									echo get_bloginfo('name');
								endif; ?>
							</a>
						</div>
					</div>

					<div class="data-col">
						<div class="data-nav">
							<div class="data-nav-btns">
								<div class="data-nav-btns-item">
									<a href="#" class="wcl-button mod-border">
										List Your Business
									</a>
								</div>

								<div class="data-nav-btns-item">
									<a href="#" class="wcl-button mod-border">
										Free SEO Analysis
									</a>
								</div>
							</div>

							<div class="data-nav-b1">
								<?php wp_nav_menu(
									array(
										'container'      => '',
										'items_wrap'     => '<ul class="data-menu">%3$s</ul>',
										'theme_location' => 'main-menu',
										'depth'          => 1,
										'fallback_cb'    => '',
										'walker'         => new wcl_Walker_Nav_Menu(),
									)
								); ?>

								<div class="data-nav-login">
									<a href="<?php echo wp_login_url(); ?>" class="wcl-button">Log In</a>
								</div>
							</div>
						</div>
					</div>

					<div class="data-col">
						<div class="data-b1">
							<div class="data-b1-item">
								<a href="<?php echo wp_login_url(); ?>">Log In</a>
							</div>

							<div class="data-b1-item">
								<a href="#" class="wcl-button">Claim My Listing</a>
							</div>

							<div class="data-b1-item">
								<a href="#" class="wcl-button mod-border">
									Free SEO Analysis
									<span class="icon-arrow-right"></span>
								</a>
							</div>

							<div class="data-b1-item">
								<div class="wcl-t1-btn-menu">
									<div class="t1-img">
										<?php echo file_get_contents(get_stylesheet_directory_uri() . '/img/hamburger-menu.svg', false); ?>
										<?php echo file_get_contents(get_stylesheet_directory_uri() . '/img/close.svg', false); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header> <!-- #wcl-main-header -->