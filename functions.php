<?php


function add_css()

{

    

    wp_register_style('first', get_template_directory_uri() . '/css/style.css', false,'1.1','all');

    wp_enqueue_style('first');



    wp_register_style( 'second', get_template_directory_uri() .'/css/swiper-bundle.min.css', false,'1.1','all');

    wp_enqueue_style( 'second');




}



add_action('wp_enqueue_scripts', 'add_css');





function add_scripts()



{



wp_register_script('script1', get_template_directory_uri() . '/js/jquery.min.js', array ( 'jquery' ), 1.1, true);

wp_enqueue_script( 'script1' );


 


wp_register_script('script2', get_template_directory_uri() . '/js/swiper-bundle.min.js', array ( 'jquery' ), 1.1, true);

wp_enqueue_script( 'script2' );





wp_register_script('script3', get_template_directory_uri() . '/js/script1.js', array ( 'jquery' ), 1.1, true);

wp_enqueue_script( 'script3' );






}





add_action('wp_enqueu_scripts','add_scripts');





add_theme_support( 'menus' );





add_theme_support( 'post-thumbnails' );



/* this line is to disable photo gallery default style */

//add_filter( 'use_default_gallery_style', '__return_false' );


?>

