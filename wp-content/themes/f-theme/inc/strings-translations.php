<?php

add_action( 'admin_init', 'sh_polylang_custom_strings', 10, 2 );

function sh_polylang_custom_strings() {
    if (is_plugin_active('polylang-pro/polylang.php')){
        /**
         * Locations post
         */
        pll_register_string('Locations', 'Locations', 'post types');
        pll_register_string('address', 'Address', 'post types');
        pll_register_string('latitude', 'Latitude', 'post types');
        pll_register_string('longitude', 'Longitude', 'post types');
        pll_register_string('phone number', 'Phone number', 'post types');
        pll_register_string('description to phone', 'Description to phone', 'post types');
        pll_register_string('email', 'Email', 'post types');
        pll_register_string('working days from to', 'Working days from to', 'post types');
        pll_register_string('working hours from to', 'Working hours from to', 'post types');
        pll_register_string('comment', 'Comment', 'post types');
        pll_register_string('GPS coordinates', 'GPS coordinates', 'post types');
        pll_register_string('days of week DD-DD', 'days of week DD-DD', 'post types');
        pll_register_string('hours HH:MM-HH:MM', 'hours HH:MM-HH:MM', 'post types');
        pll_register_string('location', 'Location', 'post types');
        pll_register_string('all locations', 'All locations', 'post types');
        pll_register_string('view', 'View', 'post types');
        pll_register_string('add new location', 'Add new location', 'post types');
        pll_register_string('add new', 'Add new', 'post types');
        pll_register_string('edit', 'Edit', 'post types');
        pll_register_string('update', 'Update', 'post types');
        pll_register_string('search', 'Search', 'post types');
        pll_register_string('not found in trash', 'Not found in trash', 'post types');
        pll_register_string('location fields box', 'Location fields box', 'post types');

        pll_register_string('Share this page', 'Share this page', 'theme context');
        pll_register_string('Share on Facebook', 'Share on Facebook', 'theme context');
        pll_register_string('Share on LinkedIn', 'Share on LinkedIn', 'theme context');
        pll_register_string('Share on Twitter', 'Share on Twitter', 'theme context');
        pll_register_string('Share on Google+', 'Share on Google+', 'theme context');
    }
    return true;
}



