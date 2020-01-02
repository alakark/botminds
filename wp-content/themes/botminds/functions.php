<?php 

   register_nav_menus(
        array(
            'main-menu' => __('Main Menu','theme')
        )
      );



function botminds_theme_style(){
    wp_enqueue_style('font-google', get_template_directory_uri()  . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri()  . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('ico-font', get_template_directory_uri() . '/vendor/icofont/icofont.min.css');
    wp_enqueue_style('line-awesome', get_template_directory_uri()  . '/vendor/line-awesome/css/line-awesome.min.css');
    wp_enqueue_style('aos', get_template_directory_uri()  . '/vendor/aos/aos.css');
    wp_enqueue_style('owlcarousel', get_template_directory_uri()  . '/vendor/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());

} 
function botminds_theme_footer(){

    wp_enqueue_script( 'jquery-1.8.2', get_template_directory_uri() . '/vendor/jquery/jquery.min.js' );
    wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/svendor/jquery/jquery-migrate.min.jss' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js' );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/vendor/easing/easing.min.js' );
    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/vendor/sticky/sticky.js' );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/vendor/aos/aos.js' );
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/vendor/owlcarousel/owl.carousel.min.js' );
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'botminds_theme_style');
add_action('wp_footer', 'botminds_theme_footer');


?>