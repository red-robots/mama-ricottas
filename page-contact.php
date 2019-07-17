<?php
/**
 * Template Name: Contact
 */

get_header(); 
$banner = get_field("banner");
?>

	<div id="primary" class="full-content-area clear default contact-page">
		<main id="main" class="site-main clear" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="fullwidth clear">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>

					<?php 
						$photo = get_the_post_thumbnail(); 
					?>

					<?php if ( $photo ) { ?>
					<div class="feat-image">
						<?php echo the_post_thumbnail('large'); ?>
					</div>
					<?php } ?>

					<div class="entry-content <?php echo ($photo) ? 'half':'full';?>">
						<?php the_content(); ?>
					</div>
				</div>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
