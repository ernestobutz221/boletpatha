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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'boletpatha' );

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
define( 'AUTH_KEY',         'L=UmX^}$FkulR*ecj{IUv4CH#(m9dk,4jQ>r&6(66pm7*l$CLcS<fZw%#)=0)/Lx' );
define( 'SECURE_AUTH_KEY',  '[|YC+8[84C)9W<h_!!+t/ZO=!reYGn/mr6xKFHj#?$QjuC>&WOz,J%`6@x!)xD~-' );
define( 'LOGGED_IN_KEY',    'UkoFKkjg_X.3fWR^xdE%5>yj~aCLPIM= Xqse#VC`!>3Pl}DYp{6jU[$hia7n34p' );
define( 'NONCE_KEY',        '`OYc8$IPL:u7c3)EzK@P}{q`9u{(EyTa/=.m&#vm3OV&Gi W7b.|]2`-<2 7%-Vu' );
define( 'AUTH_SALT',        'w}$ck6=g#Zv_@`lItqWuC51J}gg2uVCze#,RcNIp=jGm[$|Lb^[DjTIuR^tePJRb' );
define( 'SECURE_AUTH_SALT', 'w~_9D9S8,)_ATM-$Mg)j2fIZ@9qN4HC{Ou#GySVx2<^U*)O~?hd*]#1@uWzW7141' );
define( 'LOGGED_IN_SALT',   '`9*(e%RsV]1(j?G/0Y-?,iLw<$j5nI.+qrm)%uu*=HGa3U=[4?AcdlFdbk<*]4x_' );
define( 'NONCE_SALT',       '/Hb]n8WY{PP)JEfyQ//:[y?Oiv|4Y#2EX>DkqrdcqSV83|?pk(Dc.PG+|0=8M`Z>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
