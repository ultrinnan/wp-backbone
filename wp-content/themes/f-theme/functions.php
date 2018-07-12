<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

//security hooks
require 'admin/security_hooks.php';

// Strings translations in Admin panel
require 'inc/strings-translations.php';

//dashboard customization
require 'admin/admin_customizations.php';

//custom theme settings
//require 'admin/site_fields.php';


// Post type - Location
require 'admin/custom-post-type/locations.php';

// Common scripts and styles
function sh_scripts_styles()
{
    // Connect styles
    wp_enqueue_style('sh_style', get_template_directory_uri() . '/css/main.min.css');

    // Register script
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '1.0', false);

    // Connect script without register
    wp_enqueue_script('sh_scripts', get_template_directory_uri() . '/js/main.min.js', array(), '1.0', true);
}
// Create action where we connected scripts and styles in function shevchenko_scripts_styles
add_action('wp_enqueue_scripts', 'sh_scripts_styles', 1);

