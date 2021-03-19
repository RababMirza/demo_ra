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
define( 'DB_NAME', 'demo_ra' );

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
define( 'AUTH_KEY',         '|g#FkQgu{_Bo45=(<k@d4OTuR[?)+n`)fOt_EM$LgMJhyR5Ix8W~>T$tLgJf9I7I' );
define( 'SECURE_AUTH_KEY',  'PG?Tw&j;vpZs|P~0+M CL]+jZjVc+QX}*]/fCyZTu}}f:i3oeKdj~tjm6S*T(Qlb' );
define( 'LOGGED_IN_KEY',    '0=+6|[l>]F5uIoP(16fL.ud+8Il]6mV}%~UYl$2wSIc)noLt;k8rIl!2Am*,5gHu' );
define( 'NONCE_KEY',        'NWUeu-xu1<tw$WTB|Dlf&rAV^hY_OW$<eSXA?/-Hoj7Le>67pmHSgWJTX.CmF+}F' );
define( 'AUTH_SALT',        'Bf`[S>s{k@Dz_,.{uZ&1~g&b-(#umX0hq16>Nx<s?s<s(eJC=A1X98_aG(t5Nw3i' );
define( 'SECURE_AUTH_SALT', 'E5.^3DdcW[A*?DGp*=c:`UZ3=tpm3;gpt`@Wbw6%k{<4B!#K4eP}-w~EQ0_#_ 0?' );
define( 'LOGGED_IN_SALT',   'p,jo^1Y~:5RZ/Lj/iW{lwTJTK9PHQET~L$/sXiO$|!8.|z]@k]2u6ZC7K_YlsQ!Q' );
define( 'NONCE_SALT',       '8,3~vO#9Ht=zrZm.m5o_lL6Ryp$o%Y{s]%yL3APL Y7>)5y&vni-j~6xre5@P-wO' );

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
