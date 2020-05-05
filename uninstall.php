<?php
/**
 * @since             1.0.0
 * @package           Quick_Contact_Bar
 */ 

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
  die;
}

// Remove plugin options 
foreach ( wp_load_alloptions() as $option => $value ) {
  if ( strpos( $option, 'qcb_' ) === 0 ) {
    delete_option( $option );
  }
}