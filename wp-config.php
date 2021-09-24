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
define( 'DB_NAME', 'wp_dev' );

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
define( 'AUTH_KEY',         'B06 hwC21JW$4l2QD3o4,)a)G|Z%241{`qV3RFONf/^&,9fKl,}BB7EOUz]G9~Pk' );
define( 'SECURE_AUTH_KEY',  'Biy:t> t@7^a(]wuqvNu5!6Oz|TM`a@1Ngz!cIjuzE>12ppI~z_/GY4YYb1}5no9' );
define( 'LOGGED_IN_KEY',    '{tDkkoeA_5Qr.X613UQ$M>fTWEw1Z[^]P,vx}>Eo.dmnl!X#yAZ;K[W#+.2]7{hr' );
define( 'NONCE_KEY',        'kRh/5#4=PBm~U8;&I}F(>S14_4x4_N-7Sdj$O^G67cI4S1Inr2zoE)J7dDmoT/)h' );
define( 'AUTH_SALT',        'D7_NUA,[OQ3oCg dLELjU)H`J6<!!?kP5m-_%0{0JnYrxb1frsvYx} rSn?e$=/j' );
define( 'SECURE_AUTH_SALT', '>]HuZVKRX>}GQ,-gE>U}<79_aE(ziD.3#YOa&!R@IC-xrjzs]2nl]6duSN>+#~f2' );
define( 'LOGGED_IN_SALT',   'Viirg1m?ta<%n,_w~cgc!-Vqm).^dEWbXZ34LAhiT_R>kayx1Zit(4pr8PpFO[a:' );
define( 'NONCE_SALT',       'bcT+E4=Yj.R5oe[M7-OXoa>9@:u2V(%^}pDzo~sx?~L>1Vm=<bp#< JO7o8^8R?j' );

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
