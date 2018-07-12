<?php
$social = get_option('social_options');
if ($social){
    echo '<div class="footer_social">';
    echo '<div class="footer_social_title">Find us in social networks:</div>';
    foreach ($social as $key => $value){
        if ($value){
            echo '<a target="_blank" class="social '. $key . '" href="' . $value . '">';
        }
    }
    echo '</div>';
}