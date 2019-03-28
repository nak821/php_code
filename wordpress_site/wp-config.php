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
define('DB_NAME', 'wordpress_site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '>kiBe}Qm[S9<n=G+|U0}?G?Ccb6NHa^.aBrHCtxlsNI-w)Ljgph;B^Q5;2<~hmvC');
define('SECURE_AUTH_KEY',  'U.~&snJ]hrKs!7mbORryW1w t sI%<G-)C}`+>fVCVZD?@6b//@G?F]u*|RaQ7),');
define('LOGGED_IN_KEY',    'j[xd,al3c+Fp`+=L5AF[flV@t.Zio;$Id9p$1{4w1q{p,5~t:zQEW[`Od2}()uT5');
define('NONCE_KEY',        'RF3Fbl:JLLVmRXFwAq$Y)ks1y*c!I_p6Y6kj,cQ^Pwa}rVuAm#gC`Tr8s`-d13.q');
define('AUTH_SALT',        '7y!!?9O<G7G$sVAc27Uo!r1h6T,7QnQuWm4;w}w3yM<E&aMJR|j$p$jDN>&I<b#3');
define('SECURE_AUTH_SALT', 'iM=;t4|<V.+vj7kCZRx$!osH,:^G.S7&O#ijz(bXNhXW YVv6hZh7!Aj^#u1ohX{');
define('LOGGED_IN_SALT',   'W:sTDLU_(Ba&+a5BBg`ox&cOy`*WCn,kKJ/bCTA>sxzQskqq*n=`x_;wfkn*cM&G');
define('NONCE_SALT',       'nOgVSju)`nLpBkixY3s%w^4gLnxH-=&25o,p!rgAYa%_?1A@a.?.ny79jH%xJDx)');

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
