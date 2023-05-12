<?php

function portfolio_custom_post() {

    $Skills_label = array(
        'name'  => __('Skills Post' , 'textdomain'),
        'singular_name'  => __('Skills Post' , 'textdomain'),
        'add_new'  => __('Add Skills Post' , 'textdomain'),
        'add_new_item'  => __('Add New Service' , 'textdomain'),
        'edit_item'  => __('Edit Service Post' , 'textdomain'),
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

}
add_action('init' , 'portfolio_custom_post');