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
define( 'DB_NAME', 'dbmyweb' );

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
define( 'AUTH_KEY',         'aw<b:OebAO0#oL|v=H%4sWWy`YnxZlUwYveY%Yqyc{l&I;t!2pn!p}?t|Ej;d._>' );
define( 'SECURE_AUTH_KEY',  'wM5)34I3Nt`#m&ThQ-r@g5xZqL=0#dLX3Ki6DnO1d?xt>BWe-rQIO=BZlu=}.%5k' );
define( 'LOGGED_IN_KEY',    '3c.a0F.SQQDVS+@YyI 8NdEZ`zI3b2w.e -5R{U`mYXN$v885+*c+Nt1_o)uhc8y' );
define( 'NONCE_KEY',        '[iw*PHd>qTaqt/*[.g4HD/T.i9~? K]EqD[OnC9CR_l<f(SL(Hbt~Zqxw?w ]Q{X' );
define( 'AUTH_SALT',        '-^ ?{vuE%V]p[R{YJjG[c|&#dS`a]<M-~gi?Fy2/?$&4)78+I; UOY a/QU-iy?b' );
define( 'SECURE_AUTH_SALT', 'FOP~v4$eDxZ[_x7HtMH<1)7E+O*i%uM ?dLh0neba,DN|#J3/&p1,JYy T4+2G|G' );
define( 'LOGGED_IN_SALT',   '].F9oJ[?X-!r.LT6/`#QLbMX;mqhh]7<QdV>,vs!|oci|T]T*0g5!BPW[]!iroH7' );
define( 'NONCE_SALT',       '= OGWS7*~n{g!@80YjGC3JoNKmLT;F%A8Bo|1,{LLStG#i0F4+X.:6nS*TJ;NZf.' );

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
