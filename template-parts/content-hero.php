<?php if ( is_front_page() ) { ?>
<?php 
	$type = get_field('hero');
	$image = get_field('hero_image');
	$video = get_field('hero_video');
	$video_ogg = get_field('hero_video_ogg');

	if ($image || $video) { ?>
	<div class="hero clear">
		<?php if ($type=='video') { ?>
			<?php if ($video) { ?>
			<div class="videowrap">
				<video id="video" width="400" height="300" muted playsinline loop>
					<source src="<?php echo $video; ?>" type="video/mp4">
					<?php if ($video_ogg) { ?>
					<source src="<?php echo $video_ogg; ?>" type="video/ogg">
					<?php } ?>
					<p>Your browser doesn't support HTML5 video. <a href="<?php echo $video; ?>">Download</a> the video instead.
					</p>
				</video>
				<div id="video-controls">
			    <button type="button" id="play-pause" class="pause">Play</button>
			    <button type="button" id="full-screen" style="display:none;">Full-Screen</button>
			  </div>
			</div>
			<?php } ?>
		<?php } else { ?>

			<?php if ($image) { ?>
			<img class="hero-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>" />
			<?php } ?>

		<?php } ?>
	</div>
	<?php } ?>
	
<?php }  else { ?>

	<?php $banner = get_field("banner"); ?>
	<?php if ($banner) { ?>
	<div class="hero sub">
		<img class="hero-image" src="<?php echo $banner['url'] ?>" alt="<?php echo $banner['title'] ?>" />
	</div>	
	<?php } ?>

<?php } ?>