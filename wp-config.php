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
define('DB_NAME', 'udemy');

/** MySQL database username */
define('DB_USER', 'udemy');

/** MySQL database password */
define('DB_PASSWORD', 'udemy');

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
define('AUTH_KEY',         '?:LNv&J}R<@%D8}OuG@-vg[Oj2$kUGKe+!2msBk4L5I<x2,Mj^gv-U1=U2w--C@P');
define('SECURE_AUTH_KEY',  'esjam9!XH#-cw1g2w5V4.+<megv$5#Cxd#b0N+U*+NL^B)D|K|7gV^B39kjd|-CJ');
define('LOGGED_IN_KEY',    'V&LS5dh[Z- N~Ct51HtY9W1 <0=D3,q+P<^bNEQ,/Omvc<yHz|X[GPpScHYf|Of]');
define('NONCE_KEY',        'b(7kEC6gd-A+J~`I`Aazh04N)ob=]+VfCk]{saaW;ebf,-Ijm)9<JHA?mdO]Em`s');
define('AUTH_SALT',        '&VuO&tW sIE[iff0L3< .wR[Q!Vx-8|T<Syx<6|=>C;]sU2hYUdssKCW5#pN&N}8');
define('SECURE_AUTH_SALT', '1-A2r%]6]z_B^x YX3m|+l1*PTQ<jVM=>^f{F aPzi^yCbS+R;+|d]L5wah9hj>c');
define('LOGGED_IN_SALT',   's8Bc:X+iIv.+t:X?a&gi>O57Qjyt :z|aMq coATriNE+`+^D$tV8R?}ig]c/lNf');
define('NONCE_SALT',       '%wxU${$p_/UL:_V5V5Id&[&T*E( ],T!-e/t%9q#^D.[2ch&n|F(p>&H{+z{oTI<');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
