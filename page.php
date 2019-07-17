<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 
$banner = get_field("banner");
?>

	<div id="primary" class="full-content-area clear default">
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
