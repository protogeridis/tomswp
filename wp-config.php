<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'toms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'R5E[+OHK$&?[iY`{Mtnktj2u=#E4-12!B!+uH%ss=O&(Ut-X@!(^qeR4t(!C|n+[');
define('SECURE_AUTH_KEY',  'ikk7m^A<|MQ+0u !w3/o3RS156?19JWpxeD-tv_GH(V&n7-5K-V?nL (H1V!|3>~');
define('LOGGED_IN_KEY',    'YJE_1Uv =pL.!vFq?#>fCm-q25E?-#,>i5xM^ 5~]kN;:oemGc`$(BkS+<p+^GG~');
define('NONCE_KEY',        'i2+(%k3ec%jp(-@ sCSCRnW+NfJK&+[;U1#g-u3oDH*K|U?!^?5WxsvnbST:z(;/');
define('AUTH_SALT',        '-UE>|a$jB PxbB}Yiz4-J%-BW ~!_+!|>x&aC}F0K/c;[T>QnN15>(EX^MiR(%5q');
define('SECURE_AUTH_SALT', 'xOkEm1jHDT5(]!PVq[puE/}ndBQf|sQ 52/Qe^xR`*{:eD24wST^F4;T:G!+o3nS');
define('LOGGED_IN_SALT',   'vcg Bh:%kI<qC.vv3s>A/+.,si~%q /+]l-ES45M+X-r b8VbgOBdOY- _es:y|Q');
define('NONCE_SALT',       'a^WK2F%/gua{9OJ$!g|Vi4`&<|_avZ|I9=XKy;?#:oR*D?-H~&,LA8hJ:FByOCoW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tm_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
