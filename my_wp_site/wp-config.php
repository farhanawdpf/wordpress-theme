<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'mysite_wp' );

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
define( 'AUTH_KEY',         'GHE%wH8..|]6u8|w:.Fk{Gywqfl_#>*=B*kF.r5]g7d}O]YgbL5$6yemG)b95!Vk' );
define( 'SECURE_AUTH_KEY',  'NI*K=])2*L`:LMw?HXNhUbTdZQO*|s*U0x>!vZ4]lv{H-O}9yrni#ODM.<wOdL(/' );
define( 'LOGGED_IN_KEY',    '$N0-5~ZH6vpL2<lUZ{EFc76]7SlDkQO.SWbD2])gxe^:CIJ?bmLLLCi6i_F|S0=8' );
define( 'NONCE_KEY',        '?z;/^Lnl4EdyXH|)`2}z;3SK9cRJ~:Y[x@2=AUBlR{lK%xZ9/]R-aw9H@xoZ.hzN' );
define( 'AUTH_SALT',        'K%5J:8|M+YIi#$H-q=u$IA5AIx%W:v4w4T!S_bbvV|MPi4-!)/7duRNs-B v1^!1' );
define( 'SECURE_AUTH_SALT', '{.owhEpKH,%)_ 5ELEiT$$[!_XFFU/tt`fG#m&:|NDRJ.je C>Ni:1u4LwU0jHy`' );
define( 'LOGGED_IN_SALT',   '*:NNxwII?D<P7JQG_HK/zY=6UFT1=FW<%02ncAA40&&&oOh=|Pdj,$X(%w#t%ZT#' );
define( 'NONCE_SALT',       'h*Zie!,-,4j?1tqr8noP,w?UgR=(/IZh,B3`p(Sbn572e*3x5V*}~Inogy@eWk6l' );

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
