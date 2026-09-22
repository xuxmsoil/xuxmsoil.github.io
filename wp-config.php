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
define( 'DB_NAME', '8_140_224_85' );

/** Database username */
define( 'DB_USER', '8_140_224_85' );

/** Database password */
define( 'DB_PASSWORD', 'm6KGHFijNM' );

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
define( 'AUTH_KEY',         'wHhh7aD#5}85flv?*mx+l/&DmXaXvSun9V.5_7T~rXtEa%}Wt`X|+k4=P*C-{]FI' );
define( 'SECURE_AUTH_KEY',  'U+4D?t&r {nfd;a%@M.LV]+m#G8}W7(Y.)39g!MD8aLJ{0m+b94^sJNNC^8%Ze9p' );
define( 'LOGGED_IN_KEY',    '+$<LZZ!l*&oE.U])]ImwkJ%Vje>j]S~R)&=j)3X1CP(3~4m4I8ZxRg!TI4EnLD(D' );
define( 'NONCE_KEY',        '/5vLeundR.dyFH~bWpRC7T+PUu6e%L9m!04@AkbSWlO4b%SfsF%<oU$0T;JO,+?:' );
define( 'AUTH_SALT',        '3$Cx;yTWq 3LJ4E->RS4Sh ^rl_93yh2,8&4n~&xwHfd[[UlMcu`P9witq.Q:[ZH' );
define( 'SECURE_AUTH_SALT', 'G}~.[DBd;oN0iN]dB kn:E)NnsE.}1vN9fqX|i[Vv;w_uP:.y}uf>l&;M;J7Zs w' );
define( 'LOGGED_IN_SALT',   ';zZkp4e<tR`(4P1{Wt%)v_P~y.zd]Y>T>z7j_xaNdbu;;%E;(Pz]dy&z b*<}amN' );
define( 'NONCE_SALT',       '%vDR8:XQ==`L >%SebGo|3(lu.LMOs^yNMEolObBPsho%ltH.i31^}F[M}i~JudU' );

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
