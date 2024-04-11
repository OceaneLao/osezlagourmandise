<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'bise8978_wpdbolg' );

/** Database username */
define( 'DB_USER', 'bise8976@localhost' );

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
define( 'AUTH_KEY',         'ZqLfbE6;1PW-wJwsp3{<i7BUp+7}|ovS.>+Dyo8<d IJCjkBrm5|<b}Ss9nbd@mz' );
define( 'SECURE_AUTH_KEY',  'Fg_Y[xtzZ.}33Wwhn`GxL+zT(aSaCUg 2Qs>&V(~|oQZ|enw`YLzM3$eMK%>JVUL' );
define( 'LOGGED_IN_KEY',    'NM:(4.I7O|QBZwWXQ!_Q%bSs|DI3V3A+ek$_hEp6ruI-6Pk j#>ZW5sWl`_(9zq{' );
define( 'NONCE_KEY',        '>CU|A1XdW+OrJe(V;Pn.v_fQCt%>slQ$PI0-3g6=GlT&OE~/*FCr<4PDx;BsU+A:' );
define( 'AUTH_SALT',        'B`z1b?D:E|bV|d$,dd$3MO/I>RXE{h#gsCrf8Tch]@#bH91V6eYhR*.R4i<}c.&J' );
define( 'SECURE_AUTH_SALT', 'Gj5wG}wkR#IAX[KO0Z4?PB-L!s[X14UAzS]al&>mmZPj`K;Vo/ZZQe -qiZjrMZ8' );
define( 'LOGGED_IN_SALT',   'SJog;XuRpeS&2dc<3uLyF^S5_Xf]zuTMO9E$Cg;:Y#cZa+U(DJ]CIdbM^/vtE&=7' );
define( 'NONCE_SALT',       '16?7PPj0>d~$8;1:},EVNbT2yC-;BB][(:T]5Dc^3>Uh(NzK[`x#(9fv>*5mW:=i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpolg_';

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
