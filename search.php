<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
						<h3>
						<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'starbase' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h3>
				</div>
			</div>

		<main class="row" id="primary">


			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div>
	</section><!-- #primary -->

<?php get_footer(); ?>
