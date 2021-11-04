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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_atcogogodev_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_atcogogodev_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_atcogogodev_pw' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZXO,={4.8QG@t@9<n~F!nTaC$v((MZPfv,T+cM(A zkCE.6vgW5h6qX[mnfL$TOk');
define('SECURE_AUTH_KEY',  'mL7f}4A.;xw§?vf^(n1trloIb&@|_%jx5su|NJ7i3+mKB=1~<-P}f§h0:4_[Nkxa');
define('LOGGED_IN_KEY',    'pyMg1Fdgy(w7= 3@w;w1cmy5f@Ov7$>~)u%k@8,0@E8|c5lEd_GGp?CA0.:vVN5L');
define('NONCE_KEY',        '&?6Hpn$aG~W!oZf-{p6<e:8`]<FwMa`6dJsH~x!e7gN1>R,JmY§(`_JD-lEHwu9u');
define('AUTH_SALT',        'k0t@CJ48YT/4u+xEaS<av!_1IZ=K5s<}§Ve9f!A};W9QZmfjst2`A|K7=i§M)oRB');
define('SECURE_AUTH_SALT', 'PYNMB8AjamY($vjF>c/]qjU/lMi<x`z=%},{cz/(fHNCQ[v%g3_nsZS=@>s:(Gen');
define('LOGGED_IN_SALT',   'i=X53Gx;5HK8YJv_4_J@/&oO5|=HxE+6@psRO,qo?^86(k_§MAvqdhU^nT[d?&Z/');
define('NONCE_SALT',       'oN§5§2@b=[.Z)ke9<TF4<)3in^Am%8,4@L08XadZcip6Z5eS5DkWU3=a~8p,(@$f');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
