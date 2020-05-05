<?php
/**
 * @since             1.0.0
 * @package           Quick_Contact_Bar/includes
 *
 * Load Style and JS file in client side and admin side
 */ 

// Prevent direct file access
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

function qcb_enqueue_admin_assets() {
    // CSS
    wp_enqueue_style( 'qcb-admin-style', QCB_PLUGIN_DIR. 'assets/css/qcb-admin-style.css' );
    wp_enqueue_style( 'qcb-fontawesome', QCB_PLUGIN_DIR. 'assets/css/font-awesome.css' );
    wp_enqueue_style( 'qcb-iconpicker', QCB_PLUGIN_DIR. 'assets/css/fontawesome-iconpicker.css' );
    wp_enqueue_style( 'wp-color-picker' );

    // JS
    wp_enqueue_script( 'jquery-ui-core' );
    wp_enqueue_script( 'jquery-ui-accordion' );
    wp_enqueue_script( 'jquery-ui-sortable' );
    wp_enqueue_script( 'wp-color-picker' );
    wp_enqueue_script( 'qcb-iconpicker-js', QCB_PLUGIN_DIR. 'assets/js/iconpicker.js' );
    wp_enqueue_script( 'qcb-admin-js', QCB_PLUGIN_DIR. 'assets/js/qcb-admin-js.js' );
}
add_action( 'admin_enqueue_scripts', 'qcb_enqueue_admin_assets' );