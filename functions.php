<?php
add_filter('show_admin_bar', '__return_false');
remove_action ('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
add_theme_support( 'post-thumbnails' );
ini_set( 'mysql.trace_mode', 0 );
?>
