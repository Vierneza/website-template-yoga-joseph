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
define( 'DB_NAME', 'Joseph Vierneza' );

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
define( 'AUTH_KEY',         'h!R2.,j4oAL&V,IqFJV=P1)NLjMvf;ys4)>wakrNztU`v-Rka:U9LWu[,Ld B:6<' );
define( 'SECURE_AUTH_KEY',  'OZQP(2#my&m+5br7>M3L.Px:)=FAJraV@+P1.vD;Cbm5s9.<;@eX<LX5<I2!%oS^' );
define( 'LOGGED_IN_KEY',    'AcZ33PS+NC$?.U^UT<@u?2EOZ2ZK[m($csE})x1%UVua#Wp==buntFK*,FzNV<&4' );
define( 'NONCE_KEY',        '.zRjRt_5d2]%QNW)K<`jCX{@ Bw6ap$AH_3,g*Lwt&Iu~vgC]nMctS(A3cNp]pv(' );
define( 'AUTH_SALT',        'HTdqmY8t8/F/6@j&Pv8XDgP7zGWW+5jI-t2thy|F,PKF4HX44VK)O`!4?Y..XV%B' );
define( 'SECURE_AUTH_SALT', 'DC4&+|p e~8,ui<;o].^LV@5]1xJl4EAGS5eqUom<[igT;,z0uQ64Lx8#}T89oxP' );
define( 'LOGGED_IN_SALT',   '|#6N414P0>)tJc)qlS81fr(G-oi=QJ%zKEG~TY[sUn*j_Gu+!bVc[e>yOSl%0Z--' );
define( 'NONCE_SALT',       '_F%c:<Xm=^dug6>Y-TJJ^A^Bnn=72QJW:BolHC5q7Tu`[y9frXT.@poU|m,otT8F' );

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
