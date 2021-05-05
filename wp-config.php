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
define( 'DB_NAME', 'wordpress_practicle' );

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
define( 'AUTH_KEY',         'bHCS@?9qSka[_fkg&oYk@ux)w:&{hLSPZEw/j@7a/qNe;_5C7Xdr}<!Q$e9B2ybX' );
define( 'SECURE_AUTH_KEY',  '[t~E(stm<nQGr,.SiN3hLZSau<n|D)`)Tv9[;4c9tS7A<u3{m^9xUF(#gQoADG7S' );
define( 'LOGGED_IN_KEY',    '_=;E>GZ4/rGPQA#5XV_Ol{,iX_w/w>|fkt|(4?7R8E-DIF^61QQ3.Rqb]}E|~~Go' );
define( 'NONCE_KEY',        '+Sq3^OpIY2[*a_CFN#.ap0|(5i_<7YljbMK72z}lVb?ig~3z5Z,]-9GiJn,X(,t}' );
define( 'AUTH_SALT',        '>e*(9=0Jz8.omCu;<(:+fFD,Jt1lPm!J)TQmbiZz*=#~Y_,zTK=5^Qp$#: zB1z4' );
define( 'SECURE_AUTH_SALT', 'Q<#$5NU-nBk^M>em,*jC2YTS2ylrXUOrxcd*Y![fAgP$!_hH%/*x<b_I1itd,C|o' );
define( 'LOGGED_IN_SALT',   ',Z^A7W)vIa|=r}(XxYVjr-dcI^J^OM J-ZL!&NcN02sK*:fWbLCo`q|;-//2X`2f' );
define( 'NONCE_SALT',       'RCtE}7$VMP/_VF&d9Q^C>fMCP1$`_i_?5?FIJ#gi!}Mu0s[1<U,*xFk1.<YH1b`X' );

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
