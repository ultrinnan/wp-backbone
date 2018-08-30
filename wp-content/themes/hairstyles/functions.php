<?php
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

add_theme_support( 'html5', array( 'search-form' ) );
/**
     *  Thumbnails
     **/
    add_theme_support('post-thumbnails');
    add_image_size('portf-img', 285, 220 );


function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_lenght($lenght) {
    return '15';
}
add_filter( 'excerpt_length', 'new_excerpt_lenght' );
?>