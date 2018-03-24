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
        <h3>Blog</h3>
      </div>
    </div>

<main class="row" id="primary" role="main">
  <?php


     // the query
     $the_query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 9,
     )); ?>

		<?php if ( have_posts() ) :
          while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;
		  else :
      get_template_part( 'template-parts/content', 'none' );
		endif; ?>
<?php wp_reset_postdata(); ?>

</main><!--primary-->
<div class="col-md-12">
<?php starbase_numeric_posts_nav(); ?>
</div>

</div><!--containter-->
</section>

<?php get_footer(); ?>
