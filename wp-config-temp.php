<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thewordf_startf4' );

/** MySQL database username */
define( 'DB_USER', 'thewordf_startf4' );

/** MySQL database password */
define( 'DB_PASSWORD', '3eJBT{V*04I?' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EU{B37v^,0ncr7NJU,>B>BFk@!@!RUoVcv0JNJRV|[|[Cgsk-RVNd[CGCGw-:-:1V');
define('SECURE_AUTH_KEY',  'yPT+62q5-|#Ssh9KOd#]5t~_KlapH5L_;2apt*LPa2H6L.y2bEP$2{juu.bQr37I');
define('LOGGED_IN_KEY',    'U37Brurv>Icfcgn7B7BJz$0@04YrvrvFJRNRk,}B}FJz@z@0VZsZsw4NR:1gk@k');
define('NONCE_KEY',        '_:1hlhp~DGZKOh#]D;1Lpt#t+;OhpWpx29S9Ha+_6.6Dex+m*.Taeaim6AHELP*.{');
define('AUTH_SALT',        'U7B7BJz@z!,UYgcgo8BJFNR!|}[}Gko!}0Jos|wz:NVoVow0KR8RZ-:1!58dw-w~_');
define('SECURE_AUTH_SALT', 'S_+;2Wptpt+LPWTWe;296DHx*.*.]aemimuELPLTX<{26Aqy+y*.Tbfbjm6EI3MQ');
define('LOGGED_IN_SALT',   ':p_p_#WaWat:HKHOS_#_#9atxtx*PSPTm#9H;HL+*+*2TmqmqxHLILe*26<AEuyuy');
define('NONCE_SALT',       '7Q$^z}Ycrn@7NFY,470Jr!z}Yo4Jw[!0dgws!NdKZ|81GKw[_1VZsdh-5CWGKd_#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1520020416rag_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* Custom Defines. All of this is after doing the wp-admin/install.php */
/*
define( 'WP_SITEURL', 'http://starter.thewordflirt.com' );
define( 'WP_HOME', 'http://starter.thewordflirt.com' );
*/
define('AUTOSAVE_INTERVAL', 180 ); // seconds. Default is 60 seconds. I'll do something like 3 min.

/*
Specify the Number of Post Revisions
If you want to specify a maximum number of revisions, change false to an
integer/number (e.g., 3 or 5). This keeps the database low
*/
define('WP_POST_REVISIONS', 5);

/*
To make sure all cookies are provided by our particular domain. Unless directly working
with people in Europe, not really needed.
define('COOKIE_DOMAIN', 'testwp.proappcreators.com');
*/

/*
To result in a faster administration area, all Javascript files are concatenated into one
URL. If Javascript is failing to work in your administration area, you can try disabling
this feature:
define('CONCATENATE_SCRIPTS', false);
*/

define('WP_MEMORY_LIMIT', '96M');
/*
When in the administration area, the memory can be increased or decreased from the
WP_MEMORY_LIMIT by definingWP_MAX_MEMORY_LIMIT.
define('WP_MAX_MEMORY_LIMIT', '256M');

*/

define('EMPTY_TRASH_DAYS', 20 ); // 20 days
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
