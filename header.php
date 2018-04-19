<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.png">
    <!--            <meta name="google-site-verification" content="6Pkqh-J0wTzq92nbuMijOwzTrCAKAyO_8qtsRjmQUGI" />-->
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <title><?php wp_title(''); ?></title>
    <meta name="msapplication-TileColor" content="#010716">
    <meta name="theme-color" content="#010716">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/foundation.min.css" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/foundation-icons/foundation-icons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" />
    <?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
    <div class="top-bar top-bar-alt" style="padding: 0; background-color: #000F21; color: white; font-size: 0.8em">
        <div class="top-bar-left">
            <ul class="menu social-menu" style="">
            <li><a href="https://www.facebook.com/HaloProjectBrasil/" target="_blank"><i class="fi fi-social-facebook"></i></a></li>
            <li><a href="https://twitter.com/haloprojectbr" target="_blank"><i class="fi fi-social-twitter"></i></a></li>
            <li><a href="https://instagram.com/haloprojectbr/" target="_blank"><i class="fi fi-social-instagram"></i></a></li>
            <li><a href="https://youtube.com/user/haloprojectbr" target="_blank"><i class="fi fi-social-youtube"></i></a></li>
            <li><a href="https://plus.google.com/+HaloProjectBrasil" target="_blank"><i class="fi fi-social-google-plus"></i></a></li>
            <li><a href="https://github.com/haloprojectbrasil/" target="_blank"><i class="fi fi-social-github"></i></a></li>
        </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li class="top-bar" data-responsive-toggle="sticky-menu" data-hide-for="medium"><button type="button" id="mobile-menu" style="color: white" data-toggle><i class="fi fi-list" style="font-size: 1.3em;"></i></button></li>
                <li><a href="<?php echo site_url(); ?>/o-site/sobre/">Sobre</a></li>
                <li><a href="<?php echo site_url(); ?>/o-site/feedback/">Contato</a></li>
                <li><a href="<?php echo site_url(); ?>/wp-admin">Administração</a></li>
            </ul>
        </div>
    </div>
    <div class="headers">
        <div style="z-index: 500;">
            <div class="show-for-medium" id="zmenu" style="z-index: 700; top: 0; left: 0; position: fixed; display: none;"></div>
            <div data-margin-top='0' data-top-anchor="header:bottom">
                <div class="top-bar" id="sticky-menu">
                    <div class="top-bar-left">
                        <nav id="nav">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                        </nav>
                    </div>
                    <?php  // if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header-two")):?>
                    <?php // endif; ?>
                    <div class="top-bar-right">
                        <span class="search-form">
                            <form class="search" action="<?php echo home_url( '/' ); ?>" method="get">
                                <ul class="menu">
                                    <li><input type="text" name="s" id="search-input" placeholder="Pesquisar..."></li>
                                    <li><button type="submit" class="button search-btn"><i class="fi fi-magnifying-glass"></i></button></li>
                                </ul>
                            </form>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
