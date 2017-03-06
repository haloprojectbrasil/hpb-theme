<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="headers">
        <header id="header">
            <div class="top-bar" id="firstheader">
                <div class="top-bar-left">
                    <img src="<?php header_image(); ?>" class="header-img">
                </div>
                <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header-one")):?>
                <?php endif; ?>
            </div>
        </header>
        <div class="top-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
            <button type="button" style="color: white" data-toggle><i class="fi fi-list" style="font-size: 1.3em;"></i> Navegação</button>
        </div>
        <div data-sticky-container style="z-index: 500;">
            <div data-sticky data-margin-top='0' data-top-anchor="header:bottom" data-btm-anchor="footer:bottom">
                <div class="top-bar" id="example-animated-menu" data-animate="fade-in fade-out">
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
