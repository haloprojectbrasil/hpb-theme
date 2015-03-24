<?php
add_filter( 'show_admin_bar', '__return_false' );
remove_action ('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
add_theme_support( 'post-thumbnails' );
ini_set( 'mysql.trace_mode', 0 );
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
    if( empty( $title ) && ( is_home() || is_front_page() ) ) {
        return __( 'Halo Project Brasil', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
    }
    return $title;
}
?>