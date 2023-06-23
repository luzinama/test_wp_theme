<?php
/**
 * The template functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Test WP Theme
 *
 */

function test_wp_theme_skip_link()
{

    // Skip link
    echo '<a class="screen-reader-text skip-link" href="#main">' . esc_html__('Skip to content', 'test-wp-theme') . '</a>';
}

add_action('wp_body_open', 'test_wp_theme_skip_link', 5);

function test_wp_theme_support()
{

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain('test-wp-theme', get_template_directory() . '/languages');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /**
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
    add_image_size('test-wp-theme-thumb', 370, 247, ['center', 'top']);
    if (!isset($content_width)) {
        $content_width = 600;
    }

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5', [
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo', [
        'width' => 180,
        'height' => 50,
        'flex-width' => true,
        'flex-height' => true,
    ]);
    add_theme_support(
        'custom-background', [
            'default-color' => 'f5f5f5',
        ]
    );
}

add_action('after_setup_theme', 'test_wp_theme_support');

function test_wp_theme_nav_menus()
{

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus([
        'test-wp-theme-primary-menu' => esc_html__('Primary Menu', 'test-wp-theme'),
    ]);
}

add_action('init', 'test_wp_theme_nav_menus');

function test_wp_theme_style()
{
    // Theme's main stylesheet
    wp_enqueue_style('test-wp-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), false);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'test_wp_theme_style');

function test_wp_theme_sidebar()
{
    register_sidebar([
        'name' => esc_html__('Sidebar', 'test-wp-theme'),
        'id' => 'test-wp-theme-sidebar-1',
        'description' => esc_html__('Add widgets to the posts sidebar.', 'test-wp-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ]);
}

add_action('widgets_init', 'test_wp_theme_sidebar');

function test_wp_theme_category_title($title)
{

    // Returns only the category name on the category page
    if (is_category()) {
        $title = single_cat_title('', false);
    }
    return $title;
}

add_filter('get_the_archive_title', 'test_wp_theme_category_title');

function test_wp_theme_excerpt_length($length)
{

    // Return up to 25 words for any abstract
    return 25;
}

add_filter('excerpt_length', 'test_wp_theme_excerpt_length');

function test_wp_theme_excerpt_more($more)
{

    // Any abstract will have a sequence ...
    return '...';
}

add_filter('excerpt_more', 'test_wp_theme_excerpt_more');

function test_wp_theme_add_additional_class_on_li($classes) {
    $classes[] = 'nav-item';

    return $classes;
}
add_filter('nav_menu_css_class', 'test_wp_theme_add_additional_class_on_li');
