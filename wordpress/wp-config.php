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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{}}Jiog/~)Bn5M]~T50v[R#7]+n;u_63h;L uc@ 3zno Jb^K-:hzlyE@j*P1j*}' );
define( 'SECURE_AUTH_KEY',  'S[t%#S{*`IA,ZFs5Nu3./p8%>ZXk1W,bS4fb*neE[,p<{Ax>[j^)zDo7l?+,GD6=' );
define( 'LOGGED_IN_KEY',    'cu/C~b,={]QxkCILqIEhO[)6d^DW67Zx`pOO(kmdNhQPf@kXZ|m ,_t2N!>:cR)&' );
define( 'NONCE_KEY',        '+-]WW`qe4lM=o`/l.<~@uYv ?w7C;8h#;/KI4#`@[Z?,TO?G pCt#G:GRyB*T-Kd' );
define( 'AUTH_SALT',        '#+Af-(A>(6K*cVb4w2Vm gE2y,{+C5Z88|jvCzu$<T+!bWYCJA Doa#rS<PhRmXU' );
define( 'SECURE_AUTH_SALT', 'ImuBQ2yQ_%x|Re_bI;S4Sgp,QC?o1Hiy}BryrWN_(4.IhKS_k2X^U3!>1mUY[2Of' );
define( 'LOGGED_IN_SALT',   '(NO/:inRJKPTJkVY n[#uwRY  PjhM~lFiq3 c1I8Nq~Glo.nk5ZlF-u.K(X@n9;' );
define( 'NONCE_SALT',       'Byi2Hr`%92bdV]m@wS`s^q!w2R!w.cXC$eA+Ucf%n;D+M-jGs&ur.=GV~PQ^#3{^' );

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
