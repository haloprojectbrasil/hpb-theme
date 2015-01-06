<?php
add_filter('show_admin_bar', '__return_false');
remove_action('wp_head', 'wp_generator');
add_theme_support( 'post-thumbnails' );
add_image_size( 'small', 430, 286, true );
add_image_size( 'large', 1140, 1140, false );
add_image_size( 'thumbnails', 200, 133, true );
?>
