<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Damion|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site clear">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header clear" role="banner">
		<div class="wrapper">

			<div class="topmenuwrap clear">
				<div class="topmenu">
					<?php wp_nav_menu( array( 'menu' => 'Top Menu', 'menu_id' => 'top-menu', 'container'=>false ) ); ?>
					<?php $order_options = get_field('order_options','option'); ?>
					<?php if ($order_options) { ?>
					<div class="order-options">
						<?php foreach ($order_options as $o) { 
							$o_link = $o['link'];
							$o_logo = $o['logo'];  
							$o_text = $o['text']; ?>
							<?php if ($o_link && $o_logo) { ?>
								<div class="orderlink">
									<a href="<?php echo $o_link ?>" target="_blank">
										<img src="<?php echo $o_logo['url'] ?>" alt="$o_logo['title']">
										<?php if ($o_text) { ?>
										<span class="text"><?php echo $o_text ?></span>	
										<?php } ?>
									</a>
								</div>
							<?php } ?>	
						<?php } ?>
						<div class="closediv clear"><a href="#" id="close-order">Close</a></div>
					</div>
					<?php } ?>
				</div>
			</div>

			<?php if( get_custom_logo() ) { ?>
	            <div class="logo">
	            	<?php the_custom_logo(); ?>
	            </div>
	        <?php } else { ?>
	            <h1 class="logo">
		            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </h1>
	        <?php } ?>


			<nav id="site-navigation" class="main-navigation clear" role="navigation">
				<button id="toggleMenu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="true"><span class="sr-only">MENU</span><span class="bar"></span></button>
				<div class="navwrap clear">
					<?php wp_nav_menu( array( 'menu' => 'Main Menu Left', 'menu_id' => 'menu-left', 'container_class'=>'menudiv mleft' ) ); ?>
					<?php wp_nav_menu( array( 'menu' => 'Main Menu Right', 'menu_id' => 'menu-right', 'container_class'=>'menudiv mright' ) ); ?>
				</div>
			</nav><!-- #site-navigation -->
	</div><!-- wrapper -->
	</header><!-- #masthead -->

	<?php get_template_part('template-parts/content','hero'); ?>

	<div id="content" class="site-content wrapper">
