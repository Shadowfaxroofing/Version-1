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
define('AUTH_KEY',         'w?r^GX00$K.c5Pa|@Jec@B3-fNpfLtl8KV-)[N&C:}XaT+g| Rrgb)&Cmq^&`p}3');
define('SECURE_AUTH_KEY',  '_O-T6Eyl;^LA!iQ2AqWM0{?YY72r~U-4>rP a9GE_Pc)Jo@^5^:jn<{w>81I~K`G');
define('LOGGED_IN_KEY',    '+zI{<1d^{fT_UA>Xv4B2V-~][q<a0^AK^I.Wlh-y9B:mw=!IoJUpRmkx--.6zfHh');
define('NONCE_KEY',        '=Y$sL/2eC^1]RPR$iF(-jtn-Tt8F8wnbBr#rExw>V]XHafl*`lwJ)kk%s,1h}bm+');
define('AUTH_SALT',        'P+Vm(?vLMlx>9LmCn@^_R9`4K=?yp9#8Bz]~-Gm;JoWUHS&(V8/%}g0v{x{y!;fw');
define('SECURE_AUTH_SALT', '>Pao_Q!r7)~eIKkxGx1|WJ5trLzNg+;iQ/s]zNudBjh??p{?>,9tk6;U6%d-Q-Ca');
define('LOGGED_IN_SALT',   '4/ZUjqkB3`{TXtpa+E-Y4i/UsGBmoS_LD-+2uP`fK-9(<[U,F@lu&#oFFy`+f|[@');
define('NONCE_SALT',       'Sh$q]1{r:+lN;b;wX`YIO6#hhZ+2?K^zM-&~,.Lv[7SzLE)-q@eM}7~WD4926[jb');

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

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