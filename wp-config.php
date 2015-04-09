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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'r?b&*g=h4c$r4j!~eguv$U2h:pBbz6bd,7N9R{0=CT1Tr;,i}ZjCIwLaz?H,:uq(');
define('SECURE_AUTH_KEY',  ']/7q+#rxQhiQrbBwSf/b (-zg]S_J;!t)#d#Xi|>n ob<puC--B@-]f?LzN}Y]-z');
define('LOGGED_IN_KEY',    ']&I)q$fbk%E//iCyfh$S0_|5_J`(Qgj;gK%&E&^Yo,>`eFTO.1lBBU)zX kQF|q|');
define('NONCE_KEY',        'b$k,X_#*%`IEc>!60q=t#+-D^nRrc@Ez#jd.D{8YpX~2`BN`XJ$L+p|W^>Z^q9E8');
define('AUTH_SALT',        '02}7o|{M}A6sMBu;mS+,F=z5b>,gc(9^o2`35He|a-}%%g$8.Q;340-{cA5V+*9(');
define('SECURE_AUTH_SALT', 'iw({a)8QX#/R8jB4laJ;J`EsT?^AqADGyy;|)i_y_DKoU<eN5kJ-b|xOC<^VS#f*');
define('LOGGED_IN_SALT',   't;o>fCV1rYIct%<c%Z.(Z%i(lG0wE%>qP*tJ22Sh@6yVL+wM2t$c3i)sC|}aYrr`');
define('NONCE_SALT',       'pYYc-liQfK[y+vAS8D`!~[ +<aA|xLET(00sOZy-g69z#Y_Dpx6%XSkcX]#F{#+6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
