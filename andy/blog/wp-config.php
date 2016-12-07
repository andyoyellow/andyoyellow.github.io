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
define('DB_NAME', 'yellowl6_wo4087');

/** MySQL database username */
define('DB_USER', 'yellowl6_wo4087');

/** MySQL database password */
define('DB_PASSWORD', '23P5h14YxwmG');

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
define('AUTH_KEY', 'lsw&[r-THuf-<Mb-<W+Cv$g>&@h!AUyZmuGAd_<]a+-KWYa+$l-=zKMB-]}YY%dm;/jib-eewrAvczb=BIpKcp;h&o^R+fRXTSzfM%DgzASfLc+TsZPsgOuW{&vkqNm>');
define('SECURE_AUTH_KEY', 'R+{fhapMuRyS(qpI(E{@NtoLi(zGv_*-VR[fDy+)A*S{qptuMBzkIb$UW/wTDndLAP<jGJpPtr?IwuTr}C}B_%UxY+{b)mqS^@yM-E=Gta+c}&}*Q_[(i%>DJD*Oe}hg');
define('LOGGED_IN_KEY', 'Bt}gBqD}E}sBX&{X!L}USn/J(FR}!qt}Mx!$Pxw>lU$m}_K_p$!j+;Y&Mx{J@LYF+cNaud<|*;TZwpe+(ms_{-&OD<Lq|<[mFb_;|i/Nb$qcyDHe]c_fibw(mKVOK;A^');
define('NONCE_KEY', '_uyecQ|xPR=$crxnQeC+(u&Evha<-]?%!hyl;QrkJ[MHcu;hmBKKjT=olbvmJ?FM|Fp-[LICN%A%&i[LdcI$Faxy}CZxtaY_v%+j*wZmnq-DbPF!Hv??>QbCRY<Y+YsU');
define('AUTH_SALT', 'Z^]{MQo^qx;L?}W_euO)OjHKbqJ<V_zZV&syZrV)aV[m-dHlLU+rgq*k/T*Uu%%l^t!j@m?vY;M-yjeCsn(KAApBHjTdrEc(InNSN@{DdkwY|F>wNsd(S<;hD|WrIL<B');
define('SECURE_AUTH_SALT', ')Vafq!L;FA<(D[SL)B|nU!mDfCS}|ez;t%Z;!&U(?k%{(o(KrL)<vL)UBv@OZyJ/LmHyoGVfvlrKiv(|Q/lnJaOHd^*mn$YpX/oQfSx<ZOv!jknHIK&O&RsAeiRgbG&%');
define('LOGGED_IN_SALT', 'tWDPJMILhsoHyTKt@^mQbB|HEGxl$qveqfAabzDZE+QbIh>e?^(/Lr+aCIQ?P+HwJUpO*-QAi+xSGd^gyQBbBQY;D<dWOLaFisA)fdw($;gMBthzv!k!GWZ-fvUiqnIc');
define('NONCE_SALT', '}rz;*Si<Cxs^>)Oo-c;!NCS}u%^csApj|eLP^hL[XdipV+<ka^G|*qxG!?Y-|$&@OVWGzwLOQG?K^zxV=vhDW[I*IMNHr<])%gZz;P@]Gy|A?ZD>|>G>MA^LWQ|Jl[C|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cijr_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
