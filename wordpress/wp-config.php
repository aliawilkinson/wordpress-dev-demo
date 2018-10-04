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
define('AUTH_KEY',         'rmC6)jkV-#PWh >:S QW|X<R`aaUf0P.Jct{nw-#^vJrS6&v(t2OGEAy=]3 6OL;');
define('SECURE_AUTH_KEY',  '#E{WHHY;T*r>[ BLrUSl$KbnCSiBS>I>ZFk[tO4vO{Hb|N4.E=TL,d/d%y9P7V)[');
define('LOGGED_IN_KEY',    '*eW<cTa!2rNF< LuK0(Qx~~=O^IP`jB&p@Km,>`QlYugl^#R$tp*OjqH#Gl,t-#W');
define('NONCE_KEY',        '8acH%>`2#gt *+eqE X3MCq!(%9#?P)9TgOTi0NZN2j;Za-VikN{C(u?p_fzP21j');
define('AUTH_SALT',        'zm-b70Fn]P6-gh/c]k$M=m)(y&^=y+2;)*IW%t4M&ipt0Umsh`Y]!b)$*IXWDN]f');
define('SECURE_AUTH_SALT', 'UJH;)3i{L[62m9O[w<$&sc@kkPC,%THiMjmNa>%CJumB/PJOHf%-3|`aq#gq},(y');
define('LOGGED_IN_SALT',   'c]+Jj4!^o6h^7jJCr=le^(R8DQK__3~up3oFe0J6?:[S l$}T*B//9h!-*R@A2V$');
define('NONCE_SALT',       '{:?EkY.O3S]g2~0_*q.ANGCpsB%*{^~UTa~?Br6B0T&{IR5vbA[kA}8>xjP%]@o9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_demo_';

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
