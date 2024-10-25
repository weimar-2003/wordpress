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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'weimarprueba' );

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
define( 'AUTH_KEY',         '?/sRju]`T@F`5;CHbi;;7;E[:L s+rEa<_*_4s/4>7elITR[J,n=s#6Ec^-Byn[m' );
define( 'SECURE_AUTH_KEY',  'N&~@9s1os-);c&4RztR_*}b4E>6D`dpbHccg ZJ]6hE^XvdURiiliiWRqc#JhR}K' );
define( 'LOGGED_IN_KEY',    'X1NW<-#$UJ+WScD~2}H/<d_]u|J#5MLEz.zCZpr{}19a_[GE;0`?lm^Zw82z.NTB' );
define( 'NONCE_KEY',        'riwX@$np ~4C:.@!xZ2RF#D9zSe5#+:$.mEblQ>%f)-zC`%?d^Q9Q#*-}4=NKN,R' );
define( 'AUTH_SALT',        '4T}A]lZ`t_I9tks]Up4wUWuX3lV~|j/!HSI0;T}9~8Mn:KV}/K9x8mUYn|ZJ);CS' );
define( 'SECURE_AUTH_SALT', 'F)4}:@$m9=!%YiBjT]0Y#ngr/u4#,X_90M#VLGmvvIfkg0?Q-5{idI<|+&n~9 iH' );
define( 'LOGGED_IN_SALT',   'Igqy?SQ}Qk5K+@jwa/r^IYJ0y>f.pjyA)g:X|/Y3FZ`J|q6HjVb[*/>-TrKdraQ1' );
define( 'NONCE_SALT',       'c^8l^|VQ(j(:: H&v 9tuOR|qAWFI^`ny/6xUINP<la}y:d2:VX>7FLaG?H)$ss@' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
