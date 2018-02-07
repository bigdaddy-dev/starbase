<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starbase
 */

?>



	<div class="col-md-4 entry-content">

		<?php if ( has_post_thumbnail() ) { // check for feature image ?>
		<div class="post-image card mb-4 box-shadow">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php } ?>

		<div class="card-body">
			<?php
				if ( is_singular() ) :
				the_title( '<h5 class="entry-title">', '</h5>' );
				else :
				the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
			<?php endif; ?>
			<p class="post-excerpt card-text"><?php the_excerpt(); ?></p>
		</div>

	</div><!-- .entry-content -->
