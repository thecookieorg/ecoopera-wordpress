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
define('DB_NAME', 'ecowp');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'r+;}qRaFCuEy.KELZG2L*-_jhCk=0}yt_()rUw(XT.TP_,3s;@|}EPes6Cwtr+vk');
define('SECURE_AUTH_KEY',  'r,5^}/)#O_Foi$DhN>YOI:43=L_=j28e{x_^y36UM}HpBSpRaoj,LppEw9+0OCWh');
define('LOGGED_IN_KEY',    '#6H|j!f;E1sbxc)ByQ#t*_NeX*&0.KXhlLy8A|{2Tt1?P%vrPLx] 9t+Z[(!*CN+');
define('NONCE_KEY',        'I-JMO-w?q07N|9)DNg7UC*|QIRo>}|V9+WZQ-^ f>0~ ]LoI/0-Z3#!.D(,FxR~h');
define('AUTH_SALT',        ';TN6bcDP,]RFecmNo^@F4;Z-]$R)(m{2&@6`GP|$qC^7?+K3^St?/TR!Ip=dltOE');
define('SECURE_AUTH_SALT', 'yS]cWfc6n$-!2b]ac_2P{Vx]}@O-AFOg4x:oLoJm-z9YaTWk?bj|4*%#Oq@(F8[j');
define('LOGGED_IN_SALT',   '&0P=@m:4:U8XMR$zMAJVie=2J$>YZ,Szsf,c<kD&3T(v~ w^FLri>-_>^K-unE!a');
define('NONCE_SALT',       'julz.Fi&6}3NF!:+Z+b%5_Vt,%gkGo~h+5Y!<7 ;/m1hK|X,OQ)e+%*W @|06E_>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to Canadian English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * en_CA.mo to wp-content/languages and set WPLANG to 'en_CA' to enable Canadian
 * English language support.
 */
define('WPLANG', 'en_CA');

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
