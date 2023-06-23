<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test WP Theme
 */

?>

<footer class="site-footer">
    <div class="container">
        <div class="site-info">
            <a href="<?php echo esc_url(__('https://wordpress.org/', 'test-wp-theme')); ?>" target="_blank">
                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf(esc_html__('Proudly powered by %s', 'test-wp-theme'), 'WordPress');
                ?>
            </a>

            <span class="sep"> | </span>

            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf(esc_html__('Theme: %1$s by %2$s', 'test-wp-theme'), 'Test WP Theme', 'Maria Luzina');
            ?>

            <span class="sep"> | </span>

            <a href="<?php echo esc_url(__('https://www.gnu.org/licenses/old-licenses/gpl-2.0.html', 'test-wp-theme')); ?>"
               target="_blank">
                <?php
                /* translators: %s: License. */
                printf(esc_html__('LICENSE', 'test-wp-theme'));
                ?>
            </a>
        </div><!-- .site-info -->
    </div>
</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>

</html>