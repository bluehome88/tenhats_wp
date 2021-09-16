<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://www.themely.com', // Site where EDD is hosted
		'item_name'      => 'Integral', // Name of theme
		'theme_slug'     => 'integral', // Theme slug
		'version'        => '1.5.5', // The current version of this theme
		'author'         => 'Themely', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'integral' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'integral' ),
		'license-key'               => __( 'License Key', 'integral' ),
		'license-action'            => __( 'License Action', 'integral' ),
		'deactivate-license'        => __( 'Deactivate License', 'integral' ),
		'activate-license'          => __( 'Activate License', 'integral' ),
		'status-unknown'            => __( 'License status is unknown.', 'integral' ),
		'renew'                     => __( 'Renew?', 'integral' ),
		'unlimited'                 => __( 'unlimited', 'integral' ),
		'license-key-is-active'     => __( 'License key is active.', 'integral' ),
		'expires%s'                 => __( 'Expires %s.', 'integral' ),
		'expires-never'             => __( 'Lifetime License.', 'integral' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'integral' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'integral' ),
		'license-key-expired'       => __( 'License key has expired.', 'integral' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'integral' ),
		'license-is-inactive'       => __( 'License is inactive.', 'integral' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'integral' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'integral' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'integral' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'integral' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'integral' ),
	)

);