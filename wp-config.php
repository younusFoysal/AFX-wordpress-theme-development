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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '%`BZE2c&I*uFWowCw,lGb2A Fg9$2y:HE9EVpNX:9c25zWT72jWfRA(i6c/mp+Ks' );
define( 'SECURE_AUTH_KEY',  'R@TSqc)V)}vm5!UUZ}tTD<@/3MSa4D^ZuDgGBY6,}8dlHH*^-SttQn2<<^<x>>$v' );
define( 'LOGGED_IN_KEY',    'Iv5fX~<2NYQ6m}$|m0q&_4-k3dd0}.K0Not!OuoJ_r4wsW<L~k<D*{BFt@;Wnzu2' );
define( 'NONCE_KEY',        '_nsV9=s+Y[5$zgzE[,bYu1b4Oj3(gUyTXJAFxC fQ|nu}CW#a$&#Cj97v&7QzEnX' );
define( 'AUTH_SALT',        'Z6eUIkQ@q#r=.+;L[W,u^8++oxf1%(w<ZS}+t| Jnw_^$I4HCQS~?hlGa=LYfH[[' );
define( 'SECURE_AUTH_SALT', 'dg,^yZrdAu]82JsC|mn9{Q>+9m2Yi4G+=${Od4_k3MqU_2(= O STlx%_MO_{CjO' );
define( 'LOGGED_IN_SALT',   '/gBUttb?>gh|*.1:rUk#<V)$Rpt!4AkC;oWQUM|%=sFw4$mzaMwci,J(HS;P,UR|' );
define( 'NONCE_SALT',       'zn}e$g(VJi$NK%wlD;gw&]{,c*:S>m%>QI4+I$pxc60lT_Z_VvNS5NBb]b8g6Un]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'afx_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
