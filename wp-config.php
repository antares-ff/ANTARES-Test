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
define('DB_NAME', 'wptest');

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
define('AUTH_KEY',         'cP(Z~V8xl5+a,y+`iXvd~<~Ii_E-Y+5K>_ <|c816m/_O=F.foM]heITH)%t*r--');
define('SECURE_AUTH_KEY',  'Ve4J|.<~Ey!;(<>Ynk5O(+D!-0j/z-*rQn-l2q,W0szSV)eV.Lt7Nz{&-v4a[D=D');
define('LOGGED_IN_KEY',    '#!}b9z3OA(akE[<BOyj(PkQo-p@7_bhy-)vjgm-HO{%+]IY,+u~Y]?&5*c{{1bcX');
define('NONCE_KEY',        '-l|K=>g${+tC-3WIws9!69x$6jbufOv>XzZrb(PW^15009=aBja3D^_vX$!QK[ik');
define('AUTH_SALT',        'Y$!h7^9/wMO8@;Qap[3@^#{7x|k0Ru;rN1smfZ_L6qSElXqjfw+}2x] &@*C&E$1');
define('SECURE_AUTH_SALT', ';(xHS,3Hih%,3>-;!>(crMI~6aS-0h_:5:P{s7bs?_UO:nNX.!p?EU^PiAK 2^`u');
define('LOGGED_IN_SALT',   ':0Z9m2ynEPmF+)k8(.9|pzsFl+-k g S7VfLW[5Z/xM~il&8)OqB:`X5u-}z]K9l');
define('NONCE_SALT',       'BR2aPi&X2]2oXQY6Z:dqSh,_ie>d0lp>32h2j=T`:wD&b-qX)&x0%<QE|{`Y#tva');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
