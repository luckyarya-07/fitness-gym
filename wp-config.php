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
define( 'DB_NAME', 'fitness' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'P&jelAME!n,rsbdflco.b}Nrh<N?HF~~u{P%D^i5cA#cg)cj*wT0Z=&b_uS>&_3:' );
define( 'SECURE_AUTH_KEY',  'Aziou2fZRGy=U2m}~aPdxTa.PIn`a_6`|-$W&:RkBw/ byA`amVAS,3hkhA-iCZ`' );
define( 'LOGGED_IN_KEY',    'K,w#dm:E^BuW[(1C>,J2/Dzu3j?uNY,_UF.KVDK&;LJ *U:hky.WRZ3cT89,gA@c' );
define( 'NONCE_KEY',        'WdO&H#a2l}GKcrJS`$AjqvX>,HIK(O6lL#Me2CJdt}:&LWAvXrt@J*uwK^7j)JK9' );
define( 'AUTH_SALT',        '2$IORv(9XtxOWC+<p^l8xs.2KI^Jxw]cH``12Q$C6]&&r7?*I`_ hwt3ySiq~HM]' );
define( 'SECURE_AUTH_SALT', 'NF $r>fC:$-,l!nz-e=6Un8&>jQ)^|Bz9~|&?k1c<rB +VMoSq(T+T;_mtT_`fT)' );
define( 'LOGGED_IN_SALT',   ':RlrQyMMB>& [Xg]t@uo0[Cb_5_[K$RGe(N9:Uza#ylDT.Dsk`[EDk!=n[M-DWQc' );
define( 'NONCE_SALT',       '3SD@CcC]MMlxwVOm<~AmObj9m$ ;VOSx8)AaF [pWb]5*!KNK;p>dL7s(tRI8Efe' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
