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
define( 'DB_NAME', 'dit_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'lD/k/|u b^_MFP@c%xSZo<)]?U.C>n$Nx~}6}08c-`ge}%55T|KS(jm;mYkJIQqP' );
define( 'SECURE_AUTH_KEY',  ',crPpzW>YA-[KJ/H<G|G.LJr9jml2J(Xct[)I~w>7+KuBD3whwy^^]H-{UK`4L($' );
define( 'LOGGED_IN_KEY',    'dUp~D%M>vqdWb^<w8FH(K@4CDYV.l|*</IuJ?<D0 8A?BU9/B^^1k.Ea2?]geOlX' );
define( 'NONCE_KEY',        '6f-l/_I+8a~>I)&9#jH4Pv3zmIpeYgZoNiihSoFM vbR(h$Y~.Bm@t>T%U#S`aB:' );
define( 'AUTH_SALT',        'uf6M,2ne{NqjL2:C)PVc1^o*#6O<*#1;E[E~y7fo .t` vi)br?NJ/TVb)S|7L_%' );
define( 'SECURE_AUTH_SALT', '+&D[mm{AL8Q>vmby6XE8;wHRd|V6*0u:tZTu=j/l!|~#~kSB?ztW<IRE-Bu0pds-' );
define( 'LOGGED_IN_SALT',   'QrP!sN74J%Y>C}T;.DqTrS@^~vsQjG!M{a!85A<)b7jkvy9)3UF6x`jXaUvd2E1*' );
define( 'NONCE_SALT',       'DR4+mH{2_)Ek^1$`8qSaJ4H^ox8L>OZT:6?8~WX=bA?m[(].ic}JartQ*,?[}Izw' );

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
