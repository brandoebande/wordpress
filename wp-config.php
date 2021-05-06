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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'FD=O .6F$PK1LwFmf+.tp7`0%8[2OA<fRlV0{mbI-obzDFbq,n*p[KW>!^K8WLb:' );
define( 'SECURE_AUTH_KEY',  '3R@|mI~ys~Gi*n$7t!NLF}6fj,+0x_oAO0NR=g!/QteEgv yXpIr#=MxTUNy@WJc' );
define( 'LOGGED_IN_KEY',    'DXD/3|Qf<TM{]g/12s#WHIm?~6c|K>C!j7MWFL?8=G@(Ama R8s;i==$=$v7:8-v' );
define( 'NONCE_KEY',        '94m:gg$3p|6cbY=dPygz`ohb<FTwex?RVWiXG:( %,`%@yr?$D4%Lzl$zIW}qk)S' );
define( 'AUTH_SALT',        'KK28sr]^%wKZRwtxh@FbF)li;~@lb;J3wtw5>TO|rb:O34B^`Jo0.5j_x/_w:)$p' );
define( 'SECURE_AUTH_SALT', 'kzcuaP RdPYRL%yXq&/R6dr=a02C=JNCpUt^1d>M2fO01IzG9VXJU}>v2q~a4usj' );
define( 'LOGGED_IN_SALT',   'R9;}b[t1J4w{MGtZ|pYN8U?4pvO]Q!999p&)=/f2t*q*U-C%Hem<,i*o6OUn[?Lw' );
define( 'NONCE_SALT',       ':^WLc,?A$>oNGqUR:jkt#fJr{Q(-:H7+!bP&1Os_]~#/d6.+B=]!>a.MzDelo~b?' );

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
