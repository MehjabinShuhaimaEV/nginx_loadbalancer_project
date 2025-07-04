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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', '2002' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '|4N7R+bv;&A+gS%:D+{o_>DFCJc%#*:1~+@`1Q$L]S03z[_4~:l(Sd3r](+&r-~k' );
define( 'SECURE_AUTH_KEY',  'J+6}v5.w~;(5c^ TR.j!V|#KI+M=ha/hSuyQOO7k=3E:=ardv F/&:3oO&=<@ZQD' );
define( 'LOGGED_IN_KEY',    'n)CI<BrHi/D-$5gW}yS0?n@7hoskX(zN^ ?j bqh(#ZC>Z8lQv=s$4#h1Inf!Vm?' );
define( 'NONCE_KEY',        'W0L*pF,j&7Q@+4{E1W_LY.R/sVI%=gmXN_jY-QiR%[8_5ju$@o8x[b6d,X9~JmpI' );
define( 'AUTH_SALT',        '&aD+b9d4X[CBTQK]XaFdmX~YmE$@GRk{Q5a.?&=E?C_*DXMY1W#jCYof--P$,:]u' );
define( 'SECURE_AUTH_SALT', 'QD^4N0rgi#,5rdU8%&rrgb0z+6?bM`[}T6;c^+Ex*Tp?:jDZ2jh!^bjQMfV[%Rl;' );
define( 'LOGGED_IN_SALT',   '!K:},e%W@QswF8R,C?XGF28_-h+8uNj;@:+M1b$X)qW+?zk *F Cp{Nz(!rYCv)p' );
define( 'NONCE_SALT',       'H[eXL~qZ?bHCSq[}j}6qYRewU!5OhIQY1yB8sw`MSuq}p<y8CkD+O@cZi/O{Po6F' );

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

