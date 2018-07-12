<?php

//custom logos and styles for dashboard. located here instead of styles for speed purposes
function my_admin_logo() {
   echo '
    <script>
      window.onload = function() {
        document.getElementById("footer-thankyou").innerHTML = "Created by <a target=\"_blank\" href=\"https://infopulse.com\">Infopulse BSS-PublicSite team</a>";        
      }
    </script>';
}
add_action('admin_head', 'my_admin_logo');

function my_login_logo(){
   echo '
   <style type="text/css">
        .login h1 a {
                display: none;
   			}
    </style>';
}
add_action('login_head', 'my_login_logo');

//change link to site home instead of wordpress site
add_filter( 'login_headerurl', function(){
    return get_home_url();
});

/* убираем title в логотипе "сайт работает на wordpress" */
add_filter( 'login_headertitle', function() {
    return false;
});
 
//our widgets in dashboard
function dashboard_widget_1(){
  echo "в этом месте могла бы быть ваша реклама :)";
}

function add_dashboard_widgets() {
  wp_add_dashboard_widget('dashboard_widget_id_1', 'Пример виджета админки', 'dashboard_widget_1');
}
add_action('wp_dashboard_setup', 'add_dashboard_widgets' );

function admin_css_js() {
  wp_enqueue_style('admin_style', get_template_directory_uri() .'/admin/css/admin_styles.css', '', '1');
  wp_enqueue_script('admin_js', get_template_directory_uri ().'/admin/js/admin_scripts.js', 'jquery', '1');
}
add_action( 'admin_enqueue_scripts', 'admin_css_js' );

//add a theme settings page to the dashboard menu
function sh_add_theme_settings() {
    add_menu_page( 'Theme settings', 'Theme settings', 'administrator', 'sh_theme_settings', 'sh_theme_general_option', 'dashicons-desktop' );
    add_submenu_page( 'sh_theme_settings', 'Social settings', 'Social settings', 'administrator', 'sh_social_settings', 'sh_display_social_settings');
//    add_submenu_page( 'sh_theme_settings', __( 'Infopulse slider settings' ), __( 'Slider settings' ), 'administrator', 'sh_slider_settings', array( &$this, 'sh_display_slider_settings' ) );
//    add_submenu_page( 'sh_theme_settings', __( 'Infopulse reCAPTCHA settings' ), __( 'reCAPTCHA settings' ), 'administrator', 'sh_recaptcha_settings', array( &$this, 'sh_display_recaptcha_settings' ) );
}
add_action( 'admin_menu', 'sh_add_theme_settings');

function sh_theme_general_option(){
//    todo: move to admin/partials as template
    echo '<div class="wrap">';
    echo '<h1 class="wp-heading-inline">General theme options</h1>';
    echo '<p>Here we will keep and process general theme options</p>';
    echo '</div>';
}

function sh_display_social_settings(){
    get_template_part( 'partials/admin/social' );
}