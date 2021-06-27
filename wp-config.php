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
define( 'DB_NAME', 'ecommerce-wp' );

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
define( 'AUTH_KEY',         'X(}20Mcs{j&{{mK+h3=)1;R!CzPn9T<Eht`J28qQYmUjZ:0m:)w06hXn.vW;VE<c' );
define( 'SECURE_AUTH_KEY',  'd+& ;@|op+G$3k1.4(>z0E-[wPEWop0M+ZeWEYm&tWHWJva/n[dDET!faLz0 ]y%' );
define( 'LOGGED_IN_KEY',    'JzCl.[-[g^1GXY_$FJG7D[n9Y(UI.o@ORCo!(Qu.hU~KnkYBu@8e8f=u(WLZt5le' );
define( 'NONCE_KEY',        'AT^jpt0^g]4I0U8+d|uz6Li(TUg6#VFz&UR(pB ;kVfImq<@MFZhc(NP~+RBvSeM' );
define( 'AUTH_SALT',        '+(sSZ_z,j/HF*A@ a%hf_4HwA+o0Ps1yF*azQ+/P1X4duixXwDtPuZvO%ezOO`4O' );
define( 'SECURE_AUTH_SALT', 'Kp8#l>nVSw/Tp,DQPi}yl&BPWwqwx;v.(PBEpX#BFC_?MbUH0FG?St=YEoc~*O3j' );
define( 'LOGGED_IN_SALT',   'P.kH?%xF6#Dqk3O!WX9[uXKawsE%U$Gu8SkHSICfnM>~A:v$niG?wT_Q_U$>TZnS' );
define( 'NONCE_SALT',       'j2{V<KkLOIY%|zM((fGS1x[g! 4+YP 3JwJM`R>hi[:nn,;Vb) M/2~XN:%6=Sq&' );

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
