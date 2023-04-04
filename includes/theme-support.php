<?php

function theblog_support(){

    register_nav_menus(array(
        'header_menu' => __('Header Menu' , "text_domain"),
        'footer_menu' => __('Footer Menu', "text_domain"),
    ));

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme' , 'theblog_support');