<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'tenhats_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W+5xiD[Ex<T5Z%~D`@u2$7#F7Z4ku8Z1`=r4sJihXRpc@=5kn<}3o2J#fO`Cawn8' );
define( 'SECURE_AUTH_KEY',  'ZQ9m!n%g(K)jz ./mxN k?Iske!piHz<[UCWIHFmQ-;RN/.Y6NS=  )j.^H6^U/J' );
define( 'LOGGED_IN_KEY',    '4}/,TPlP/mG[]E^AN,mJxdBY]{R;#<hRA*%P;&ZH-C72jS`FU8hddGRBDzTm:0Jn' );
define( 'NONCE_KEY',        'Zc@0BI7yGhyBoeGf]8b&PBx>9[3yDE;n#r1PiqxK89m&h@RBxN^TJv-<(T>74SlW' );
define( 'AUTH_SALT',        'ltO3hp^d4}& ab[JJ%u^y1q{4bsB@Ffx2E&YZ9u4|,{ !tcLMUo`pkqOcnK06++r' );
define( 'SECURE_AUTH_SALT', '@#l@YYY&,M)s62}FfJy=;Xrl_K87WMhv[p+5M-j^Pao!+.7t5}opPJ0K0&&n@&?7' );
define( 'LOGGED_IN_SALT',   'Kv!PuH01v>+2q1,X1~jiXh{6%@_sz]YH>]Ay)bAE:y!;c^,,5?)Y=VU.7<9<{@?>' );
define( 'NONCE_SALT',       'PNdKV|)O aS|(==YAeS)!kS|2DoG&[=KeUmG`lP+l0X~/h@LnF1P!:og>!b(PuB`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
