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
define( 'DB_NAME', '2Pac' );

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
define( 'AUTH_KEY',         '9^<3q$s1s&5fv]RGbn yB-{ <p<s77+s3C~bOg%EnBbQtxGb4vbW/||x-R#aswvB' );
define( 'SECURE_AUTH_KEY',  'jso,jS*Vz<v)Dnn^B|S62~pVZG)ZdLA4I9)%(HO%J<7@V}kr2gR33b|IV3vH+U[#' );
define( 'LOGGED_IN_KEY',    '>!^]1^=sNxMv,4#IsXO?c>b2_ =(/fRx2a3|8k_joe&yNF[eebKI0wjJS-s4y!gS' );
define( 'NONCE_KEY',        'YYkj+Yd_6)r@~0|iQ]qOPjqZN&}R_*RRjv&02BlNS@P`eJH8oA0^f VFw&n6yYZf' );
define( 'AUTH_SALT',        'zSHN&muH}J2#cvcTZQNXLrV|sSw4}1GRkcub](h(+[6L?~R3AEF?u*n%+.^(g_24' );
define( 'SECURE_AUTH_SALT', 'I?^R9x]mFO%BZPy}R3|~?;dK2Ve|>0|L{ZSXVA45OJ]5[kW]!({jFm5B-Pa?i4)=' );
define( 'LOGGED_IN_SALT',   'W<qHZHXX+~DN0z2X&-2Buc<#V{_J;BnvWvfshLFAUMtvGG(mCyoV&c?O`9lZ!zTO' );
define( 'NONCE_SALT',       'wqw44&=j8@D[~oU:Y&u6>Zn/@m`u)CZ%`5((ZGAU<#2@h3_xN)r<Izk?/33Fs;_P' );

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
