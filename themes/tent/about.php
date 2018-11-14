<?php
/**
 * The template for displaying the about page in Inhabitent.
 *
 * @package RED_Starter_Theme
* Template Name: About Page Template

 */

get_header(); ?>

	<div id="primary" class="content-about">
		<main id="main" class="site-main" role="main">
<?php CFS()->get( $field_name, $post_id, $options ); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
