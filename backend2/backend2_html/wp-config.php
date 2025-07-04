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
define( 'DB_HOST', '192.168.140.77' );

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
define( 'AUTH_KEY',         'RqIE4+Qm|/I0yrw5ydMah$45{[De%cJynI[X6,j/lri6(FNXt^rU^+cPB6!SM{u7' );
define( 'SECURE_AUTH_KEY',  '(@sx #(3#^?/[@ec*R/Y2CMK-tzk&uRLx5@b5|DH}^6)a=$0dvX=fX`EVslUi <9' );
define( 'LOGGED_IN_KEY',    'y z``H4KbboJ^}PgLGJH?W3;2Oe@F|y|4YH2<Z?!J7/MS<w1P[$?%|Bm&Ez6Xz`|' );
define( 'NONCE_KEY',        '>DG;=d[oInLaO4s^d?b:9*bfQ>%}MH2O^*2vWsl1~I@Uw[05)k5o.*?3=8w1u@r~' );
define( 'AUTH_SALT',        'AN}]xSe@z7gEU^%vc>1PH_[;[TrcMMGRr4a]lnJJj=E=&PmS2KzbF@>XKTfwikK^' );
define( 'SECURE_AUTH_SALT', 'En,Zt02}ZGl:Q>5WI+|hKBOu&4FZD`JG^5Z0&^)tu5mk:I&P,yyN%14.^RZt@1u8' );
define( 'LOGGED_IN_SALT',   '5&FWZQB0A,0SdnB2ba$WzTO)T9ZDX=m}-}08z#jwnDZ|LP|LN__oHGz|/CQ9;M?Z' );
define( 'NONCE_SALT',       'HP2-|3[ke]BIdMUGB8I%[fEu3kW;z:DA$PM6L03KZGG}p=b-G-q=m#1_9r@T[0WY' );

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

