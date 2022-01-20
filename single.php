<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Abadir
 */

get_header();
?>
<div class="container pt-5">
    <div class="row">

        <main id="primary" class="site-main col-md-8">

            <?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', get_post_type());

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'abadir') . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'abadir') . '</span> <span class="nav-title">%title</span>',
					)
				);

			endwhile; // End of the loop.
			?>

        </main><!-- #main -->
        <div class="col-md-4">
            <?php 
			// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			?>
        </div>
    </div>
    <?php
	get_footer();