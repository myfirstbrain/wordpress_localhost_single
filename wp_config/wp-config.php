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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'wppass' );

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
define( 'AUTH_KEY',         'Ufx?t~*a- 8V^97<<)^SM?P?X>TpLF33QxTDxEG&3y#9h!.R[Q1V?w -S-$|29jc' );
define( 'SECURE_AUTH_KEY',  'DAMepNXf36uV|9}2Eb/8^SfX[8!*Pg^=4,VK7)_!Gy{,&I|5icQu#Mh2F(vLuhKF' );
define( 'LOGGED_IN_KEY',    'apX@Vc}}qy.BuWPaY5--KXzAj~47UhUwDNL]DMI%0t4qZG41YLjL9+OpE|Y/Q?6|' );
define( 'NONCE_KEY',        'X |.PwyE#G _mDhpEi=jrLy(bI^PTVX4(2h,mdHCtdP[l$6.6^]5%34aXz30}r({' );
define( 'AUTH_SALT',        'yVN|dD_:o2JEK3||%N~:BE/kx9U>*rJ(+%W*smz>1xzRqm5$/~HFHtNn2y1V+xZ>' );
define( 'SECURE_AUTH_SALT', '?Z@)7?z&n6j-?I_hYra?A?Y#]J?<!eB3^ds:_63)Z9Bw-EPD*b1 d$c=b!Z4$q-*' );
define( 'LOGGED_IN_SALT',   'a!F.rE(qR!ssxTue&bjLd}4QG:NKgdV-<b#%-tGB*0{aXW[C+]`fixo<5X~t!li7' );
define( 'NONCE_SALT',       '(=ZP{Etfkh4y([7vB<hO%5:o{3Js-!vy!6RmI AHc veL94n[%RJn2D.:]|lCMW9' );

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

define('WP_MEMORY_LIMIT', '256M');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


