<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'sql12340887' );

/** MySQL database username */
define( 'DB_USER', 'sql12340887' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ftxg6ulEgK' );

/** MySQL hostname */
define( 'DB_HOST', 'sql12.freesqldatabase.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1VS)tu+OhOJ]c$%d+FCk$81]y#?+Y&p3;P_C/|gKES/[>4n(+DP+SG@9KK*Or9s{' );
define( 'SECURE_AUTH_KEY',  'sD^>5%QB[0R&,N$p;3>8GcDC*^3uxgRU(Cuct q@T)vyGe_B*mUP@SCi*SU]onR#' );
define( 'LOGGED_IN_KEY',    '=`0gs<*/@z6YINKOP8P2kX$2W_m &=-%E#vV`s;vY8uC3Zm=7aHF]5Nk&!TOegGO' );
define( 'NONCE_KEY',        'MoEmKWl}O`;pKX8:7L)B2jrG^giTh)k?vAb0kJOK?hJT/LK6Aa9~PQW4=ZDzt9ey' );
define( 'AUTH_SALT',        'jTUE-/Q>tlfil<Mc6)~:qh&^;hj/~4|;@9R#:.|K2R&<J+4Xk2R`*,Edg`5E%g4X' );
define( 'SECURE_AUTH_SALT', '^`K(I+>efZ22J([49I<i-NxduiDWS(#$1Baq]Q@QRfGQ: 1ylPKLi[PDcqwfe-#5' );
define( 'LOGGED_IN_SALT',   '9+**^`vPJhA1u8A: _F#No2ALEto*>@dtz>(]/7)[JZbL[LRu&Ra$4W)6L3S/YR ' );
define( 'NONCE_SALT',       '?z$d|6)l S=*ZusJJI#Cn/ucQN;.KZx-7P(-r<p,2^hv-1{J!cb,#fQQv8[+s?X3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
