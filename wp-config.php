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
define( 'DB_NAME', 'wp_jschool' );
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
define( 'AUTH_KEY',         'x5|/ ,HFcd]V5lGnP,Wmd79U/#+gFh<#1o<mH~pxS}<dQ|ADuVtu]MET=$G8:e)`' );
define( 'SECURE_AUTH_KEY',  '[CXpAhBUW=Aff*XhQ%>cf0iH*K%RfHHt2]=,)j,=YU7O}] G?Ph1M7m9cS-A%!Wz' );
define( 'LOGGED_IN_KEY',    'X4jE_dWe,qvZB4<*6@>6XS>LA3Ev%8:!$+v3H*@J@fgWcY2z(/Dc{8#?PH<G2^6E' );
define( 'NONCE_KEY',        '=_Lw^v_9G}>2:r:=~Bdz{8S,h;*@Gk7*3(dQrS~VN?opvvW?@s`]MQHdB?:;d}0M' );
define( 'AUTH_SALT',        '{rI,4-|wWZN4A~J`n0J0[uKo?^EVeEM]+vI1-1V6kV/*`!b>I[lz$Ve$*5[7h9Cx' );
define( 'SECURE_AUTH_SALT', 'dh.P3`|nK76+a.Vu}yS}4i4`t<U9S<L(vyhZQ]Ex2G`K3DBn_?gPeZ8w*3:(()[j' );
define( 'LOGGED_IN_SALT',   '&q&:9rU,wOY8 :)8#:3?5_Dy3@GUAW)I/-9/Sf!L`.[q2}fn@KGpQ^xB`uQ,M@tO' );
define( 'NONCE_SALT',       'YgY6xx*0G%m5*$W#yKr+vPks[&<Bj:da+`l7ZO[mDFgm7[7DJ>=GvY1]uBrkV0d4' );
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