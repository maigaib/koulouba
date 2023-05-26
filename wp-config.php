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
define( 'DB_NAME', 'db_koulouba' );

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
define( 'AUTH_KEY',         '+,v:2]_)102db1&xvz8{mtCXsgoBH|OArcjkMH*7_j|P*a+Y;@X-!r#LzF/V{hz4' );
define( 'SECURE_AUTH_KEY',  '%RA,DiAo.Iq{]5lplB|wR[.Mc!qK+,33d@MTe7>lBEb(Dk?qJ.{I)UaiCvYU}|kg' );
define( 'LOGGED_IN_KEY',    'pBKHi7,+|pp)xxn:|@*)aR~0z*N3v.]OW3e72.?)&y.>2au TKL+CD_b7]qzXMjG' );
define( 'NONCE_KEY',        'JR#}3)dYR*@seXpq}-[$x^1EBe|W8bj3J_jJ^H8xlb3,34mktd~!DNBB+2z5+ek#' );
define( 'AUTH_SALT',        '-|M?(H7t5`U[]81q69c-N<oySmCKnk+{!.*#Rya-Apk7nn7:Y*[a=-ku/rkh3FJx' );
define( 'SECURE_AUTH_SALT', 'F?lx(6~2}o D&erXZ;u.Jx<fkAZy|}m-@J1?KW04+0hS)bdQ_U( q4BhQ^%kZ8ke' );
define( 'LOGGED_IN_SALT',   '@ah:Y6@mOaUiQ3zh]M @Zr]h7`6Y-PX<_8:_>AR*7&N~0,noL&]wtcHR2_Cn)UeO' );
define( 'NONCE_SALT',       '=qB?W2)g<eZ%|G<.o.fKUsOm<z,>P[yqqb+O6fJ%J3zf_p8i}#xvO_*iqejSPA2$' );

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
