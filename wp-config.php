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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sourov_mehedi' );

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
define( 'AUTH_KEY',         '_)BTrD^<h*/Kgtl*Xp.qqFSJX;KF)|&K;cmK8mc)sidc&|w7.gP:apS}(CAKpLs{' );
define( 'SECURE_AUTH_KEY',  '8b:>W>vZ$,3I==a@w>pNTw[cMpUW5)_W2A.3%R^=G,%>d2NxqS<r{4G]<(u`~u_[' );
define( 'LOGGED_IN_KEY',    'JKz6igMw6eHl1(/ICTpAgV&$:3/nD0c+7$C_(/uZ8yKB?Y]:97KF(y9lC(|kG65P' );
define( 'NONCE_KEY',        'sDP9yN&oQHF 4Od=Tv,{*_iTM[OHUC1laD=iNg[-!HrI-tk:PaHrl.S8?uZ@xM)c' );
define( 'AUTH_SALT',        '4+frW @ |Hsh]lh3a|z28SM>fP+I>NpBCD{roNno2gD}X.W9HNGNOLPUD$mx<{e#' );
define( 'SECURE_AUTH_SALT', '#S25#e_:Iu_j3s@)) ?$-N>ZHH&a/B}ReHGP#9=c.Ql?)RmY#^7~7^4UJb^{%O!U' );
define( 'LOGGED_IN_SALT',   'aF}#K(Ne4[U~R(xMw~l}l~[9*q4M|s2z!@XY}Q=[$3E@=4*hz%SL;)6:EqX}9E;K' );
define( 'NONCE_SALT',       'Xa2FR /d4KZdmkGXhSP><B2_jg}A1S Ui.f:4C3C}q ^bED<pT5TkDj]qof-!|Ap' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hamba_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
