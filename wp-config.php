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
define( 'DB_NAME', 'ciclica-magazine' );

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
define( 'AUTH_KEY',         'C=Kj~;^?A -*:adkWeHD:h(djO<_BF>[|y@Wi@F^~cM_4#67IIax~2WOq9jOj/^+' );
define( 'SECURE_AUTH_KEY',  '5-=(UR}^tWmRMY0dM>jgRr1roDt1GkEFs63z;j~C=bx:!17Hv~0P`JB+Hb+jF|P3' );
define( 'LOGGED_IN_KEY',    'kjV&oVG=]n/e<AKYA!/~Xe6qK~D:U]qR_=L=vcB+&`Zy:B3~Kg~,|rai5jSez}H7' );
define( 'NONCE_KEY',        ')uD%`c16`i3*1){T$rOy8]QF<lM  BPPS=ma[;uhvdD>2EpDj3b1QQhS<}$7`]!f' );
define( 'AUTH_SALT',        '<=YUgN%P?wiIZ$6YyOJXeR)+dsTz<]|C|_N{QYkrH%[=!H3H2NruU[x-nsFR^s9I' );
define( 'SECURE_AUTH_SALT', 'x`[$qZYk~*@T%)Z>+$iz~eD$LiCyxdtRR`)~@-EjP=KkZiA(+xPSZ-3K]t}<dU7p' );
define( 'LOGGED_IN_SALT',   'M6*cdT&b70Qcu]/b1Y@BBwtS)y)NM;|Q1eK!2Zh{LfpC$r:GlU8LT|+pXe8g(i}e' );
define( 'NONCE_SALT',       '>O kep]PFw40D)hWkdVX.tV>@-51h6%PuQtNJkCk}-22WM$/?e d51/p|z]=%hnt' );

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
