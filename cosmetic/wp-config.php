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
define( 'DB_NAME', 'cosmetic' );

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
define( 'AUTH_KEY',         '+.-HAg8Hod2p.+^G9aVwq!=@kq:uH6[2:3$@CV5.i[}2a*<Cz*A7g3HkQw`|Clpx' );
define( 'SECURE_AUTH_KEY',  '7|am>Jt{B$R3}@,f7 @22z~2uFKLKSYzu*_zi2b6q=745-rqu2 &N4;V:5O- }dq' );
define( 'LOGGED_IN_KEY',    '9^%0dtxk#|INo;wyc!Ek_5TK% 1C}%s`~0a W6/q:BTDvG4ra0w`L2p-i()vBAbS' );
define( 'NONCE_KEY',        '2Aa$epMX0!~tRUm1=;?nR6DX5F>KYd&R+@(+2o!0tH7hw{!2v1]eUvC|KZ,CB,K.' );
define( 'AUTH_SALT',        '4R-mvzV).@q!e^PCoxBCzC6J+w[cnJq%~m6D9CC[|TF6=xK*I:OtoAG%TRwrRUo#' );
define( 'SECURE_AUTH_SALT', '*q+mKQ0SD7yt;[=:g~BD^:6;}#.b=Olc01U7ap}T|H5.v;,(y;RCcH;`2YW(`*i&' );
define( 'LOGGED_IN_SALT',   'C0fhoV?vnpy<5KFLxI.lohLGojZzZhAY/(% ~mjP@EU//(e/]($GnQeiHzvlb7Yu' );
define( 'NONCE_SALT',       ')=&=d~w4@+k;Duf3C`8_au$^B-94x[wD%D:d pK Zo`Nw%vyGJKwn8XOm{v3@lRS' );

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
