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
define( 'DB_NAME', 'kisontech.com.np' );

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
define( 'AUTH_KEY',         '+[-sxcuBM)uRCo8~./G?:&FU<~mDF)./=}.xW^e){}O~wg(>iYDxR(JKB?FB7$xW' );
define( 'SECURE_AUTH_KEY',  'I!S7]Turk93si?<Ar^exyw=nGPbUhw<iqG|#3,ibbf[~sWm;A4[uH/lC:I?fS|?c' );
define( 'LOGGED_IN_KEY',    'NBm+*7JJ!F<!pB]|uQk_2Cj-z]Q|5>12aEOOw^E/,9/f[_z}`hm]Im=&474Q=K5u' );
define( 'NONCE_KEY',        '1 vKo17mK3%dKX^qjQ]THoC5KEQp|.n?3{|6R|<vD:1eJ6QpOcU!tbE(v;f~Y1Gm' );
define( 'AUTH_SALT',        'GATR0Ch[cm^UTeYJOSs+h+GBy_FX]yY(ar#RC?4;ha$I?)1}trF|aYG#*t}p*JtI' );
define( 'SECURE_AUTH_SALT', 'm]c&m|S4g|EeT.B&kl:,}Hx*qehW |E>iAHF/7m%{*UOpGi3//Y`R.__Yo#b8}hu' );
define( 'LOGGED_IN_SALT',   'g*oe5%0^wuD7(e/%5!%7jk`r: 1AEh8hiO-[]ss.v:6[Z$Df4i ly>^gp:u@ew%,' );
define( 'NONCE_SALT',       'eM7a(F@q_h$f9X*AHH(8p9EeU<W~y@jO3&;/?:~s?aJ2HHo!;:)Q]UC/n@_X:Lj`' );

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
