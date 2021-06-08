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
define( 'DB_NAME', 'ftsi_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'ftsi_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'alquilerdecochesftsi2021' );

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
define( 'AUTH_KEY',         '{8m5s[zj^-l7ujyG+bD^hWLiJPg*N.SqF~7/THdLI.n4,TlxQw]P%GWg~&?MsucP' );
define( 'SECURE_AUTH_KEY',  'wX`FyPa3M&R(6h^fF07N9Jv`{pOh#eR`9d>tO1`kRJC%`#:^X0#_4bC ay0`i4!0' );
define( 'LOGGED_IN_KEY',    'sb$d$s(Uc8NeT;8x6ed$R :In#7XJ$OPhdv!pdtRpqGHjd.%$8fH$`!f;|f6C :V' );
define( 'NONCE_KEY',        'F1CsfODwnOek3NgsXZ2Z]9LAwc{WJn8k4$FoEl^k3oV!TfgZe#0PJ](eZ,|d*yZD' );
define( 'AUTH_SALT',        '`zH[8|RJve>J1x!U~-Z#E`kp`jE0pSC8wlFd`),}V+R2oq[ex^T~6^A<B|JV7OnM' );
define( 'SECURE_AUTH_SALT', 'ya<u3FX?)fBVsl$-a=1&_8RK]]m^VFv,my3bf[6F3tbdidtJG$ADC(=u_bM#WHYo' );
define( 'LOGGED_IN_SALT',   '&l$RyUF#yNSHaNvlYuh%V[<CcqZ!^m3kmyCW~Ee:M4-;)Q(k ]6Fx!Aps=dk5!9q' );
define( 'NONCE_SALT',       '~4>/LDE.el>]m/%VDTII!#4ga&`tO}OIp$O7T:Ft{`l2j,B}+J1qJX>IL6o_C>g9' );

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
