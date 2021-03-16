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
define( 'DB_NAME', 'Shanto' );

/** MySQL database username */
define( 'DB_USER', 'Hasan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PrqLJnUZ9JxsJ2Cq' );

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
define( 'AUTH_KEY',         'MNlAeS5RmBZ%-2dqd~Nc/1c-Q^,Y(&Lp(1U Gn}@Rip`(cTjskVq!7B<;1L;iO?x' );
define( 'SECURE_AUTH_KEY',  'T9Rwv#:.T>m(&j@[S(<}.7at+O+&T(UQ$f@_A~u3VQjc]Oq-W,bgOKz@s/@:_2,;' );
define( 'LOGGED_IN_KEY',    '2kR!kV,Upx.r 1y3qF X~Ncct_P qi]is1&dXTQR1{sn%PQ7ScFg*D(?-kacBKah' );
define( 'NONCE_KEY',        'y#L1XTa-,/A+=Suw(z$LHO0m1<a=jOc}Fnurl+T}Dtj n2pzQr`7cyC*d`2}.8-`' );
define( 'AUTH_SALT',        'ry05zgd?LH7~%4nF8p3#z[v^R6-$.OWS^v51eNBcURndhhr@(a?`B|`Ik*mVO+,&' );
define( 'SECURE_AUTH_SALT', 'n.jpTiNwE:T{#W#j!:(8|wJ{HWD#aiKW$G%X{857F1kkbh3N09N=mNp8{o-%O+L7' );
define( 'LOGGED_IN_SALT',   'YTFv5?J]O)avEX!Nzpg_L($t}QP;`|J/RIyLN6 ,Wq?x`4<y$A!(Tb)J9?dk^sPr' );
define( 'NONCE_SALT',       '&KUl<g,`SfKv*#x.wx8M18AE3YJEUK,36/1L0mdGXZ^%f@KU(|}j(9opgPdaZ{x2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sh_';

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
