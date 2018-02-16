<?php
/* Template Name: Projects Page */
?>
<?php get_header(); ?>

<section class="page-top section-space projects-list">

  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title">
        <h3>Projects</h3>
      </div>
    </div>

<main class="row" id="primary" role="main">


  <?php $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 9, 'orderby' => 'post_id', 'order' => 'ASC')); ?>

  <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

    <?php get_template_part( 'template-parts/content-projects', get_post_format() ); ?>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>


</main><!--primary-->

<?php get_template_part('template-parts/pagination', 'none' ); ?>

</div><!--containter-->
</section>

<?php get_footer(); ?>
