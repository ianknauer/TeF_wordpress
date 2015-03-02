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
define('DB_NAME', 'dsfwptest');

/** MySQL database username */
define('DB_USER', 'iknauer');

/** MySQL database password */
define('DB_PASSWORD', 'Maddy0425');

/** MySQL hostname */
define('DB_HOST', 'mysql.ianknauer.net');

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
define('AUTH_KEY',         '6M=P_r|uqc3Gw]hMlCn:N Yx@?*IG/-j<JOlw_.#jzb!?G#JabgmH}#r}JAdqMY|');
define('SECURE_AUTH_KEY',  '%AQTh3-%|L>(_O=E7D[+1;|`b)jiK9UB[8f]/LLvf[.N+H]M|Pc8+W$@p~~~>20Z');
define('LOGGED_IN_KEY',    'LV6c/Sr^m?8/0+,-&p!]-fn?2@6g+m4)JI?RIbu+Cu?qQ-B|1@E9f@Ah*N|Zs?T@');
define('NONCE_KEY',        '$wp1X+7xkV57YEaWpjwkJ?xKGCo`>2 r`j2a]Z L!W6C`N|j41-=6[aTwh}nH/hF');
define('AUTH_SALT',        'g:-qw@4b%Of+l4:0/#|`wy9|A`,h!$7|n7)Wbk4$O&3>]WV6aUkkP_wR-7bh+j1c');
define('SECURE_AUTH_SALT', 'afKdbq&+{(fuSIPwC`mlAeSF-54<*Bz05|}N-77p(M+!le?dFI=3Bo*),3*T>Nli');
define('LOGGED_IN_SALT',   'I$FdE&a|3cFQo41%+KCAX8nm} g{x&9s6-3:ZT;lh7k+Ex`i+L;YX/slmRdgKNJn');
define('NONCE_SALT',       '#I?EA4b:#EsB{*OMg@elJzR`:N|wtanp}yC8H`?Qjz@*7d$K=/1a1$P=8oc5Cq^g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
