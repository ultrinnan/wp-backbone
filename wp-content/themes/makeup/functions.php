<?php
add_theme_support( 'html5', array( 'search-form' ) );

add_theme_support('menus');
add_theme_support('post-thumbnails');

//security hooks
require 'admin/security_hooks.php';

//dashboard customization
require 'admin/admin_customizations.php';

//custom theme settings
//require 'admin/site_fields.php';

//custom locations for menus
function mk_register_menus() {
    register_nav_menu( 'header', __( 'Top menu', 'theme-slug' ) );
    register_nav_menu( 'side', __( 'Side menu', 'theme-slug' ) );
}
add_action( 'after_setup_theme', 'mk_register_menus' );

//feedback post type
function mk_create_feedback_posttype() {
    $labels = array(
        'name'              => _x( 'Feedbacks', 'pt general name', 'textdomain' ),
        'singular_name'     => _x( 'Feedback', 'pt singular name', 'textdomain' ),
        'search_items'      => __( 'Search feedbacks', 'textdomain' ),
        'all_items'         => __( 'All feedbacks', 'textdomain' ),
        'parent_item'       => __( 'Parent feedback', 'textdomain' ),
        'parent_item_colon' => __( 'Parent feedback:', 'textdomain' ),
        'edit_item'         => __( 'Edit feedback', 'textdomain' ),
        'update_item'       => __( 'Update feedback', 'textdomain' ),
        'add_new_item'      => __( 'Add new feedback', 'textdomain' ),
        'new_item_name'     => __( 'New feedback name', 'textdomain' ),
        'menu_name'         => __( 'Feedbacks', 'textdomain' ),
    );

    register_post_type( 'feedbacks',
        array(
            'labels' => $labels,
            'menu_icon' => 'dashicons-admin-comments',
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'feedbacks'),
            'supports'            => array( 'title', 'editor', 'thumbnail'),
            'exclude_from_search' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
        )
    );

}
add_action( 'init', 'mk_create_feedback_posttype' );