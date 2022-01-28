<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abadir
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="card">
			
		<?php abadir_post_thumbnail(); ?>

		<div class="card-body">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="card-titlee">', '</h1>' );
			else :
				the_title( '<h5 class="card-title"><a href="' . esc_url( get_permalink() ) . '" class="card-link text-reset text-decoration-none" rel="bookmark">', '</a></h5>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta d-flex justify-content-between">
					<?php
					abadir_posted_by();
					abadir_posted_on();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

		<div class="card-text">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'abadir' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'abadir' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .card-text -->
			</div><!-- .card-body -->

		<footer class="entry-footer card-footer d-flex justify-content-between">
			<?php abadir_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
	</article><!-- #post-<?php the_ID(); ?> -->