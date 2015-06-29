<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'prvi_wp');

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
define('AUTH_KEY',         'TTItFODy.c/)93Q<z)ZdfJphS@[GQ;mNF4|zYgm2A5~;dQu-$vewWZLIf=wj#Oz(');
define('SECURE_AUTH_KEY',  '|^UjSZF|Cd!Rl${3H/i*|Y(ZHt.>6lk)WkUY^@oX7Z:NxpQV%oF*64.Avz:SRD_&');
define('LOGGED_IN_KEY',    'T:23*P!#2xwR{,6}b`7Td!u~+;U=OcgxklY^@7]}j{}.D8 Jc~.&-k>1dDsmBfUw');
define('NONCE_KEY',        '}?,j[!X_PT]wVANSm~ ~@iYlb^^w0a!K>vsvb_{1lE$u.F;7ZRm8m+UoeZVDYPmG');
define('AUTH_SALT',        '(oo+^T/M%utb#W4qbZ_C3EN=hi6k4B6(WH9h^(z7h_&cM|1.Ad.Jj-O!&4U^-lCA');
define('SECURE_AUTH_SALT', 'O9[~>!/W4:!$X(&lyd<>:p(aU*~CE.sWTT+OYn[gU`R*NIpuv,*]=--4X~lM*P~:');
define('LOGGED_IN_SALT',   'JVMy?aDghf%n~|.NhEsHe[a6[J`y~+j/Qw0<#4^xVHDjW, L{-4=!%_<uH/yAQ[$');
define('NONCE_SALT',       '-5_#i|H)H&:>*6+F;ws/@>=5WhFP$l]`ZMzm1#uqX`CmZ@F~ei:A+# jy@pkB2hr');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
