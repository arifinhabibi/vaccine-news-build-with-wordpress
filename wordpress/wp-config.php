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
define( 'DB_NAME', 'wp_lksjabar2022' );

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
define( 'AUTH_KEY',         'ALtLc`s<R&S*WKU6@vL.8/s8JK.k j nX:ET+a8pwpcZ~2MlhB?D]*A)`C4hrd$b' );
define( 'SECURE_AUTH_KEY',  'Tl`=[!#+Qk5MLF[nSgN`5q5&5kF;pJ~e=&[_Hz(]x7rB/1OE;j__n5X>&gg- D,:' );
define( 'LOGGED_IN_KEY',    '[%(N3F!_9!c4O(9>5@j^WquCGBFIoPyV5WQH{<0wQ~@3@f;blv-WWY#3T7RWU?|&' );
define( 'NONCE_KEY',        'y7;Mm:kmI7N&p6eQfL<<u68S2BR3]PCS,P+(2wXnk:NZ-yE^Vf(3$&Ow/h-7v`tG' );
define( 'AUTH_SALT',        '{.$-v>!k*- R (9i^6Cs23Qio}Wp0Ob<=,z5o4&^17a;A89HOnu_*_h;CBmW8Rm[' );
define( 'SECURE_AUTH_SALT', '~ZWE#o 5 &S(lOpu:oe/}?=(ktMAXz[:^AC_{u8$Ec4Ev3h]OO[<u}2ktIUS}k!g' );
define( 'LOGGED_IN_SALT',   'V`-vP=,Uui.J@a:m7GYNeRsbJD@EXn~nI#ObJYnv*t8{=U?u0|{w${z`}v_Zo#s=' );
define( 'NONCE_SALT',       '0o54v4UI4rgEri|6,_DRL9C:#Z$1B#)6KG/lH*1B|)Cb{$9(TCz}XI[yH$zghT5}' );

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
