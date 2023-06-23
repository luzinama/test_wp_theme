<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test WP Theme
 */

  if ( is_active_sidebar( 'test-wp-theme-sidebar-1' ) ) {
    dynamic_sidebar( 'test-wp-theme-sidebar-1' );
  }
