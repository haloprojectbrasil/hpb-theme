<?php
//add_filter( 'show_admin_bar', '__return_false' );
remove_action ('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
add_theme_support( 'post-thumbnails' );
ini_set( 'mysql.trace_mode', 0 );
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
    if( empty( $title ) && ( is_home() || is_front_page() ) ) {
        return __( 'Halo Project Brasil', 'theme_domain' ) . ' - ' . get_bloginfo( 'description' );
    }
    return $title;
}
if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
       'name' => 'sidebar',
	   'before_widget' => '<div class="medium-12">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>',
    ));
    register_sidebar(array(
       'name' => 'header-one',
	   'before_widget' => '<div class="top-bar-right">',
	   'after_widget' => '</div>',
	   'before_title' => '',
	   'after_title' => '',
    ));
    // register_sidebar(array(
    //    'name' => 'header-two',
	//    'before_widget' => '<div class="top-bar-ads">',
	//    'after_widget' => '</div>',
	//    'before_title' => '',
	//    'after_title' => '',
    // ));
}
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'custom-header', array(
    'default-image' => get_template_directory_uri() . '/img/Logo-HPB.png',
    'uploads'       => true
));
?>
