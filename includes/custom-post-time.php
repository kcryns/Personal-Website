<?php

function portfolio_custom_post() {

    $Skills_label = array(
        'name'  => __('Skills Post' , 'textdomain'),
        'singular_name'  => __('Skills Post' , 'textdomain'),
        'add_new'  => __('Add Skills Post' , 'textdomain'),
        'add_new_item'  => __('Add New Skill' , 'textdomain'),
        'edit_item'  => __('Edit Skill Post' , 'textdomain'),
        'all_item'  => __('Skills Post' , 'textdomain'),
    );

    $Skillspost_args = array(
        'labels'    => $Skills_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

    );
    register_post_type('Skillspost' , $Skillspost_args);


    $Service_label = array(
        'name'  => __('Service Post' , 'textdomain'),
        'singular_name'  => __('Service Post' , 'textdomain'),
        'add_new'  => __('Add Service Post' , 'textdomain'),
        'add_new_item'  => __('Add New Service' , 'textdomain'),
        'edit_item'  => __('Edit Service Post' , 'textdomain'),
        'all_item'  => __('Service Post' , 'textdomain'),
    );

    $Servicepost_args = array(
        'labels'    => $Service_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

    );
    register_post_type('Servicepost' , $Servicepost_args);


    $Sass_label = array(
        'name'  => __('Sass Post' , 'textdomain'),
        'singular_name'  => __('Sass Post' , 'textdomain'),
        'add_new'  => __('Add Sass Post' , 'textdomain'),
        'add_new_item'  => __('Add New Sass' , 'textdomain'),
        'edit_item'  => __('Edit Sass Post' , 'textdomain'),
        'all_item'  => __('Sass Post' , 'textdomain'),
    );

    $Sasspost_args = array(
        'labels'    => $Sass_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

    );
    register_post_type('Sasspost' , $Sasspost_args);

    $Wordpress_label = array(
        'name'  => __('Wordpress Post' , 'textdomain'),
        'singular_name'  => __('Wordpress Post' , 'textdomain'),
        'add_new'  => __('Add Wordpress Post' , 'textdomain'),
        'add_new_item'  => __('Add New Wordpress' , 'textdomain'),
        'edit_item'  => __('Edit Wordpress Post' , 'textdomain'),
        'all_item'  => __('Wordpress Post' , 'textdomain'),
    );

    $Wordpresspost_args = array(
        'labels'    => $Wordpress_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

    );
    register_post_type('Wordpresspost' , $Wordpresspost_args);

    $Tailwind_label = array(
        'name'  => __('Tailwind Post' , 'textdomain'),
        'singular_name'  => __('Tailwind Post' , 'textdomain'),
        'add_new'  => __('Add Tailwind Post' , 'textdomain'),
        'add_new_item'  => __('Add New Tailwind' , 'textdomain'),
        'edit_item'  => __('Edit Tailwind Post' , 'textdomain'),
        'all_item'  => __('Tailwind Post' , 'textdomain'),
    );

    $Tailwindpost_args = array(
        'labels'    => $Tailwind_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

    );
    register_post_type('Tailwindpost' , $Tailwindpost_args);

    $Javascript_label = array(
        'name'  => __('Javascript Post' , 'textdomain'),
        'singular_name'  => __('Javascript Post' , 'textdomain'),
        'add_new'  => __('Add Javascript Post' , 'textdomain'),
        'add_new_item'  => __('Add New Javascript' , 'textdomain'),
        'edit_item'  => __('Edit Javascript Post' , 'textdomain'),
        'all_item'  => __('Javascript Post' , 'textdomain'),
    );

    $Javascriptpost_args = array(
        'labels'    => $Javascript_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

    );
    register_post_type('Javascriptpost' , $Javascriptpost_args);
}
add_action('init' , 'portfolio_custom_post');