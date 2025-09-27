<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'n}]I?.H:YtcCR~+MT8vt{)V<T(avk`d&MfaR@b*W=58?_m!UYV?z~mieHXj%#=KT' );
define( 'SECURE_AUTH_KEY',  'A_OA)&fhSoY#T_c^/+Dkc]]BTSp>Y=b9vIyN-Bv$ lbz 5QsbZC(tnkHO6BAs&b ' );
define( 'LOGGED_IN_KEY',    'Y [|4ZC?,5m-qx*O(RR]x[=6!*mvXL-UH8JPFUUW|&gRrsS|;kS/ULX^jao$LR*B' );
define( 'NONCE_KEY',        'kxfZ8tAg|%J1L*_E4]vZP/wM@QO%LGa>{G|H1FgU2m;e|$scv03o-mh?~W)Q)iP5' );
define( 'AUTH_SALT',        'mg9s<M*kMiuvICtn**lVnF&97iC|1d<sT0`40l+QTtzMBCjh_pvBy^%+p>4Q:BBw' );
define( 'SECURE_AUTH_SALT', 'AP2e]N|#[PlLq+pu|@Yh!TQYRY306H*pMb6}t);%2t6=mATZMJop6X;F{d>eFZAx' );
define( 'LOGGED_IN_SALT',   '%D_@F7.6rXH)tvq[(=,8hAo;rg4-uA<G&C!!J];#t%]A$Fk>@7k~LNr?JN,4FdP8' );
define( 'NONCE_SALT',       '/L)`p P~bdIMv56jI !b1,=v%P(H]>z+:N*:%1 f*uk|`M;_,;+Q;uRpR~]EAjng' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
