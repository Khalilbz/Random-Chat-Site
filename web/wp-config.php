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
define('DB_NAME', '1170754_9cae');

/** MySQL database username */
define('DB_USER', '1170754_9cae');

/** MySQL database password */
define('DB_PASSWORD', 'b1b8c2');

/** MySQL hostname */
define('DB_HOST', 'fdb3.runhosting.com');

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
define('AUTH_KEY',         'XL`2eVT=v1|=TY+^#u><5wB7$D-5PD+uT`;8*;ESu(O`$giey,x)o}%*_V^kLB+#');
define('SECURE_AUTH_KEY',  ',SUYKW*g #[ J2.AvuHGkBm:L(a44!@Njx=/nE7sT7Gg#tWP u#NaQk,/%)p?W %');
define('LOGGED_IN_KEY',    '9</A@]7Ss&{8dqX;>S(LY~k=<!(JzQ^SPtI]39!-r></;av9|(}2u*qR-a|KZ+/`');
define('NONCE_KEY',        '#-p^q8ffpK!*>B{*S?OehK FuQT8*J@M(aHqyyryw#[jE^&MV#kGeu2pa8|Jk-`x');
define('AUTH_SALT',        'm$0+A c7X>aHz0;5-AcF}QC-C,2!5Pg*+W.hb;.7{/T62I`6DW;U]:qX}=z=0(q@');
define('SECURE_AUTH_SALT', '>JEY()[[JBzrAvD|4>p-qSE:3E,<,+~):u|#}Mi%T<sGk77V  V(w*D+W>=7:G{5');
define('LOGGED_IN_SALT',   'W:2_M:pluF%GLL`6.g4+c21&]X])&#mrqldd_A-mF@>1uNH9Um/Vb}i|g}D|_#I ');
define('NONCE_SALT',       'htZM=m9qQnPL|(+t|P:f/_nYC}(j&bLtL,$&9`!0hR[BCHHwec~H^>UfXO.-m.R&');

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
