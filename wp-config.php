<?php


define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tenhatsc_wp544' );

/** MySQL database username */
define( 'DB_USER', 'tenhatsc_wp544' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SpjL.J1]2!0v[t@t' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lpchvfwoeyqfcxxqpkabduw5pnzdqb6mq7u2qumsmkjtwq9lawwr9yefwlghu0ej' );
define( 'SECURE_AUTH_KEY',  'ljzqtwo5o8v7bwynz8cwyhqkazao2zuo8obni1dzsujp2ybsi18waglo3pfgsxzi' );
define( 'LOGGED_IN_KEY',    'fdmztgxkkgt2m32q8piadqbo3dkuxzbcteifepjbzwoymu3djc8dlyo2z74lqlzf' );
define( 'NONCE_KEY',        'ck7stvfiiozq8t6evgy5dluyjfxqo4w4kbiprlzpv6mllw0fdewcpnyvlgwsl3wj' );
define( 'AUTH_SALT',        'zi4w2ahriyuvn9shq4vshwcnvfvu2d8kvrssljr8ewciuj8shkzvx96hn6odf3ys' );
define( 'SECURE_AUTH_SALT', 'xbjpeqyfs2ruhceg5eqvrzignknfxygbsfzdwqszaoga7xa93ebzafggyt8z1tbx' );
define( 'LOGGED_IN_SALT',   'dfp4qsresfkuwft7tkcr3hxyfgulrhasqt5jjh0jdf5fzojr9xongwmyz9m9edov' );
define( 'NONCE_SALT',       'knkh9byz0hwhluwfm6tf5v3difwkdve7a9cc04apdxjyw9wkeykxlhopgycvtelx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wplq_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
