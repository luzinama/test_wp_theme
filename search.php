<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Test WP Theme
 */

get_header(); ?>

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <h1 class="page-title">
            <?php 
              /* translators: %s: search query. */
              printf( esc_html__( 'Search Results for: %s', 'test-wp-theme' ), '<span>' . get_search_query() . '</span>' );
            ?>
          </h1>
        </header><!-- .page-header -->

        <?php  
          // Start the Loop
          while ( have_posts() ) : the_post();
          
            // Content
            get_template_part( 'template-parts/content' );

          endwhile; 

          // Pagination
          the_posts_navigation();

      else:

        // No content search
        get_template_part( 'template-parts/content', 'search' );

      endif;  
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
