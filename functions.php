<?php

//adding stylesheet & jquery files
include_once('inc/agency_files.php');

//adding custom post
function agency_custom_posts(){
    register_post_type('service',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service'),
                'add_new_item' => __('Add New Service'),
            ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
        )
    );
    
}
add_action('init', 'agency_custom_posts');


//theme supports

function agency_theme_supports(){
     add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-image', 400, 400, true );
}
add_action('after_setup_theme', 'agency_theme_supports');