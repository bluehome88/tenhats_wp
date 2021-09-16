<?php
/**
 * Load theme updater functions.
 * Action is used so that child themes can easily disable.
 */

function prefix_theme_updater() {
	require( get_template_directory() . '/updater/theme-updater.php' );
}
add_action( 'after_setup_theme', 'prefix_theme_updater' );