<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_5c5t6ZJ=6ltaz,y(/@Ezcv2(4AO_~-C`yQgZBw_ra~,,fs2qCh4m9t9=2P-oaTi');
define('SECURE_AUTH_KEY',  '%Y=QoGIOF_,zA[^R:;^+196G2X[[}r!lp>#sM|C5`O)Z}5@k.&R)IlC_LTC10_c0');
define('LOGGED_IN_KEY',    'PhBz=F1JIU>LG}ehA;AAhZhH^2Z^B=&EK#~q(Xz7c> tu8A%= pD3Px6B*FZE]44');
define('NONCE_KEY',        'gHaKni*xwQQxgF~F23SDo=hzAY(K*lg5*%ojBxn!V@nUi5?rF+!1)o$G$TH- n1 ');
define('AUTH_SALT',        '1t&|/gy^8uBN#w|-imk:l1.Fb{W_~o{:+b=9uc!z{j.+zX}S6C|@=HatJw73>U88');
define('SECURE_AUTH_SALT', '?nTBdn1=;s]/QNLoq_q5uf.N-z_;f#Io`,0O9*-M/XL,fYZEQ-n9)xqTjM6uf}0!');
define('LOGGED_IN_SALT',   '+UMVFb[6.Gt_sN9PJ 2z?~Tdr)4]`auiZl=,h3:^Vd%)bZc3M`*^R2Qc]O_Ll:=-');
define('NONCE_SALT',       '0wK#4hu:d*%@MB[1eI*/:h,NOi Kv`flF Gd.bThhP9oyB)@$X)|DPr[OBx/9b~?');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
