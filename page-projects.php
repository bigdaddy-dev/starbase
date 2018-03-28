<?php
/* Template Name: Projects Page */
?>
<?php get_header(); ?>


<section class="page-top section-space projects-list">

  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title">
        <h3>Portfolio</h3>
      </div>
    </div>

<main class="row" id="primary" role="main">
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

  $args = array(
    'post_type' => 'project',
    'posts_per_page' => 9,
    'orderby' => 'post_id',
    'order' => 'DESC',
    'paged' => $paged,
  );

  $custom_query = new WP_Query( $args );

  while($custom_query->have_posts()) :
  $custom_query->the_post();
?>

  <?php get_template_part( 'template-parts/content-projects', get_post_format() ); ?>

  <?php endwhile; ?>


</main><!--primary-->
<div class="col-md-12">
  <?php if (function_exists("pagination")) {
      pagination($custom_query->max_num_pages);
  } ?>
</div>
</div><!--containter-->
</section>

<?php get_footer(); ?>
