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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'b[%G&WKmkkr)iW^Vkg5`F%!^] 3 PChqFvKK`5Fo^6`T%Y77n,t~P~wVuzlQL=h%' );
define( 'SECURE_AUTH_KEY',  '7~2[C)s]H$>(.1$=H+dzZS{WS%3Wil5j7k3f)#f=XiyhP/d@R*A&<@nWoj:D}o[K' );
define( 'LOGGED_IN_KEY',    'L #EXJ?HfeVr}*<Yd1.sFx4n}v0CfC&pR2eh7~M3/zvg1k!=d&qZH.W BC9w$myo' );
define( 'NONCE_KEY',        'V]rm= =.!0!,j3{iXBKk)T<[Gbqmuq&LhEb:E/QeThQ~gWAb@zRb$sZ=C~A1}&R6' );
define( 'AUTH_SALT',        '=6[hPQG9`.,JI#nL0a7{Xd4Whj7cV`OLbDdeSVw2GKks6?sIOy/,8l1R)rf&qub]' );
define( 'SECURE_AUTH_SALT', ',1 1BA+ P& ,s==ieshr0% OA(2$tqYM[T#Z]Q&tF:F{jes?qvf^n}g4No$izEyE' );
define( 'LOGGED_IN_SALT',   'Oj4*a}N{]rdKbd#uT)Y!QjPEcCsh+|/qCgz6(L:tiPU`5|J|%Aj76TAqb~[7jl/P' );
define( 'NONCE_SALT',       'u&3db[K|*z-d!heY~#Gzj(kiA~_!K0=>7prJ^)7xIA,fOXE`=L`</>yrZ!R3jS$2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_La_vie_des_plantes';

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
