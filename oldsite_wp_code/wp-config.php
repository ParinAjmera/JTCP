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
define('DB_NAME', 'jtcp');

/** MySQL database username */
define('DB_USER', 'jtcp');

/** MySQL database password */
define('DB_PASSWORD', 'ZvQ3HE9RdZ4KBcFR');

/** MySQL hostname */
define('DB_HOST', 'its-mysql02.its.csulb.edu:3315');

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
define('AUTH_KEY',         'sy1k{w|QF>wy?DN U~o.JfJ(U<]A&X+Jqc*:a_>C^qBq^eh7`Xo*fiMNzY5tE8RY');
define('SECURE_AUTH_KEY',  '*,3XN;@b$tZR8IOI|$>t;F9//tW_b@s!@Ecjp)l{moK#ZfTlcMbWnVeYZ^LK/x|%');
define('LOGGED_IN_KEY',    '-1$4B}V]c =hHQd(dA7$Hct)qa_,BR+n|M:=Ue|*94UmDHhcCg]kjIehJD ,RYhg');
define('NONCE_KEY',        '*Ko8iH|ttZP=`|7+Anpe.uaX{n0J<LV[8Q_ZmACJ8]IT>Dc)WdrOSXeu6X]m*EHq');
define('AUTH_SALT',        '6X|6zv7+D 6^VpC@rd3}&I76+T84:01jwq>GhGy&C]M 6Uil9)>7h|Jz&]ll19:t');
define('SECURE_AUTH_SALT', '_gU.F0Pqca[6^T=r_SGpQ7p]{-MU1[^g!,k=5!bo(sOa7x9575?@i.$[6I{Nm -a');
define('LOGGED_IN_SALT',   'PLIu5N%diug)79#wSD<OwdxvH@@9`taAPu 8RcA{9g#(!mR7KPjVs)c2xo?dmSRa');
define('NONCE_SALT',       'b}.w[;.&`>,]tQwLxIwm%%M[SWJeouxPw0G)]ww?9P!+$#~iJUvK#/fn7N6pLJ=v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jtcp_';

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
