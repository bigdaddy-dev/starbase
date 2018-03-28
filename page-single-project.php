<?php
/**
 * The template for displaying all single projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starbase
 */

get_header(); ?>

<section class="page-top section-space">
  <div class="container">
    <div class="row" id="primary">
			<main id="content" class="col-md-12">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-projects', get_post_type() );

      the_content();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .container -->
</section>

<?php get_footer() ;?>
