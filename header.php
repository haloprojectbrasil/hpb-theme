<!DOCTYPE html>
    <html class="no-js" <?php language_attributes(); ?>>
        <head>
            <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" />
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="google-site-verification" content="6Pkqh-J0wTzq92nbuMijOwzTrCAKAyO_8qtsRjmQUGI" />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
            <title><?php wp_title(''); ?></title>
            <meta name="msapplication-TileColor" content="#010716">
            <meta name="theme-color" content="#010716">
            <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
            </script>
            <![endif]-->
            <?php wp_head(); ?>
        </head>
        <body class="<?php body_class(); ?>">
                    <div class="search">
                        <?php
                            $search_form=get_search_form();
                            echo $search_form;
                        ?>
                    </div>
            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <a href="<?php echo get_site_url(); ?>"><i class="fa fa-home fa-1x"></i>&nbsp;&nbsp;Início</a>
                <a href="<?php echo get_site_url(); ?>/category/noticias/"><i class="fa fa-newspaper-o fa-1x"></i>&nbsp;&nbsp;Notícias</a>
                <a href="<?php echo get_site_url(); ?>/o-universo/"><i class="fa fa-globe fa-1x"></i>&nbsp;&nbsp;Universo</a>
                <a href="<?php echo get_site_url(); ?>/comunidade/"><i class="fa fa-users fa-1x"></i>&nbsp;&nbsp;Comunidade</a>
                <a href="<?php echo get_site_url(); ?>/o-site/"><i class="fa fa-code fa-1x"></i>&nbsp;&nbsp;Site</a>
            </nav>