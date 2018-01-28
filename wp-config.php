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
define('DB_NAME', 'travel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '0/4y&ooTc5>+T0(.h%71L)r #>5;2]*/]a3kfHiGlTC==(QB_IkU&C GJeJf*di*');
define('SECURE_AUTH_KEY',  '{UDDPa,M!|r?9%Ed$cM&Wz|OM~$8:^OdmU Vg,PVHkoTTDgkt)B|)K4`f4Xmi}FZ');
define('LOGGED_IN_KEY',    'z<47AQi$zj0U@|6$!%IphRKH)7o8XvQ6=>E<AJ@$8T<b*zP 5_7/PMehS[x{. ?0');
define('NONCE_KEY',        'M>v5i_M1R{X8Zs06vrvel5>I4CVLL3,C(4^1F7mgjwo:yY2Jh]M{&+;sU}OrFSri');
define('AUTH_SALT',        '?siHtx02WN[<aHcrK$ W7Un` #__t.g5lgo8(z9]hZ~yFw!G~mOMtE;AP<bm;K?O');
define('SECURE_AUTH_SALT', '?}y8`)AyPmSQcd4gk~^(b.P${m_rN4a{Z-L<.:JN3C6jfT7Jqfb(Ve~6{~Q!]&P6');
define('LOGGED_IN_SALT',   'trogJxs4Q48C#SpHzL~;Apa%=C+=q&Dr$_)rY7qV:nZ#9<tPO#t+u%5UpaUr$?)?');
define('NONCE_SALT',       'Qo6ILV>DhTSj]]AU!$h,_2sDoD{1@3w^@yJQf+7a=Vp?PRDgBS3*VQStPb.Ch116');

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
define('CONCATENATE_SCRIPTS', false);
define('WP_MEMORY_LIMIT', '640M');
