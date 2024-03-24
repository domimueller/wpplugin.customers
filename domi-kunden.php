<?php

/**
* Plugin Name: Kunden
* Plugin URI: 
* Description: Funktionalität für Kunden. Darstellung im Theme
* Version: 1.0
* Author: Dominique Müller
* Author URI: 
**/







$plugin_url = WP_PLUGIN_DIR . '/' . basename(dirname(__FILE__));

/* include Scripts*/
function domi_kunden_custom_customcss() {
    wp_enqueue_style( 'customcss',  plugin_dir_url( __FILE__ ) . '/css/custom.css' );                      
}
add_action( 'wp_enqueue_scripts', 'domi_kunden_custom_customcss');


/* INCLUDE FILES */
include $plugin_url . '/includes/customPostType.php';
include $plugin_url . '/includes/advancedCustomFields.php';

?>