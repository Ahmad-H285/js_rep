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
define('DB_NAME', 'plugins');

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
define('AUTH_KEY',         '>FN4z_ZRMlbb%crBeCn7c^_WlIz7W6:#.k|R)-< dvptBAtryDMEB*+_P9i5.hc}');
define('SECURE_AUTH_KEY',  '%7eH90[M<hQ3ur?xatP0d^RindKkFA+4TdY%kq-{*a>u/ARF$q@a:[:1yuf-XN)]');
define('LOGGED_IN_KEY',    'Pu?.|B{]G`d:Y0|u ik-Hs2Hy~33u$Gy3hHKoazk5rsN-l.[#KM,-g:YIgYdrsI3');
define('NONCE_KEY',        'HrS<:6fn>?Efq^m[25(kHIJ34_`TI.qwBa]33(OMW#E,vteQ{j[,7_.Q.51^6^fh');
define('AUTH_SALT',        '-?r_]7++!vnPfc@D~T*+)2BSq@cqb4t/X95jWx/x*nZP(s3eK--^-<5$r7[>yuuw');
define('SECURE_AUTH_SALT', '+:;RNJqpm]nq-]X!e`Q!d)pf 0p-j-(W+$f{XNB.Hg,_]YnX4S:H}6x|m-}/XyZJ');
define('LOGGED_IN_SALT',   'DWeIfOrcS?b=Nf}o~Bre-GH;g{Vtmc[nz%*g;+|@pHwZ|fFasljC>I9_0$U15kU}');
define('NONCE_SALT',       'L]l6!-8||91vR_0b{ris<ML:j|* F4X?7@,mmHDd[%gvmy%> ^:5G2EYZ&?t4!{J');

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
