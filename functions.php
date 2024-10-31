<?php
/**
 * Theme Functions
 * 
 * @package Aquila
 */

/**
 * Registering/enqueue CSS and JS
 */


 function aquila_enqueue_scripts(){

    //best practice is to register the assets first then enqueue it
    wp_register_style('main-stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() .'/style.css'), 'all');

    wp_register_script('mainscript', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);


    wp_enqueue_style('main-stylesheet');

    wp_enqueue_script('mainscript');





 }
 add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');