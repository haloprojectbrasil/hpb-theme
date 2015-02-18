<!DOCTYPE html>
    <html class="no-js" <?php language_attributes(); ?>>
        <head>
            <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" />
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
            <title><?php wp_title(''); ?></title>
            <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/apple-touch-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/apple-touch-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/apple-touch-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/apple-touch-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/apple-touch-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/apple-touch-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/apple-touch-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/apple-touch-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/apple-touch-icon-180x180.png">
            <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/favicon-32x32.png" sizes="32x32">
            <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/android-chrome-192x192.png" sizes="192x192">
            <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/favicon-96x96.png" sizes="96x96">
            <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/favicon-16x16.png" sizes="16x16">
            <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fav/manifest.json">
            <meta name="msapplication-TileColor" content="#010716">
            <meta name="msapplication-TileImage" content="/mstile-144x144.png">
            <meta name="theme-color" content="#010716">
            <?php wp_head(); ?>
        </head>
    <body class="cbp-spmenu-push" <?php body_class(); ?>>
        <header>
			<div class="bar">
                <button id="showLeftPush" class="menu_button"><i class="fa fa-navicon fa-2x"></i></button>
                <div class="search">
                    <?php
                        $search_form=get_search_form();
                        echo $search_form;
                    ?>
                </div>
            </div>
		</header>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <!-- <div class="user">
                <?php
                $user_id = get_current_user_id();
                $current_user = wp_get_current_user();
                $profile_url = get_edit_profile_url( $user_id );
                if ( is_user_logged_in() ) {
                    echo 'Olá ',the_author_meta('display_name', $user_id);
                }
                else {
                    echo 'Olá Visitante!';
                }
                ?>
            </div> -->
			<a href="<?php echo get_site_url(); ?>"><i class="fa fa-home fa-1x"></i>&nbsp;&nbsp;Página Inicial</a>
			<a href="#"><i class="fa fa-newspaper-o fa-1x"></i>&nbsp;&nbsp;Notícias</a>
			<a href="#"><i class="fa fa-globe fa-1x"></i>&nbsp;&nbsp;O Universo</a>
			<a href="#"><i class="fa fa-users fa-1x"></i>&nbsp;&nbsp;Comunidade</a>
			<a href="#"><i class="fa fa-code fa-1x"></i>&nbsp;&nbsp;O Site</a>
			<!--<a href="#"><i class="fa fa-arrow-left fa-1x"></i>&nbsp;&nbsp;Esconder Menu</a>-->
		</nav>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;


			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
