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
define('DB_NAME', 'startwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%aJbdd*zv3TwIQxj]:xpAkikaL;Lnak!sJIKYwP0fPkfWO4Erbax*Xn|n2sc6PN>');
define('SECURE_AUTH_KEY',  'mb;p[Ib9wVm;[I%RuoLUy|`G.uE?weL+33@l1=MJ-.PzGGK+~%68 z3<j4%L+$iK');
define('LOGGED_IN_KEY',    '0-AWCf=!X.#Ube0 .^-Id$Ah-I^du*c`A>zr9po6RMO)Kf|{OZ<Br<.j+mbYIlBw');
define('NONCE_KEY',        '2y]?(PqcWf_xIH;e~GU-BUmHPY-xALTGOKe$DVfB-$ d+|NG|QkP-)C~*e~#O^p%');
define('AUTH_SALT',        '3;/(k6Y;%F(=2(?`9qyn|k?fvgJ(coG&lYI+oq-PrTExmzd;WOGq>XJDWO^oQKU7');
define('SECURE_AUTH_SALT', ',nc@vpPWmw8)Jy;bl{*i/%S9A-qBCnB@#W<jg>VS-3Z028-~~;i)<-GL*T@_jsHL');
define('LOGGED_IN_SALT',   '1%Hj=v~s1ww_YS7cE05wv>?o@GY@o!N-lT8MzP6Nb+AbX8e&L.W1m3SH{2+fb8$}');
define('NONCE_SALT',       'vY5%dVoUPiW1P[U^#+`Z?_&E?ro+7{-!Hcr?39um(pPk4H{) ?8Qd(Cs@^M,6~xx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_demo';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
