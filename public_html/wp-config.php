<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('DB_NAME', 'comforth_db');

/** MySQL database username */
define('DB_USER', 'comforth_user');

/** MySQL database password */
define('DB_PASSWORD', 'adkgk3gk3avkaKAF');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'IoTei)TrxkOP@B^]s?>$qWd&,~`ME#J/I+&I<n3S9vjH@>f4}AKYP-1,Bi|FA*hr');
define('SECURE_AUTH_KEY',  '`oJtSI^C|4-`0DY,_`_tvEzVkCXK|y+6g8oip9=%~pUk4E?yI!XX}]F.L[CCX4M]');
define('LOGGED_IN_KEY',    '#oW_eN-y2!3FUHy[z1.88agI`Jw7mEJbl[j?4VjMN%wP9!v]g =gZCvR8:kprbA,');
define('NONCE_KEY',        '{EmO@dwn?n(6hbJONbtfo]D0gwnv *6i:g]|>ul85evsJ!x_Brh2=QZhv!b. `[L');
define('AUTH_SALT',        '+Z$._jfbtC2?n/;yt>Tsfqv!v7 &:Fewq$.a:-iq499?q;9AtNdHt89(ZfX(r-4I');
define('SECURE_AUTH_SALT', 'agT[s5O0P~U@q6?A1.4Yam/+2.5)JN h-ncm%v2dFSS6XI%U%B0FZE.UeL(#OoQe');
define('LOGGED_IN_SALT',   '5D(g?)}9H!fV{T>|6Jc!X 7 QM+/<8}V|V$zhBI0AE!D;ac=*>wH`8RA6Sr>JWS>');
define('NONCE_SALT',       'FR{.zM{D8p]%2^M>9Zl/3 %O%cv7c(_W7I{6+4jM4G;~~Lbvf|R)D8~OoQFJZiFq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_DEBUG_LOG', false );
// define( 'WP_AUTO_UPDATE_CORE', true );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_HOME','https://www.comforthealth.co.uk');
define('WP_SITEURL','https://www.comforthealth.co.uk');
