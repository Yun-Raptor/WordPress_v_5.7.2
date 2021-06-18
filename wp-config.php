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
define( 'DB_NAME', 'wordpress5' );

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
define( 'AUTH_KEY',         '*t!|@9!:-Ch~H{iI9Uk<s4AyS:5w3U!2Nz@X%y%j-K`cFLWB4Z@TR<::1Lv^tuxC' );
define( 'SECURE_AUTH_KEY',  ',-;1.Vg86mrTS9e)qi+k0kiLV.D;$gH`F>+ofyYH~_4egBewonw)x:< k0jI:WQr' );
define( 'LOGGED_IN_KEY',    ']tJ=)j4Lc.Y7D@k*a$7/6j%21E}yQEzHN+$9QexTBJN]qo`]c|_[[s GodLx)zNc' );
define( 'NONCE_KEY',        'k+~T8opLK*DsRbpz6RGv+]#)A0)M#CuTh?`;fUjm$Xn*w8d&^iAu,X~1omes}AEo' );
define( 'AUTH_SALT',        'BHYX6|7x;FrW{%F|Ud8P<XM*3$3w/C`!vWO*[LQ#dV1DvoImb;BTy/L%R):I%[xi' );
define( 'SECURE_AUTH_SALT', 'wE3?_h70|xnY%AnB:R521nm>qeAj&wVGxF`i)Hjs7A9}:xb,ymoG{`Ef8`|{p3q@' );
define( 'LOGGED_IN_SALT',   '1wHNa7$gtXAf_=j7q.E^0;,|bKtB;mhu5|.qV^b}wwvzk)^tBc,@2;qrZns$l4%B' );
define( 'NONCE_SALT',       '+kznBgotFb~D3MFHOdj5v*Kp?xEX.xZ)*)A[U_&7j.n(oNOl%~/B3bPcf!33;`i=' );

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
