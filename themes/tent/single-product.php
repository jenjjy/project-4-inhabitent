<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<header class="entry-header">
	<div id="primary" class="product-area">
		<main id="main" class="site-main" role="main">
		</header><!-- .entry-header -->
		<?php while ( have_posts() ) : the_post(); ?>
		

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="product-type-container">
	<div class="product-image">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</div>
	<div class="product-wrapper"> 
			<?php the_title( '<h1 class="product-title">', '</h1>' ); ?>

		<div class="product-price">
			<?php echo CFS()->get( 'price' ); ?>
		</div> <!-- .entry-price -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div><!-- .product-wrapper -->
</div>

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>