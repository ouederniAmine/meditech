
<?php
// Path: functions.php
function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/all.min.css', array(), false, 'all');
    wp_enqueue_style('fontawesome');
    
    wp_register_style('owlcarousel', get_template_directory_uri() . './css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owlcarousel');
    
    wp_register_style('owltheme', get_template_directory_uri() . './css/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style('owltheme');
    
    wp_register_style('magnificpopup', get_template_directory_uri() . './css/magnific-popup.css', array(), false, 'all');
    wp_enqueue_style('magnificpopup');
    
    wp_register_style('aos', get_template_directory_uri() . './css/aos.css', array(), false, 'all');
    wp_enqueue_style('aos');
    
    wp_register_style('ionicons', get_template_directory_uri() . './css/ionicons.min.css', array(), false, 'all');
    wp_enqueue_style('ionicons');
    
    wp_register_style('flaticon', get_template_directory_uri() . './css/flaticon.css', array(), false, 'all');
    wp_enqueue_style('flaticon');
    
    wp_register_style('icomoon', get_template_directory_uri() . './css/icomoon.css', array(), false, 'all');
    wp_enqueue_style('icomoon');
    
    wp_register_style('style', get_template_directory_uri() . './css/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}

add_action('init', 'load_stylesheets');

function include_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
//  close it 
add_action('wp_enqueue_scripts', 'include_jquery');
