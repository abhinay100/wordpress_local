<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'ubu_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'D lJ&H%-S4mFN0Y?P6S&d|t3[9}*&P)]elRIQZ^c+tq7 LXs^0wq8i#?K~$Rg9_+');
define('SECURE_AUTH_KEY',  '?tbmtykxq>>PR_Yo<0._*L]8@807Z6bTZ&q?i<~Zt.g!lUHut.P{U4<8:?H][l<n');
define('LOGGED_IN_KEY',    'Ym-i05Z>Si}gd}yEpk8@mYQ^;wI11ado+8;sO^aPg0SXAqd?1@.Qq>7DR7.|h>Cm');
define('NONCE_KEY',        'KNJ+RqVia &4p|([07s-]Bv@:paPmn6{!-}|A(VnF]wwNN )o;R*+F*KpT:f&|`/');
define('AUTH_SALT',        'J{V[YUAKZ![CX~l&| 9amwR#_Hb3CQst,?Z;9c}M^`uMZCb]s0f%wKeg3fy>^U)u');
define('SECURE_AUTH_SALT', 'a>|Q6%R3|865<6<Lq+hbI6N~T^TSid=>#3iU z/yZEeZ0,%f>d9FTsR{)NNY)#*}');
define('LOGGED_IN_SALT',   'u5JyT$:L!$wh,w+1w|/I{6,5`v>Cor+fBc>^ (.GkNi6&P-LaxpUKuTM,j*Fy{/X');
define('NONCE_SALT',       'BAa)RlJoB@Ruff2`1,656Ahcm/VSeasIb3{&:4~+d/[k,Dm-FK|#nOy{p{JKxkd3');

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

