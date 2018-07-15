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
define('DB_NAME', 'elnokhba_database');

/** MySQL database username */
define('DB_USER', 'mohammed');

/** MySQL database password */
define('DB_PASSWORD', 'mohammed');

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
define('AUTH_KEY',         '8$&e=#@n&}2@VPN`0_Y$cQN#Vpb}!1RsX{KwAg!IifiMa.zJ8KaiNt;b5S?33!1&');
define('SECURE_AUTH_KEY',  '(E+Tz.Zd6YHPHxnf&%4_Z6!R<sf6CW7@R!l8|$pX*arIcbOzAi2^F1c((p3:Ft4T');
define('LOGGED_IN_KEY',    '.Vi5<C@pK?Lgo9Ns$Wtg_n&Ld1&xUwkv`rsXFx&Cjm5awo bqvi;_couLZTZG {p');
define('NONCE_KEY',        '3S&+b~>egHL|n[nbO(R}/4w76bS9N@K:yCu!bIgq|OojZ#C1nAA9 un<Ok`U_p7*');
define('AUTH_SALT',        '$NDg=9*(CuvZ:A&]`lQUD)tOHz ZN%l2r2(IeJz:-qxdipeEWfB[`2I9E<YfvsV1');
define('SECURE_AUTH_SALT', 'qQ4Nj,O-?Z=YD7AvB}=C9YiF 22Ja30Ga/yyfs+) :rF|![ vc-Ei@9pJ82<[s)n');
define('LOGGED_IN_SALT',   ',7b,wIl2,Io,01sc/b/.vevpAT{7lZWg@O)55D /13}5KxOp*{mmN!W*Pz%cjF.w');
define('NONCE_SALT',       '/yj2(NL84(.brFe8i=Va4PItWG}y*]Q ;ON1)brdNZy0b2e7w~1LjEUE76iX.A7d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'swo_';

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
