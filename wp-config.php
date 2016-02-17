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
define('DB_NAME', 'wp_theme_onepage');

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
define('AUTH_KEY',         '(}74{c8-d8Ad8(vnE65|f(*J;> nI--,y#up_/^:+FS4M:|mi!5YkSc{wG&GXe{D');
define('SECURE_AUTH_KEY',  '61dm-}K?Jf]f<Mk~:r7Kc80/rz2kv2,oBmj&sslDXzmM;nH+5.g7I.=*yz7s!{#P');
define('LOGGED_IN_KEY',    'r_b|g`E11#y}k.QbNS;+[[VWyR%%/ai|>>7+Uq,1!EP#O|9?wa0DNambRV1C~M{%');
define('NONCE_KEY',        'MvH/sFV9ym$_sIB=;j]m$y`U_%$]Y[@Eqxgbt&/l$^NsH!><JdWd%N8Uk(CEaz5G');
define('AUTH_SALT',        'h;owoacQ6R52Z0*l[^JrV6O9{2BH:s^K^p5@/|w|U@w88~H<mtKhpRcpZVPpdN^:');
define('SECURE_AUTH_SALT', '7RF<|Y.rp,=_QEJ)RWh6|8%@O9tC*[ 7>0qf=5WY#<-{2uKqazrouXKH2y}^4+L&');
define('LOGGED_IN_SALT',   'rH138b:F+t)=,E|T|pMNeZ,dCxZQm@FG[cUZ@{f^w3R7P3(TEX<9W<KlYaeuK#dc');
define('NONCE_SALT',       '>@]U:G+sA><(sv.9`9zt.J$[jmlikIl$X(1IdSj&S3@l*CsQi|u)Vn]|jUL},Y{Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_onepage_';

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
define('WP_ENV', 'development');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
