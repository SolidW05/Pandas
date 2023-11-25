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
define( 'DB_NAME', 'panda_smoke' );
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
define( 'AUTH_KEY',         'r`6VT MD]GBMmP~jvJ!cDpI*kxs{N(Jwczj$Usaa.ZrgJIK.=k8s4l14>]8tA26C' );
define( 'SECURE_AUTH_KEY',  'C@tf_M>zhJOz4Os{<y8&(_o)te7}~Vl]r7@:(qaw_`Em#~WS7 _Q80RY-5SwUWsu' );
define( 'LOGGED_IN_KEY',    ',8qM{Xhn5PSAie0lh.5C##z6{5U@Fq0u=NAr_j9;u#d2u1[S|M2J<o7cd7#Y}}sb' );
define( 'NONCE_KEY',        '9f7 E2@W[v?EWV4=]A%?P1m=Nre%:(t](kJ~RS;h~<j`vzHFba5K-h-Bu(Si@u_+' );
define( 'AUTH_SALT',        '/;|O -Y`_G-V.~PIq9G]l(h}(S&s`[S?JsVT_8SH#M=FgLd)/np*<8:Hh@gmp*(R' );
define( 'SECURE_AUTH_SALT', '0{!G{);jG $L>F4$2U6&9D#*pHe*y7.(=3~!joWPjLtatG:-MPlzWkd1)bDD}VnG' );
define( 'LOGGED_IN_SALT',   '+.4H]Q<]bHq1Bwh?M75fdXfwT0>}-&3%V{+4WkhPe@J*?8SSmcNQ1Tt:G<O=1[wb' );
define( 'NONCE_SALT',       '^0XsN47^MX~Te4!carjbB?$;VxK-R@gH)C)yAW}aY Kg^q5k2omn7fmpo@pJH!yb' );
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