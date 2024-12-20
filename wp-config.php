<?php
define( 'WP_CACHE', true );


//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'loE811KSNb6igETxgEfQFGZmkRa4qStlwVUUveK1gxadGNTX9Kl7v7b0mnXHL8RC');
//END Really Simple Security key

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_site' );

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
define( 'AUTH_KEY',         'hvZo&?iJZFNeo(Y#1r]!S$01$0Bu[%~1:3@$|)U@`|I[axwAvmex~lx]+?Np3N+D' );
define( 'SECURE_AUTH_KEY',  'e!{$Fy0Uo+je0F@Fhf|YtW<pCNZpFEFI L_IaDRJhyVTfP[x{h~Y*hTsQEae#L1f' );
define( 'LOGGED_IN_KEY',    'G|RhMTqUap*#^BwUJiR3cT/rjJ</g|Ay.]^]}NkX,scwnpPjCzh&~`K]GN5ko<1x' );
define( 'NONCE_KEY',        'W2Fn*Xs)MS==T/|^AEuA>fL36_<%CUs hm9CN#$MCT*?x?G(8vU?>&d-Gm*tOft~' );
define( 'AUTH_SALT',        '#vx8o[Z{[ZJX-u/B|O?#lJC2XY1$`:8ZnTTK8m&:A#/8129xw[0fYhYAk8kIi2AG' );
define( 'SECURE_AUTH_SALT', '|j^j3aqNhMcTib^CW!73RyP#W]M2[/eq.F9` 8xi]7BX72<yxUu=z]dc7VZ9z2}6' );
define( 'LOGGED_IN_SALT',   '8~#)R.hUfmJTorCRRHZFX^;h-,{`#;9T(9Pa=u=EUp/`Vv..r=3p3eB2n#ds!Usu' );
define( 'NONCE_SALT',       'ywh/>zs#<~V3fFossUx&(@&DTs:$c~5e[r_<)@`E1k1#a}iHdXl,u)/3!jzXyO}[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'kenza123';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
