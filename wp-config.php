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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          't:AX:XO,a::o9s|P$O qUfT=,K}`M<[9-1=!0k^d0hf&SON7ov5Y:e|a8>re4m*f' );
define( 'SECURE_AUTH_KEY',   '#lOO!eP,ellN=kJwW~CDx03 Ajqq5fjj*%aIH5K$..gF}l6$*}#IO#kVva#12F?/' );
define( 'LOGGED_IN_KEY',     'bAH|IJJBaj2UP zn4[L$W Wxos]vk&L$kVc _:Xa+`<N]:rfZJ6 .I,<}r3ljlvC' );
define( 'NONCE_KEY',         ',toE9DW0IJE##aq`;]-,A50bPE0C|6Q2b~j)~1X1K$Xw6{=M(t#rw?hbw;-%olHd' );
define( 'AUTH_SALT',         '(*ptGXwE`Rk=)=20(pbxVM&g*Uz?e!9UiML^_7]<EC^p//F5hWu/4$dBVlz-qs:f' );
define( 'SECURE_AUTH_SALT',  '62dGDH6l[(R:sq}^``G.tCUe^icU<WS)fJ+!+6*,BBe:z:(&@J(79.tn)b/qD4^0' );
define( 'LOGGED_IN_SALT',    '%p>-$MmXsbwU;tL]xWo0xJLrVN7hDDL yBh{<<,OzS~cT(z]P )$y[_T]qDw7yxe' );
define( 'NONCE_SALT',        'r.KC)}QcuM$cI7ASd7/-+C88#VU||dZO(o`gWd%d9A%3E1>Bq7xV_wK?f(agdmBT' );
define( 'WP_CACHE_KEY_SALT', '/:0em*$43$p(r+C~MVVTqc<hUg.<Kp|y2 5771-XGc_;9D^^I9G0pd<an3iWG;iS' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
