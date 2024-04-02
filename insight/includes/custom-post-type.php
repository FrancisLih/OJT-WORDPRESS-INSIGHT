<?php

function insight_custom_post(){
    $projectPost_label = array(
        'name'          => __('Project Post','textdomain'),
        'singular_name' => __('Project Post','textdomain'),
        'add_new'       => __('Add Project Post', 'textdomain'),
        'add_new_item'  => __('Add new Project Post', 'textdomain'),
        'edit_item'     => __('Edit Project Post', 'textdomain'),
        'all_items'     => __('Project Post', 'textdomain'),
    );

    $projectPost_args = array(
        'labels'            => $projectPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('projectPost', $projectPost_args);
}
add_action('init', 'insight_custom_post');

function services_custom_post(){
    $servicesPost_label = array(
        'name'          => __('Services Post','textdomain'),
        'singular_name' => __('Services Post','textdomain'),
        'add_new'       => __('Add Services Post', 'textdomain'),
        'add_new_item'  => __('Add new Services Post', 'textdomain'),
        'edit_item'     => __('Edit Services Post', 'textdomain'),
        'all_items'     => __('Services Post', 'textdomain'),
    );

    $servicesPost_args = array(
        'labels'            => $servicesPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('servicesPost', $servicesPost_args);
}
add_action('init', 'services_custom_post');