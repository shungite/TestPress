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
define('DB_NAME', 'testpress_db');

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
define('AUTH_KEY',         '<<<HwI9Wqq]s*k<?ZC*<3]H4wpAI8]A#65H>VMoP%q#ayj7UJJMkjixCK3t8^N?K');
define('SECURE_AUTH_KEY',  'jNn?hd,x)V4lG8y>{2LL-q)P,Mq-$N$7lRF$k*$#&5C{k@.4N|1VqO#`aiaA79:`');
define('LOGGED_IN_KEY',    '^%C{Ca8obL$~8(!VQ^mn(E&@Br:^NroZR2 (EvDd.C{+Jd>@w33n0{V$QI>E5Hny');
define('NONCE_KEY',        '7xC}FS,Q0`<J!lgd|<B%ISgt2)Y2b0n>fN$?GUx2@,-=x/[FV>kzq!t2J:W;QQhe');
define('AUTH_SALT',        'iBQ+u0eachBgqLOQTSIa@7Qk@NVNTb$X;}#<?{NegQlm^I?4I@`py%8*|fz(J=NQ');
define('SECURE_AUTH_SALT', '@;3^MhGKXd%8qQFpU6$qd~4w/bGLDSLYZ-dyU-QYFU2@8.oOKvn|&`f@veN;J>M9');
define('LOGGED_IN_SALT',   '-bh+e$jK[FV]xU>;fR.+Tz:q13Kqoc$ul#C8os%=WH|/p;zpODkAIOYAkP(q,,H~');
define('NONCE_SALT',       '|WE+V#90SN}b4Z!!$`x8&8rfGGisH,V=tP%!f*4wfn95C.>qAhHK@1t6$+% DIee');

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
