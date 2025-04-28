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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=kjy3YfT^J~;3Q)>MFK5u u{J k:jBkkfU!/d=qPZ&?CoRDptVT|1YT3M|gQn}`u' );
define( 'SECURE_AUTH_KEY',  'C@77+mkqc8dAt20docSDQX4e7`O9//Va?Nz1>!+Au6-q?0ArvHcP01;1j&L?c:kU' );
define( 'LOGGED_IN_KEY',    'iCrGN1sRqR;,.A4 q75i^|-{%6]M,k>PI11G4a?zsH>MvhG{l4[AG.^zJ0Ase&>i' );
define( 'NONCE_KEY',        'vpG(d?s=b8FxQta;.l`XphU[=>Z{C?Rap-)Z8MGz[&?1]OJ{{:#SU+0j4Uor@RZz' );
define( 'AUTH_SALT',        '_)p?5c<|I6c7:)FGBe5T/{<D=0<zh~>?D1(rpNELl[8$70U%QHs&CTqo]mt)4#!w' );
define( 'SECURE_AUTH_SALT', 'txVHYIRbOXQ:AV4CF2Az-0ghP8Bx*w7q~) eHv$B7o{!>g>+Lu]v#V3<B)^jY.}r' );
define( 'LOGGED_IN_SALT',   '6j*x&?:yg0ZA<$[,81XARM4$1REhlZiZ(bigik$lCk7zGmWit+/BZ{G%+er&uq^Y' );
define( 'NONCE_SALT',       'q#uKan0~.l,B6cy?x2J =GuhR/i L&K/sf(BH{^paaiR$Kne=lLGx2n<aMo|U>^)' );

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
