<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starbase
 */

?>


		<?php if ( has_post_thumbnail() ) { // check for feature image ?>
		<div class="post-image card box-shadow">
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

			<ul class="post-info">
				<li><?php the_author(); ?></li>
				<li>| On <?php the_date(); ?> |</li>
				<li> <?php the_category(', '); ?></li>
			</ul>

			<p class="post-body"><?php the_content(); ?></p>
		</div>

<!-- .entry-content -->
