<?php if ( is_front_page() ) { ?>
<?php 
	$type = get_field('hero');
	$image = get_field('hero_image');
	$video = get_field('hero_video');

	if ($image || $video) { ?>
	<div class="hero clear">
		<?php if ($type=='video') { ?>
			<?php if ($video) { ?>
				<?php echo $video ?>
			<?php } ?>
		<?php } else { ?>

			<?php if ($image) { ?>
			<img class="hero-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>" />
			<?php } ?>

		<?php } ?>
	</div>
	<?php } ?>
	
<?php } ?>