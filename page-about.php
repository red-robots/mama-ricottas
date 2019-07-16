<?php
/**
 * Template Name: About
 */

get_header(); 
$banner = get_field("banner");
?>

	<div id="primary" class="full-content-area clear default">
		<main id="main" class="site-main clear" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<header class="entry-header">
					<h1 class="entry-title" style="display:none;"><?php the_title(); ?></h1>
				</header>
				<?php 
					$photo = get_field('photo'); 
					$quote = get_field('quote'); 
					$text = get_field('text'); 
					$author = get_field('author'); 
				?>

				<div class="medwrap clear">
					<?php if ( $photo ) { ?>
					<div class="feat-image">
						<img src="<?php echo $photo['url'] ?>" alt="<?php echo $photo['title'] ?>" />
					</div>
					<?php } ?>

					<div class="entry-content <?php echo ($photo) ? 'half':'full';?>">
						<?php if ($quote) { ?>
							<blockquote class="bquote"><?php echo $quote ?></blockquote>
						<?php } ?>
						<?php if ($text) { ?>
							<div class="text"><?php echo $text ?></div>
						<?php } ?>
						<?php if ($author) { ?>
							<div class="author"><i><?php echo $author ?></i></div>
						<?php } ?>
					</div>
				</div>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
