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
define( 'DB_NAME', 'dev_team' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'nvp9wny~)K.4/n&pWXLo&6pu;(Nk-+![[eaJ|bm]R}-+7`i$&mh^mJ&KOXYH(gg1' );
define( 'SECURE_AUTH_KEY',  'g5c8NrvAX:@CfeYL-8@[V?% r37C[lHu-/-w^2iSW@N+Xp9cdK][*y6$TE_faD8r' );
define( 'LOGGED_IN_KEY',    'mzL0{:f~EBXRi2/)7I}=#j-6yP{@V0Tr6EoP3a.`{A]L-zdp]|=p#t9cJvp<x/U)' );
define( 'NONCE_KEY',        'hYayf+xB7ZSR}$@5~DPEtl6p0HC7&jdk|M2:A.J^>+2.8/s@$Qc`)0]|3f0rpUkH' );
define( 'AUTH_SALT',        'v2N;JeqF|LIxo3y_eo{!o:(?)3EUY4pd3X|qHisEd/c5#,@&U7T HaY%9M1)Eob8' );
define( 'SECURE_AUTH_SALT', '.Js?$fb^%e5)V+ 4@U_(oSx.A`$;&.UO<tDH9^DqM)@}Fj|+FxpOm35Lz+Yf.rL5' );
define( 'LOGGED_IN_SALT',   'y:66&&Ua1Q>B[/[}7UZ&QKpRXdq:K(C>]H$~iE35|}wnSP@P^-Bvp:E;j=x^H&!a' );
define( 'NONCE_SALT',       'X :PnpmPAXZ&RjNPFcAdMypN~e+n$Bu/Kuw]f&~DKU%^db5A}IwJN@|k<2)kcTAM' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
