<?php

/**
 * Document include custom jQuery
 */
function shapeSpace_include_custom_jquery() //Cette fonction remplace la version par défaut de jQuery (fournie par WordPress) par une version personnalisée
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');