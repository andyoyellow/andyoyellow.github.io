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
define('DB_NAME', 'yellowl6_wor1');

/** MySQL database username */
define('DB_USER', 'yellowl6_wor1');

/** MySQL database password */
define('DB_PASSWORD', 'RIk47PwA');

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
define('AUTH_KEY',         'aEcKoa=00Sw!1_G;_#.[#9g&,K|JTY=lj+rIyqh+8dY:vV|U<;)f_ =1mt}ifF`(');
define('SECURE_AUTH_KEY',  '}-.w#U.Szv~3_&HQ!kmCX8a6+8lr)YSbz1n=Vh.{ot;L,@QQ<o8({cQ[qg?}$N~r');
define('LOGGED_IN_KEY',    'T(1P/$wFBV|WDVUG{He|+iC%S- ag3F=IxHu7<k|;`y`&2W,~fN][jxB0lq>v,!2');
define('NONCE_KEY',        'Op$e%j r-Vd~Z!Osd_K0szf5n$T*&Mn4}jZs r;,|pKgaV`g$N31.rjE<UPf$w%]');
define('AUTH_SALT',        ' 6p7ZMpEy0%2e>.jYQ npI?*@5)hHs*|zCZ%f`$.,U M}~V5,pB.,xr4r[QEX}R[');
define('SECURE_AUTH_SALT', 'FY*54RJ6f>4~2a=c!W(fkq5NAnsLbiF<_VDSl`D^94o!zH*/[Q]z]_V3(@!lZC`B');
define('LOGGED_IN_SALT',   'TN`9A9scBm6DcB~{7MHG.M{WXP-r4o/7|KbjjTX8qR~V1My&tfAux.JYT|pu-|6F');
define('NONCE_SALT',       '*SQ^??_J-]TFHD3[fH_U+K03HYv/tPFb-m=I)6]K|AGA:iuB9:;GnbnA6*=;m Jy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vhd_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
