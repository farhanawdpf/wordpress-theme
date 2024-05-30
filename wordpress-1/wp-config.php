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
define( 'DB_NAME', 'wp_part1' );

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
define( 'AUTH_KEY',         'fC/U?NH)HZPWFf$5mek^OrpM,+YE#QGJa U2pckTX?I$]n7COCLQyex?dnoJ3]JR' );
define( 'SECURE_AUTH_KEY',  'P}0lf]GHmA6=q?3Lko!s>~x(vo:3@HBF&EF$V])u;P#@9f96Y73S]e42=S7F9zl|' );
define( 'LOGGED_IN_KEY',    '49y]M]`tB8P]GR%z*i>Vvl^)$V`swDLINXV%YaC]_hV24)*U==Gbr!;tB#X7rHis' );
define( 'NONCE_KEY',        'x8p~ggBpwbHrV|aax~bo;i#k-&fWG%e5oM&(Rt2(lwfpZvpgkVQ^HBJ`jj?(w9dl' );
define( 'AUTH_SALT',        '{Wz!m)<?5n^}1Da4:5p w/[#OUie (M*Pi_195Q3iT/_zkBIKn<%nRDftJ1r*h?r' );
define( 'SECURE_AUTH_SALT', 'O-!qg>*c%w>V;*m_)/mQ7uy/|YsNRIXA5WQfCPxNM2=)MIRU@G<fHXo`f.zY1%s3' );
define( 'LOGGED_IN_SALT',   'Cr_-/~k`q/$%@,8Dy6O]?xz<{C7P,Aq(;wh_(Q.y=RyZW$pZV%Z[FmZdxv+YcW,~' );
define( 'NONCE_SALT',       'Y7BNc{C*(EfY5YU[YS1sa=4Bfs+b7}bq&]ACl#>IiD^QBuI&M^@h+il5F2pC#$}G' );

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
