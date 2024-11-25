<?php
define( 'WP_CACHE',false); 
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
define( 'DB_NAME', 'wp_letstalkcolor' );
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
define( 'AUTH_KEY',         'h];ieB62_0(bm8@Z@4igeZk{RCA7hdH5dV@bl?1kSj9V!17Djy!.%Zh{2xayET|N' );
define( 'SECURE_AUTH_KEY',  'k<O4j&7*Fcwy)F|S*x*{VE0!,?es,:(GM%)lk6iT3W^!_@GlFD9kH,<4|H&J7&)g' );
define( 'LOGGED_IN_KEY',    'stXg$7&G1A5zq(?u[DBKQ6Vq<x/K9v$d{q(m:T-&cq0z70`J]zj)Lgm4*KC-Q]8e' );
define( 'NONCE_KEY',        'X:a),HZ7uU< nY<&sjOUh} Zjh|BR,1E0qeG@FJ@8[-&8D9#|e/%>=RX!F1V]iIE' );
define( 'AUTH_SALT',        'l2^+rB{u6;>hfot <tsaU)E~ri%}!G/Y({K,Ll>1Y!cQ6Wc:0yDxKr]vpkzEp7(]' );
define( 'SECURE_AUTH_SALT', '#id#MZxqY5**UNy91DC-4{an~-]Rz=dUF]?}ued:ZtOUc4:K}ZR985>n*WOW}N#N' );
define( 'LOGGED_IN_SALT',   '..153bJtPt0+xX-LXixl*LB`1vXr:3^nQpt=)L|6[L(L=sy~o:[BZv%=Tj0}[6SF' );
define( 'NONCE_SALT',       'Yo7gCYF-D1}pi3&s4}2wG>;?biEC!9mi&rGmb=/=iv3o{c7b=mSJGWx.3>o)Mn93' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);
define('WP_MEMORY_LIMIT', '256M');
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
// define( 'WP_DEBUG', false );

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';