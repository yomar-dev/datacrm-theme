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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'datacrm_theme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '$ )UoY-]lIil *H[5I& ~Y$<p7Z*dP})d17=ywD}Y}9d)8eK-?;56!.{nSqT,F7V');
define('SECURE_AUTH_KEY',  '09ie&~mm`}hQ*V^ZRWea0Bk-)KXhtS!P,Z6L5onsY)xP]zoe*0Hd2M<~WYJ_QX7I');
define('LOGGED_IN_KEY',    'aljR{3 Qoh5%)l}EXq#s{5^v>Om?Ch*yF6Z(~ R7/fci][~;=b`cq?YoDnZ`f>5%');
define('NONCE_KEY',        'D`8O(G5X4wlMe}gc/6=dXZ1bAd;9cZR)C*4dYBI}gsk RmWWqRU)p@`kUk|YwMcY');
define('AUTH_SALT',        'o(.l(YX-c(0UXw}:s4dOCIF9Ibe!KQM2>4QQeO9>}ra)$H9VL7S8_pRa-GM;d@Uv');
define('SECURE_AUTH_SALT', 'o`I@jPk;=ZRRef!!S:YS!T}&QrXO.`[?bOL_yo+TJi/^qu>`Ct><HNPenMO{DIJ)');
define('LOGGED_IN_SALT',   'z,^**_dq9G?<lBdn6!9Ve;C@.]v$jPj.)8,6JSFqf^~obs]@0a_hPOC;)B*zSY1[');
define('NONCE_SALT',       'E<QD8+ N_-g;tJH!,B/Z{i%ic]1.DPbD!)Xd(n,cAu1 b3Q>BgPFYhl`BX.$M`Bp');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
