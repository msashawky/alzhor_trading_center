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
define('DB_NAME', 'db97hcfig6h58g');

/** MySQL database username */
define('DB_USER', 'qkylhueovbvxth');

/** MySQL database password */
define('DB_PASSWORD', 'x1eZ3Sc591TLvaVFBxEZ8UBZGE');

/** MySQL hostname */
define('DB_HOST', 'ec2-54-225-195-254.compute-1.amazonaws.com');

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
define('AUTH_KEY',         '?pTH5qEbJH>If.?=c`Q2(XDa/O7YN&H*`ei_Ush~Q=z6^DaeFnUHK4(!r<Tw*4.#');
define('SECURE_AUTH_KEY',  '[T#y.`L}fu_J#tf7_uC=3!HZ!/*a#6aQsNMY^Z3+0>:SKDSq[a/7XjR dr]P_qJw');
define('LOGGED_IN_KEY',    '_4 y,%t_`;x%egk^sv+?%V!H3w|/q4|x4y9ipfSD6yW,WDmtWQN8c)N$ZwB[WQP$');
define('NONCE_KEY',        'RG|Ud:  %UFBDP@HO@W9fId4/NqLmO@h.<}dl26Ty!dTfjg c/K}<i6-i&eXDsUz');
define('AUTH_SALT',        'y!Mxcei:2i;S&9z2R3-IDqoK7`<-;7|,KhG?jXz6vF>wrZY*`l/QUGO(mp{uYGF#');
define('SECURE_AUTH_SALT', 'x]L^g).%O-/<E$?Z9/l5pS77+_)F+WQ5S234MA0KUWze,XxrRos7$$M32v2XCQr[');
define('LOGGED_IN_SALT',   '&9N#P-<APpk&n;Rox@M:fjgL|R?aB_(AyuNI`k9i>IhZ_buFY?I|vK:^aKCRT3/M');
define('NONCE_SALT',       'Tq ,F<cUu4Swd#Hbw-CakC?(~ES;pl6pE2a}0_S.TqU>OooxNm%*]BYa;m3H-ES^');

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
