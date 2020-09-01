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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/dh_42z8vk/disposablesummer.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'disposablesummer_com');

/** MySQL database username */
define('DB_USER', 'disposablesummer');

/** MySQL database password */
define('DB_PASSWORD', '!LGiXwLH');

/** MySQL hostname */
define('DB_HOST', 'mysql.disposablesummer.com');

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
define('AUTH_KEY',         'm6BRc7YawW5/IBf*jKYl08sPjy`(;ISr#(h5dsR&6y!WWUAj"Z3sZN#utHEMm;z^');
define('SECURE_AUTH_KEY',  'Ct9@EH#w:T+oCnP039T&+MdvN/1vk)jZrf2)g6OyxEXzGkBe_uLAk23MqQmB/v!E');
define('LOGGED_IN_KEY',    'W/~/2`d46Nm0dX9Z@jSj"al(2%+e@@5R7~Bbll@r(jR^$P!*_wIccWpqa3x9Hnec');
define('NONCE_KEY',        'XImFC?TD7g8v;$elHfVabv;"2snlnyaxseECV*oQQM7Tl:^4WDG!VAI*rDyfUL4N');
define('AUTH_SALT',        'vBEaIVJTNAv+M&7L&FfIJ1qP5Bg4AnE*#+ix0Nu^yFC!_kH7*8_I?0icv%lBshit');
define('SECURE_AUTH_SALT', 'U8io?Oc*jbS$6|E$?QelZyb2+F#j4PQS1NQ17G+4hoV~4CjvP@VyWMj:uG0TmDl?');
define('LOGGED_IN_SALT',   'wOI%Mi/K(+_i?3pL8*0yoIdo@7f*vT%oJM0*TiBo~hf!YONyrI)3bfbO0CHCE;k_');
define('NONCE_SALT',       'LyfC!!6QrDNUaEN0s9+@CETCj07*"elP0Sw2oP3HDt^2Q)LiRA^99Jfxr;AX%Ogh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_43z6hh_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

