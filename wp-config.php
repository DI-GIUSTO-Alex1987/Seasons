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
define( 'DB_NAME', 'Seasons' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'IG5R4(v^vS{5-hN?W=ei`79BSx^k, v9wSJn8S6`{K#3SG fz?<+3Aw3so3FFWk!' );
define( 'SECURE_AUTH_KEY',  'hoTq40Q}}C9Mo.[+7r$I$Sb~lIzzNbVZMHs9kWfH<a[:@j[N MAL~WH%Y)b+t7(U' );
define( 'LOGGED_IN_KEY',    ' fon2[zGG}W] ._QTfO[rKeZ8:1Zy8NMl[A<gPGUD*]/g)pC&YpAlmpxZ>ytRbkE' );
define( 'NONCE_KEY',        'C}<bf0RnF>^)-+7qot!XX5k1D`Wv~rJP4vF8P7.dg?:Bl--1@,TeG16{U6X~m|:o' );
define( 'AUTH_SALT',        '7x.*bIR<tPUV~u71,V`bGu 1K4PZ%EFEhk5)-WVH]cSc3>Fym(r4ul,XY4Oi-y_r' );
define( 'SECURE_AUTH_SALT', 'C0*+#HLi1F;1EA]5z0cw*nW9ziAi{,>_<[hv^i7f`!CkM|ULdT+Iv8F$U:@X%%K>' );
define( 'LOGGED_IN_SALT',   'cW*m|Q b#7<%)co|]tU(=~7V^nkeA;a8f!-h%YA7IXi-!exs~=qPU+O*~b?AG0Kb' );
define( 'NONCE_SALT',       'EN;WPTyBJ@1I9C_k@ok/9)o11b/+qS5^h l,EeNa{r<$*]kHW~9^{Gny2+zPh^^>' );

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
