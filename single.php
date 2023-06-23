<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Test WP Theme
 */

get_header(); ?>
   
			<?php  
				// Start the Loop
				while ( have_posts() ) : the_post();

				// Content
				get_template_part( 'template-parts/content', 'single' );

				// Pagination
				the_post_navigation([
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'test-wp-theme' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'test-wp-theme' ) . '</span> <span class="nav-title">%title</span>',
				]);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
        </div>
        <div class="col-4">
		<aside class="widget-area">
      <?php get_sidebar(); ?>
    </aside><!-- .widget-area -->
    </div>
    </div>
	</div><!-- #primary -->

<?php
get_footer();
