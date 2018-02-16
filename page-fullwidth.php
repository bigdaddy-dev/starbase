<?php

/* Template Name: Full-Width Template */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

get_header();

?>

<section class="page-top section-space section-title">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3><?php the_title(); ?></h3>
    </div>
  </div>

<div class="row mb-2">
  <div class="col-md-12">
    <?php if (has_post_thumbnail() ) { ?>
      <img src="<?php echo $thumbnail_url; ?>" class="img-fluid">
    <?php } else { //fallback image ?>
      <p>No Image Selected</p>
    <?php } ?>
  </div>
</div>

<div class="row">
  <article class="col-md-12 post-content">
    <?php while (have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </article>
</div>
  </div>
</section>

<?php get_footer(); ?>
