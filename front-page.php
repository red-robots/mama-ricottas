<?php
get_header(); ?>
<div id="primary" class="full-content-area clear">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php  
			$intro_title = get_field('intro_title');
			$intro_text = get_field('intro_text');
			$title_row2 = get_field('title_row2');
			$text_row2 = get_field('text_row2');
			$foodimages = get_field('images_row2');
			$title_row3 = get_field('title_row3');
			$text_row3 = get_field('text_row3');
		?>

		<?php if ($intro_title || $intro_text) { ?>
		<section class="section text-center clear row1">
			<div class="icondiv"><span class="grape"><i class="mr-grape"></i></span></div>
			<div class="medwrap">
				<?php if ($intro_title) { ?>
				<h2 class="stitle"><?php echo $intro_title ?></h2>
				<?php } ?>
				<?php if ($intro_text) { ?>
				<div class="stext"><?php echo $intro_text ?></div>
				<?php } ?>
			</div>
		</section>	
		<?php } ?>

		<?php if ($title_row2 || $text_row2) { ?>
		<section class="section clear row2">
			<div class="flexrow clear">
				<div class="flexbox col1">
					<div class="inside">
						<?php if ($title_row2) { ?>
						<h2 class="stitle"><?php echo $title_row2 ?></h2>
						<?php } ?>
						<?php if ($text_row2) { ?>
						<div class="stext"><?php echo $text_row2 ?></div>
						<?php } ?>
					</div>
				</div>
				<div class="flexbox col2">
					<?php if ($foodimages) { ?>
						<div class="foodimages">
							<ul class="slides">
								<?php foreach ($foodimages as $img) { ?>
								<li class="food-img">
									<div class="imgdiv" style="background-image:url('<?php echo $img['url'] ?>')"></div>
									<img class="px" src="<?php echo get_bloginfo("template_url")?>/images/px.png" alt="" aria-hidden="true"></li>	
								<?php } ?>
							</ul>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>	
		<?php } ?>

		<?php if ($title_row3 || $text_row3) { ?>
		<section class="section text-center clear row3">
			<div class="icondiv"><span class="fire"><i class="mr-fire"></i></span></div>
			<div class="medwrap">
				<?php if ($title_row3) { ?>
				<h2 class="stitle"><?php echo $title_row3 ?></h2>
				<?php } ?>
				<?php if ($text_row3) { ?>
				<div class="stext"><?php echo $text_row3 ?></div>
				<?php } ?>
			</div>
		</section>	
		<?php } ?>

	<?php endwhile; ?>
</div><!-- #primary -->
<?php
get_footer();
