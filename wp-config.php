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
define('DB_NAME', 'kFinalChild');

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
define('AUTH_KEY',         '-$[d< Av?;<}H+q)m[%5Q*1{<i!hTcUOalTSd5<;L]L=jUOPDgf+0eA<I?s*A6w~');
define('SECURE_AUTH_KEY',  ']a`_/RFb(FFH9_X-M7Pu3fs:]8fLbZt):^?_UA.8V+AbHo30lV)bJK-1hg4813K3');
define('LOGGED_IN_KEY',    'Ch$tg$X:U1}h_t_Xpv?`~wffX/J+Hkf.NZq+ELHsFm<aMnM*;GOVi @<7IZ<PYy{');
define('NONCE_KEY',        'd9uC}9+>}KuGgkI|F~;5E7|XE@ !4[yE~T9:[Q>Uss!xH9_ah7G*`=YmRJiB5MT+');
define('AUTH_SALT',        ' J<#tdAC=n8?5:Brxr=vbFYoQPw;;]L:?;_ojB80nQ`,Ph=TmoI=xZD:9PQ93f?J');
define('SECURE_AUTH_SALT', 'M,M.tw79i5N%;!v>`S7nizRI>^H$v.6;9)I!W#K+{41_lEG86BIRAU:?vsgix^{-');
define('LOGGED_IN_SALT',   'p?bMi89&aiMXccLi)y]XfN2xD{lA~(k;JIq!DO*YlxM^>uJ~D,3t5$; n[Ek3!R?');
define('NONCE_SALT',       'l9bhja uX5g}D1PYO6ePL[_;T//EJZwGjcj>*9];ZRJVMv:5v]f}Ki;mnRtv~.}C');

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
