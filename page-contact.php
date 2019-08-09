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

				<?php  
					$contact_form = get_field('contact_form');
				?>

				<div class="fullwidth clear">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					
					<?php if ($contact_form) { ?>
					<div class="contactForm">
						<?php echo $contact_form ?>
					</div>	
					<?php } ?>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

				</div>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
