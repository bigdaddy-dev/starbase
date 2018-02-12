<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starbase
 */

get_header(); ?>

		<?php
		if ( have_posts() ) : ?>

		<section class="page-top section-space">

		  <div class="container">
		    <div class="row">
		      <div class="col-md-12 section-title">
				<?php
					the_archive_title( '<h3 class="page-title">', '</h3>' );
					the_archive_description( '<small class="archive-description">', '</small>' );
				?>
				</div>
			</div>

<main class="row" id="primary">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
</main>
</div><!--.container-->
</section>


<?php get_footer(); ?>
