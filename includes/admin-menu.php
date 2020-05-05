<?php
/**
 * @since             1.0.0
 * @package           Quick_Contact_Bar/includes
 *
 */ 

// Prevent direct file access
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @since 1.0.0
 * Register menu in admin
 * qcb_settings_page_html function add in admin-settings.php file
 */ 
if ( !function_exists( 'qcb_admin_menu' ) ) {	
	function qcb_admin_menu() {
		add_menu_page(
			__( 'Quick Contact Bar', 'quick-contact-bar' ),
			__( 'Quick Contact Bar', 'quick-contact-bar' ),
			'manage_options',
			'qcb',
			'qcb_admin_page',
			'dashicons-buddicons-replies'
		);
	}
	add_action( 'admin_menu', 'qcb_admin_menu' );
}

