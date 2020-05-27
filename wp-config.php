<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 's28' );

/** MySQL database username */
define( 'DB_USER', 's28' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kSHEBiOqsgm8lRmBP5qvst2z8bdMDUiNz' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:/var/run/mysqld/mysqld.sock' );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '/f/Eo9&jtHI0:^b.u?|{I,*Ak|_q*ialRc(|)si4>sy=ZZ0`G>lGL|ZrcVjQC]Iz' );
define( 'SECURE_AUTH_KEY',   'z{ja?~4uVH?X**KLBxd6itXed}c;4o5qs1Tv>;MS7lcVkle)tzLgp`c2EEVx7$jd' );
define( 'LOGGED_IN_KEY',     'gfT!A9YIKwp-2p%C?5p ih^fU*FupWK(`.VeF&<!$ATp6P0/#MOP&SAl3bj%vG{e' );
define( 'NONCE_KEY',         'UbsRd0L8{7RcF1M(}/4u2sE^quA(&n1$.VNj%9r6#,=IH=sD]qk8&~D]N$bV,<EC' );
define( 'AUTH_SALT',         '`0@_BvhuB<pCP>S3HImIDdn?ZUgWiy;eFOW<Y*~}b^by$Uj~/eO:<}h8UX5x}?fJ' );
define( 'SECURE_AUTH_SALT',  '8`.uJZiW{^0volOy~5GZx|q4!KIMD1gn)aHpy!n;3n(C+(:,3C&rUeyl?v/ rXIk' );
define( 'LOGGED_IN_SALT',    '@x(4UYRe(eLhqDnI|uM[6]<?@8-VZ$[EL#NR,>jdH3sGBaT_#}!fr6]6voEyu1WG' );
define( 'NONCE_SALT',        ']j0)sKK1Rh[!8DmV2N9WtA$P]EbR=z~uet6gE%$fHS7+!-U@c=^0Yi!G%=3L+0xp' );
define( 'WP_CACHE_KEY_SALT', '43.&qVcM1)b$Nrd?-)$r sb~S84G?ipBtTDs/DiQpAKg)}hovl!IX~642tzVN:nb' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp9217shadofabv_';




define('WP_CACHE', true);


/* That's all, stop editing! Happy blogging. */
/** Liquid Web Managed WordPress BEGIN **/
/** Warning: Only make changes to this section if you are requested by Liquid Web Managed WordPress Support. **/
/** Changes made within the BEGIN and END blocks may be removed during future platform updates. **/

/* Turn HTTPS 'on' if HTTP_X_FORWARDED_PROTO matches 'https' */
if ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
    $_SERVER['HTTPS'] = 'on';
}

/** Set Client IP based on HTTP_X_FORWARDED_FOR if provided. **/
if ( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) && ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	$ip_list = explode( ',', $_SERVER['HTTP_X_FORWARDED_FOR'] );
	$_SERVER['REMOTE_ADDR'] = trim( $ip_list[0] );
}




/** Core auto updates **/
defined('WP_AUTO_UPDATE_CORE')   || define('WP_AUTO_UPDATE_CORE', 'minor');

/** Always use the direct method for file access **/
defined('FS_METHOD')             || define('FS_METHOD', 'direct');
/** Liquid Web Managed WordPress END **/

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
