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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u252007958_sZdaN' );

/** Database username */
define( 'DB_USER', 'u252007958_VAu4e' );

/** Database password */
define( 'DB_PASSWORD', '3Ijqr1oVdd' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'M];wwq3dGe;iMzt>_[U%8fNE7=<f5+m{IGBKpp}7Zfyd X/LJ7Cado>[{q_*<T}#' );
define( 'SECURE_AUTH_KEY',   '=Cc=)ik*5L7`2L+9wEUwDLSItvBRVYpor<]cAoH&pB8tCf/`#&(;9}91+UC_uGM9' );
define( 'LOGGED_IN_KEY',     'qd`|2EqyG$,TO*fG{PQ$b)4r`k;Txf<0`E{-q6#N{H8LnwSwSY:|f2d8>g^iyyrJ' );
define( 'NONCE_KEY',         'Tq,5KQ,*-|D>M=3.#gJfe[s&|Pr{B1I1faj)`:XE_<Xm[/:Xa<Mad3+P&;p#~#.b' );
define( 'AUTH_SALT',         '/`kgQtgcZTT`y/Wl%axMzm^vVw!zk+BGU4l^-O,f}1fEm}P~c$@aR3j[,XqgfV{n' );
define( 'SECURE_AUTH_SALT',  '|L!IlN+FP8d<xz3l9`]M.)[YfdXu6cR&sAICl5EBY#*~Y?U:=^Dr4Ys,w~5/:5Xr' );
define( 'LOGGED_IN_SALT',    'd1H,<Xvk?Y91@3J(rm<yf-haZZE#2 j2pqW]H86>6KBrMqUDk|k`.rJ=]X0E;2,P' );
define( 'NONCE_SALT',        'Pi|b*og^:c(T!Vz6mswM!Ipn$4;#5o$]]AaxZX2Kk[{U65*an!O~(^4NdA4&&71*' );
define( 'WP_CACHE_KEY_SALT', '$sB,scJ+j*A|%<c9&d7In/Hd)@o`fnh6e l>`)pHZn]|kSY$E?*7EvocZzNaq$.p' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
