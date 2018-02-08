<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starbase
 */

get_header(); ?>

<section class="page-top section-space">

  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title">
        <h3>BLOG</h3>
      </div>
    </div>

<main class="row" id="primary" role="main">

		<?php if ( have_posts() ) :
					if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php endif;

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


</main><!--primary-->

<nav aria-label="pagination navigation">
  <ul class="pagination pagination-lg justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

</div><!--containter-->
</section>

<?php get_footer(); ?>
