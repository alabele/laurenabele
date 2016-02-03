<?php
/**
*Template Name: About Page
 * The template for the About Page.
 *
 * @package goldengirl
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main" class="about-page">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="content-side-header about-content-container">
					<h1><?php the_title(); ?></h1>
				</div>	
				<div class="content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>