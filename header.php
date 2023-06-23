<?php
/**
 * The template header
 *
 * This is the template that displays all of the <head> section and everything up until <main id="main" class="entry-site-main">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php if (!function_exists('the_custom_logo') || !has_custom_logo()) : ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
                <?php endif; ?><!-- .site-title -->

                <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                <div class="site-branding">
                    <?php the_custom_logo(); ?>
                </div>
                <?php endif; ?><!-- .site-branding -->
            </div>
            <div class="col">

                <?php if (has_nav_menu('test-wp-theme-primary-menu')) : ?>

                <nav id="site-navigation" class="navbar navbar-expand-lg  main-navigation">
                    <div class="container-fluid">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'test-wp-theme-primary-menu',
                        'container' => '',
                        'menu_class' => 'test-wp-theme-first-menu navbar-nav me-auto mb-2 mb-lg-0',
                        'before' => '<span class="nav-link">',
                        'after' => '</span>'
                    ]);
                    ?>
                    </div>
                </nav>
                <?php endif; ?><!-- #site-navigation -->
            </div>
        </div>
    </div>
</header><!-- #masthead -->

<div id="primary" class="content-area">
    <div class="container">
        <div class="row">
            <div class="col">
    <main id="main" class="entry-site-main">



    