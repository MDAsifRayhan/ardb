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
define( 'DB_NAME', 'ardb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'I{!pU8XC9DV|d[XL/,_k?A]=/RB&=/(bSRI1kY;}1$QOK24Jt}Zl&x=g,Wv.>11A' );
define( 'SECURE_AUTH_KEY',  '<;0bLVT?pEw5Tj9De;qa.nGDjDU0#TymV~uI~h}7T?h2F!tIi^%RlSKwnWpG:ncB' );
define( 'LOGGED_IN_KEY',    'Md~[~.lgiku$W$u{q]/O+PPNH@ABtwvCyWRW?D;;0hbY9#{5u^xEVXp9$ Kl|2!#' );
define( 'NONCE_KEY',        'V@id$+o=Y:?>Eq/]Pvlmq^{OXw7[ddBzWm<erg7p^bUOETETk5vAim],sq`cCJ@$' );
define( 'AUTH_SALT',        'l[K4`^2p8U(66r:4Gm`/70E=P}jY+C^%_bl.1FFF.3f5@!{EKp#8d2|4CUOrTZ)S' );
define( 'SECURE_AUTH_SALT', ')bN8kA*AjQ}G4|bM#b-eYX<(U#?mw=Ge0#e1:3wV|SoEH|1-]D1xAZ9*4/)%x3V*' );
define( 'LOGGED_IN_SALT',   '((JV}4ONH0u1J]r?aaTOuT}/g>qM(0K@=QE&G9iBDexLR#KVm7C}}Zs,6l^-1$  ' );
define( 'NONCE_SALT',       'Q@w$|j_~Qqyh>>#/=bw.I.wdlR3C;{Fz<~X8qUPXElX5pHPb<_RZ$-J>ZR3_%1Cn' );

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
