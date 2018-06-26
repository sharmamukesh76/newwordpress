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
define('AUTH_TOKEN', '1avsgN6XOsE5KJOd5rD4j8QFCRhlxlvUhQNHwH88sEbPrezKaz4O7NCH/mnylARvumgClx14S/FzeystyAJA2GMJ8qWemv3JkrzC2AQmDsM='); 
define ('BASE_URI', 'https://dev.txl.se/SensorAlarm/SensorAlarmBillectaHandler/');

define('DB_NAME', 'sensor');

/** MySQL database username */
define('DB_USER', 'sensor');

/** MySQL database password */
define('DB_PASSWORD', '8W[LBn99RFv');

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
define('AUTH_KEY',         '}dbeC=4pbO(X5#W&*>`q?,X#Q$}9*g2J_s,.H}fU^LR_|*s)=>:kZBG7}C{D%TX5');
define('SECURE_AUTH_KEY',  '3=m)AKIMHF|} Hp[+zm%${mkl;p}AM(wG[E4Hv|YC &2kac 5)PO)B[&WLEXD0KN');
define('LOGGED_IN_KEY',    'lqh6+GIPA!O&q8Ap/v0dbxx G$g]OYAAtyx /E_4wZ;v_{jBCTJRf{nfc5O,U]mh');
define('NONCE_KEY',        '0)rsL 01u-`zkJ.{YtSoZ0yBO30{,EN;^W.g8d*OD7x[P 2O:x[B@,>EWjN[Jwsb');
define('AUTH_SALT',        '!c n PKwZl8JS_8~wuj7f/_Qcz&cyr!4KTj*{-JL o!+B<=a8Xtyx:p9p!ucWH]}');
define('SECURE_AUTH_SALT', ';N A)69%:@l>8ITr?bwPi(tKL`*m.URFk~vYe n0ceG1LxDCb?b1-h..eMpBm7k8');
define('LOGGED_IN_SALT',   'n_yajxt|5NnN@~JE8MlV}ql|aB$_cM:oe/(doB#*qlrVYT;202U87h`k[Ro6SW3=');
define('NONCE_SALT',       'S2G2Kc8wP5i;[6pR/]SM]c5F <UGp3?l|*~S:,oAYeAGR_kLXA&8<m|WKyrDpG1^');

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
