<?php
/**
 * Template Name: Menu
 */

get_header(); 
$banner = get_field("banner");
?>

	<div id="primary" class="full-content-area menu-page clear default">
		<main id="main" class="site-main clear" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<header class="entry-header">
					<h1 class="entry-title title-center"><span class="left"></span><span class="middle"><?php the_title(); ?></span><span class="right"></span></h1>
				</header>
				<?php 
					$menus = get_field('menus');  
				?>

				<?php if ($menus) { ?>
				<div class="menu-list clear">
					<div class="flexrow">
					<?php foreach ($menus as $m) { 
						$menu_icon = $m['icon'];
						$menu_title = $m['menu_title'];
						if($menu_title) {
							$mtitle = explode("/",$menu_title);
							if($mtitle) {
								$menu_title = implode(" / ",$mtitle);
							}
						}
						$menu_pdf = ($m['menu_pdf']) ? $m['menu_pdf']['url']:'';
						$link_before = '';
						$link_after = '';
						if ($menu_pdf) {
							$link_before = '<a href="'.$menu_pdf.'" target="_blank">';
							$link_after = '<a>';
						}
						if($menu_title) { ?>
						<div class="menu-info">
							<?php echo $link_before; ?>
							<?php if ($menu_icon) { ?>
							<span class="mIcon">
								<span class="img1" style="background-image:url('<?php echo $menu_icon['url']?>');"></span>
								<span class="img2" style="background-image:url('<?php echo $menu_icon['url']?>');"></span>
							</span>
							<?php } ?>
							<?php if ($menu_title) { ?>
							<span class="mTitle"><?php echo $menu_title ?></span>
							<?php } ?>
							<?php echo $link_after; ?>
						</div>
						<?php } ?>
					<?php } ?>
					</div>
				</div>
				<?php } ?>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
