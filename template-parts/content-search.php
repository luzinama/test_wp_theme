<?php
/**
 * Template part for displaying search content in search.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Test WP Theme
 * @subpackage template-parts
 */

?>

<?php echo '<p>' . esc_html__( 'No results were found, try searching for another word.', 'test-wp-theme' ) . '</p>'; ?>

<?php 
  get_search_form(); 
  the_widget( 'WP_Widget_Recent_Posts', [
    'title'   => esc_html__( 'Latest Posts', 'test-wp-theme' ),
    'number'  => 10
  ]); 
?>
  