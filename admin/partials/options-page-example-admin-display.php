<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.fahdmurtaza.com
 * @since      1.0.0
 *
 * @package    Options_Page_Example
 * @subpackage Options_Page_Example/admin/partials
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
    <h2>Plugin Name <?php _e('Options', $this->plugin_name); ?></h2>

    <form method="post" name="cleanup_options" action="options.php">
		<?php
		//Grab all options
		$options = get_option($this->plugin_name);
		$example_select = ( isset( $options['example_select'] ) && ! empty( $options['example_select'] ) ) ? esc_attr( $options['example_select'] ) : '1';
		$example_text = ( isset( $options['example_text'] ) && ! empty( $options['example_text'] ) ) ? esc_attr( $options['example_text'] ) : 'default';
		$example_checkbox = ( isset( $options['example_checkbox'] ) && ! empty( $options['example_checkbox'] ) ) ? 1 : 0;
		settings_fields($this->plugin_name);
		do_settings_sections($this->plugin_name);

		?>

        <!-- Select -->
        <fieldset>
            <p><?php _e( 'Example Select.', $this->plugin_name ); ?></p>
            <legend class="screen-reader-text">
                <span><?php _e( 'Example Select', $this->plugin_name ); ?></span>
            </legend>
            <label for="example_select">
                <select name="<?php echo $this->plugin_name; ?>[example_select]" id="<?php echo $this->plugin_name; ?>-example_select">
                    <option <?php if ( $example_select == 'first' ) echo 'selected="selected"'; ?> value="first">First</option>
                    <option <?php if ( $example_select == 'second' ) echo 'selected="selected"'; ?> value="second">Second</option>
                </select>
            </label>
        </fieldset>

        <!-- Text -->
        <fieldset>
            <p><?php _e( 'Example Text.', $this->plugin_name ); ?></p>
            <legend class="screen-reader-text">
                <span><?php _e( 'Example Text', $this->plugin_name ); ?></span>
            </legend>
            <input type="text" class="example_text" id="<?php echo $this->plugin_name; ?>-example_text" name="<?php echo $this->plugin_name; ?>[example_text]" value="<?php if( ! empty( $example_text ) ) echo $example_text; else echo 'default'; ?>"/>
        </fieldset>

        <!-- Checkbox -->
        <fieldset>
            <p><?php _e( 'Example Checkbox.', $this->plugin_name ); ?></p>
            <legend class="example-Checkbox">
                <span><?php _e( 'Example Checkbox', $this->plugin_name ); ?></span>
            </legend>
            <label for="<?php echo $this->plugin_name; ?>-example_checkbox">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-example_checkbox" name="<?php echo $this->plugin_name; ?>[example_checkbox]" value="1" <?php checked( $example_checkbox, 1 ); ?> />
                <span><?php esc_attr_e('Example Checkbox', $this->plugin_name); ?></span>
            </label>
        </fieldset>

		<?php submit_button( __( 'Save all changes', $this->plugin_name ), 'primary','submit', TRUE ); ?>
    </form>
</div>
