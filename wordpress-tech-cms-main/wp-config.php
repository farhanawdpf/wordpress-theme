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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_projct' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '/E}-0@/%jT6s:GJX[cpMe@)^z)]p2n|O.qOyf}}2fE`?Q*oJv*fzR}GunGQ]iDew' );
define( 'SECURE_AUTH_KEY',  'bS}dKzR0oM$ aE<jA$.p.r97a*H0XQ8%+~ooPqv3DT};y.~v@_ZXoQueMn%l-F H' );
define( 'LOGGED_IN_KEY',    '{+qe|.e)2!z+I3[{ptzYk`VYjnOz5t%7Xk,ZIFRu)kxOO8h}vf$p&_v1?gw D6`P' );
define( 'NONCE_KEY',        ')X**^RBjpZEXr5lQoZdiqhEfwNJ<}S^cG#f~a^=Fe_ B|E0wQF_FFqs@=nEqz0%v' );
define( 'AUTH_SALT',        '/g?ksd$#BoW|7Ew>ibEuo&3[M;!a_Mc)G4rYr__|XA>M&/sSH[$7ftTwrO!TEJkJ' );
define( 'SECURE_AUTH_SALT', 'LR9/oi8<%FSb.bzX4:yb6uH]{X+jOEh?.s<-n:ovx>pP]7!,=H3*^kDcdJ_7b<n@' );
define( 'LOGGED_IN_SALT',   '/76+bOV~sO*#^p6{<FN]vx9 n^c=lNX>N~-|>g#@K1[4P kT%x{UEy_jf<qlLWe?' );
define( 'NONCE_SALT',       'evv)YcY.1k_4NpeTROmV-5cL:H*%~+9S_?Wo5W4|LFWur)6_t[?+8sfA)rs)$[ll' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
