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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'startupkazi_smartart_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'j7PY&)kso s3{)#eyX~4WPY=fi9dUI,Mp4FocW$gm}Sd@YrDg}.nL&!A?ZnkxrLj' );
define( 'SECURE_AUTH_KEY',  'ANvqa7X>%.F){C?/^#OaIV{p!>u1cGt[KlRNZm$h|`FyOAcmbq64]Ts&.Xdt-=q^' );
define( 'LOGGED_IN_KEY',    ',koDX]1y ^nqsklB:2+%!9OV:<,`RkE?Sa-h 92!pn.W_-L+h4tba[;tB#Sg8/~&' );
define( 'NONCE_KEY',        'Rx9L=2_%M-v2%8WE6qb.{%8`$Hl|dde]?,5>N2VrzKMG8*tUltMAH);0%K*pNp4w' );
define( 'AUTH_SALT',        '0h efKnD)z[LM;x,jn.RHcdI_B-_LeP.Nm9pM??MCOs@hqX$VE>T.mpU&%8] sp~' );
define( 'SECURE_AUTH_SALT', '5JU3}R}ASQ;,:lUWMNO^w^g,sJ<EWS6V}4(IO|sXYo2BZE^Wh t~Y#7`+|3@,SOM' );
define( 'LOGGED_IN_SALT',   'xB]2rtwObCGtghUCnO#Bby6M&77aS?PyXXWu{x(HC7 ):3dG:7,v0l~Jw/ZI$8XR' );
define( 'NONCE_SALT',       'a4!J-)V=;][=QD<(y:MhQwGC^1GeoKv E89)*-|A+HOXnQC{1O%S|//Yo7:,>W`b' );

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
