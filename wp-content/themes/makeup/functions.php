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