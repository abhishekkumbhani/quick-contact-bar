<?php
/**
 * @since             1.0.0
 * @package           Quick_Contact_Bar/includes
 *
 * Admin Page UI
 */ 

// Prevent direct file access
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
	* @since 1.0.0
	* Generate admin page UI
	*/ 
if ( !function_exists( 'qcb_admin_page' ) ) {

	function qcb_admin_page() {
	    ?>
	    <div class="wrap">
			<?php settings_errors(); ?>

			<form action="options.php" method="post" name="qcb_form" class="qcb_form">
				<div class="qcb-panel-wrapper">
	    			<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
					<div class="qcb-panel">
						<header class="qcb-panel-header">
							<?php _e( 'Button Settings', 'quick-contact-bar' ); ?>
	            		</header>
	            		<div class="qcb-panel-body">
			                <p>Add buttons then drag and drop to reorder them. Click the arrow on the right of each item to reveal more configuration options.</p>
			                <p><a href="" class="button qcb-add-btn">Add Button</a></p>
			                <ul id="qcb-sortable-buttons">
			                	<li>
			                		<div class="qcb-field-header">
									    Social Icon 1
                                    	<i class="fa fa-caret-down" aria-hidden="true"></i>
                                	</div>
			                		<div class="qcb-field-body">
                                    	<div class="qcb-field-item">
                                            <label>Button Text / Title</label>
                                            <input type="text" class="widefat">
                                    	</div>
                                    	<div class="qcb-field-item">
                                            <label>Text</label>
                                            <input type="text" class="widefat">
                                    	</div>
                                    	<div class="qcb-field-item">
                                    		<div class="qcb-iconpicker-container">
	                                            <label>Icon</label>
	                                            <input type="text" class="widefat qcb-iconpicker" data-placement="bottomRight">
	                                            <span class="qcb-icon-preview input-group-addon"></span>
	                                        </div>
                                    	</div>
                                    	<div class="qcb-field-item">
                                    		<label>Link URL</label>
                                            <input type="text" class="widefat">
                                    	</div>
                                    	<div class="qcb-field-item">
                                    		<label>Open link in new tab</label>
                                            <input type="checkbox" id="button-opening-1" class="open-new-window" value="1">
                                    	</div>
                                    </div>
			                	</li>
			                </ul>
			            </div>
			  		</div>

			  		<div class="qcb-panel">
						<header class="qcb-panel-header">
							<?php _e( 'General Settings', 'quick-contact-bar' ); ?>
	            		</header>
	            		<div class="qcb-panel-body">
			                <div class="qcb-setting-row">
								<div class="qcb-col">
			                		<label>
			                            <strong>Button Color:</strong>
			                        </label>
			                    </div>
			                	<div class="qcb-col">
			                        <div class="qcb-col">
				                        <label for="qcb-pos-left">
				                            <input type="text" id="button-color" class="widefat qcb-colorpicker" value="">
				                        </label>
				                    </div>
			                    </div>
			                </div>

			                <div class="qcb-setting-row">
								<div class="qcb-col">
			                		<label>
			                            <strong>Button Hover Color:</strong>
			                        </label>
			                    </div>
			                	<div class="qcb-col">
			                        <div class="qcb-col">
				                        <label for="qcb-pos-left">
				                            <input type="text" id="button-color" class="widefat qcb-colorpicker" value="">
				                        </label>
				                    </div>
			                    </div>
			                </div>

			                <div class="qcb-setting-row">
								<div class="qcb-col">
			                		<label>
			                            <strong>Icon Color:</strong>
			                        </label>
			                    </div>
			                	<div class="qcb-col">
			                        <div class="qcb-col">
				                        <label for="qcb-pos-left">
				                            <input type="text" id="icon-color" class="widefat qcb-colorpicker" value="">
				                        </label>
				                    </div>
			                    </div>
			                </div>

			                <div class="qcb-setting-row">
								<div class="qcb-col">
			                		<label>
			                            <strong>Icon Hover Color:</strong>
			                        </label>
			                    </div>
			                	<div class="qcb-col">
			                        <div class="qcb-col">
				                        <label for="qcb-pos-left">
				                            <input type="text" id="icon-color" class="widefat qcb-colorpicker" value="">
				                        </label>
				                    </div>
			                    </div>
			                </div>

			                <div class="qcb-setting-row">
								<div class="qcb-col">
			                		<label>
			                            <strong>Text Color:</strong>
			                        </label>
			                    </div>
			                	<div class="qcb-col">
			                        <div class="qcb-col">
				                        <label for="qcb-pos-left">
				                            <input type="text" id="icon-color" class="widefat qcb-colorpicker" value="">
				                        </label>
				                    </div>
			                    </div>
			                </div>

			                <div class="qcb-setting-row">
								<div class="qcb-col">
			                		<label>
			                            <strong>Text Hover Color:</strong>
			                        </label>
			                    </div>
			                	<div class="qcb-col">
			                        <div class="qcb-col">
				                        <label for="qcb-pos-left">
				                            <input type="text" id="icon-color" class="widefat qcb-colorpicker" value="">
				                        </label>
				                    </div>
			                    </div>
			                </div>

			                <div class="qcb-setting-row">
								<div class="qcb-col">
			                		<label>
			                            <strong>Button Position:</strong>
			                        </label>
			                    </div>
			                	<div class="qcb-col">
			                        <div class="qcb-col">
				                        <label for="qcb-pos-left">
				                            <input type="radio" name="qcb_settings[btn_pos]" id="qcb-pos-left" value="left"> Left
				                        </label>
				                    </div>
			                    </div>
			                    <div class="qcb-col">
			                        <label for="qcb-pos-right">
			                            <input type="radio" name="qcb_settings[btn_pos]" id="qcb-pos-right" value="right"> Right
			                        </label>
			                    </div>
			                </div>

			                <div class="qcb-setting-row">
			                    <div class="qcb-col">
			                        <label for="qcb-btn-disable">
			                            <strong><?php _e( 'Disable on Mobile', 'sticky-side-buttons' ); ?>:</strong>
			                        </label>
			                    </div>
			                    <div class="qcb-col">
			                        <label for="qcb-btn-disable">
			                            <input type="checkbox"
			                                   name="qcb_settings[btn_disable_mobile]"
			                                   id="qcb-btn-disable"
			                                   value="1">
			                        </label>
			                    </div>
			                </div>
			                <div class="qcb-setting-row">
			                    <div class="qcb-col">
			                        <label for="qcb-btn-z-index">
			                            <strong><?php _e( 'Z-Index', 'sticky-side-buttons' ); ?>:</strong>
			                        </label>
			                    </div>
			                    <div class="qcb-col">
			                        <input type="number" name="qcb_settings[btn_z_index]" id="qcb-btn-z-index" class="small-text"
			                               value="1">
			                    </div>
			                </div>
			            </div>
			            <footer class="qcb-panel-footer">
			                <input type="submit" class="button-primary"
			                       value="<?php _e( 'Save Settings', 'sticky-side-buttons' ); ?>">
			            </footer>
			  		</div>
			  	</div>
	  		</form>
	    </div>
	    <?php
	}
}