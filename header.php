<?php

use Automattic\Jetpack\Sync\Functions;

/*
-------------------------------------------------------
ADD STYLE AND SCRIPT
-------------------------------------------------------
*/

function add_my_style(){

    wp_enqueue_style('my-style',get_template_directory_uri() . '/css/mycss.css',array(),rand(111,9999),"all");
    
    wp_enqueue_style('bulma',get_template_directory_uri() . '/bulma/css/bulma.css',array(),rand(111,9999),"all");
//   wp_enqueue_style('bulmas',get_template_directory_uri() . '/bulma/css/bulma.min.css',array(),rand(111,9999),"all");
    wp_enqueue_script('my-js',get_template_directory_uri() . '/js/my-js.js',array(),rand(111,9999),true);
    wp_enqueue_style('fonts', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",
    array(),rand(111,9999),"all");
        wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Noto+Sans:wght@500&family=Outfit:wght@300&family=Pacifico&family=Poppins:wght@200&display=swap",
    array(),rand(111,9999),"all");

};

add_action('wp_enqueue_scripts','add_my_style');

/*
-------------------------------------------------------
ADD MENU NAVIGATION
-------------------------------------------------------
*/

function add_my_menus(){
    add_theme_support('menus');
    register_nav_menus(
         [
            'primary' => 'Header Menu',
            'secondary' => 'Footer Menu'
         ]
    );

};

add_action('init','add_my_menus');



/*
-------------------------------------------------------
ADD THEME SUPPORT
-------------------------------------------------------
*/

function add_tema_menu(){
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('html5',array('search-form'));
    add_theme_support( 'post-formats', array( 'aside', 'image','video' ) );
    };
  
    add_action('after_setup_theme','add_tema_menu');
  

/*
-------------------------------------------------------
ADD SIDEBAR
-------------------------------------------------------
*/

function add_my_sidebar(){

    register_sidebar(
        array(
          'name' => 'Sidebar',
          'id' => 'Sidebar-1',
          'class' => 'custom',
          'description' => 'Widget sidebar',
          'before-widget' => '<aside id="%1$s" class="widget %2$s" >',
          'after-widget' => '</aside>',
          'before-style' => '<h1 class="widget-title">',
          'after-style' => '</h1>'
        )
        );
};

add_action('widgets_init','add_my_sidebar');

/*
------------------------------------------
INCLUDE WALKER
------------------------------------------
*/
require get_template_directory() . '/inc/walker.php';
