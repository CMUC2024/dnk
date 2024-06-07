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
define( 'DB_NAME', 'dnk' );

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
define( 'AUTH_KEY',         '{}{io2rEA/t=/ 3u#Ude1%cyR{bGCcV9`@=1Q}&e{nype~dh.<}ly#v}Q;5uQ*ld' );
define( 'SECURE_AUTH_KEY',  'S$~xV0#.*o{E$JS,IS]@mK0&hG^-PR1@jh.t)l2dNJV*s@D$r+@#z!qm 2h)pP.{' );
define( 'LOGGED_IN_KEY',    '<ve+W8xg5n[iSa0o%=1akS;5wS9O[Q-biWycnp|OX9,^<i$%oG9Ja9@(bJ$v4q?]' );
define( 'NONCE_KEY',        'u]%q-ozwS9VPaVV>VVZ%4V?RmX(l_H8FZY6 `f[DWvfY-;WN%}|9D0cfa`*Wu3s@' );
define( 'AUTH_SALT',        'Eq03=LMCE)@+T&Nn$kr>$f)@p7PUj]t)ue>f?g`2u`sz(wT9?*{^Fr8r,HvADpIT' );
define( 'SECURE_AUTH_SALT', 't^F,5ZB :CL6/R,j&+IwR?I62vP?0BjN]l>Ct80mr)!G 3a>ggA}[mngJf1)^[<1' );
define( 'LOGGED_IN_SALT',   '!sz*Z)A|%Yl,IB(@o3mLaUV-(G#G8+?kg8V~3l9x+IExy~8xD=(>Rte@8P%hnTJC' );
define( 'NONCE_SALT',       '^-acEX,jZS6Z[Dp=1BtT8uqkp+fLgQK<`Y*5|W~!vc? Nd}Si<O9).#0^9$vF^GK' );

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
