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
define('DB_NAME', 'plannin5_planning_2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nguyen');

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
define('AUTH_KEY',         'h0xIN^5XldE[o!ql@<a68Oqs+[@+j_h-<-Q?`L<zIT#@G}_0@>:(6&S+MBzl,@X(');
define('SECURE_AUTH_KEY',  '3/E>& q/-ffgSxn^}hy<><!:3+u<#WxEdy2CiZZ{4gDwP6MA@>HceP4&NI[2q[Ze');
define('LOGGED_IN_KEY',    '~PD fher*iLr/yebpi#!mJ4z<C&ty,SWe5$<-*P;!:[|?h)+Rk~[*0{+u}/!%wrO');
define('NONCE_KEY',        '&$`pCrjV-DG&APgVRbM=#C!G T54wa5t,G2JpFu-,ic^o}hh6zW8i^+H;q-6(fE^');
define('AUTH_SALT',        ':,J?Wv`oN|ntf26lanTwr,|{FVm,Q]MVnKXepz3k?#U|@<9xacB@<zWiS!0T~XlU');
define('SECURE_AUTH_SALT', 'DHT4BuU&RO{36edz%|-F9}R/?!NqCfy]@m0sFl,I:~^:nc8ZtI`N+7Fjwh^1@.Cf');
define('LOGGED_IN_SALT',   'Jxh]N05~-OEBnc:u5?sa,xWa9.vL*J;gn-I/o.O.FV()Z+5Q+atxrn=|1 6~p%Em');
define('NONCE_SALT',       'D*^9B|T*v}H5>SxhOt-b]q`+~H8d3BcI4Aoc9;fa;uTJ&Mha`ob#`rl^}vk$#5~X');

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

define('FS_METHOD', 'direct');
