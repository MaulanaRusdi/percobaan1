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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'percobaan1' );

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
define( 'AUTH_KEY',         '~]>)eLD%!kuP[AZmQs73!;BR)EgZt^:W|2y!MnlyQG#V4KZrJu&0H_Soyn9eKW;Y' );
define( 'SECURE_AUTH_KEY',  'k~DwkY{RKi}1)ugYXrGT-d}8CDBE}u%((Lx7`QU!*SOnOF7Zn8En7g$g_G!ARy#D' );
define( 'LOGGED_IN_KEY',    'f>N;!4bZ*PN|^-nn6{J HouXm+eeL4ID`,K/ !.}^4g[7c6p$4Dc|.8M!!PLz`N~' );
define( 'NONCE_KEY',        'kSRDhTpnv?+j2XI7*3NZ?_~Sh.JL<<2WDWC#Cmrv&nsP&}d?M!i[lq!b7:Hq/DT|' );
define( 'AUTH_SALT',        'b92VhB}jvCf]qbB.!/J&EJ#yyh2wG^_ux0Gng(>yJXtIgEi$ 8erb2Gx`2?<t4En' );
define( 'SECURE_AUTH_SALT', '{{`;bBs1bbA??:k2CpbE]0|?n2+d.Q&!TH^CwOXqm6 7W!R[BVa]fzU|8]*1dnAo' );
define( 'LOGGED_IN_SALT',   ':0 )An&[d_Jf(~ ;/ OTuAe<i;EK1CIiy4~.46!W_f`}A+lWm=v9|k`irgF(C(<t' );
define( 'NONCE_SALT',       'b(Qp+!]:zb^P/!%W!yARy!C<41.UHh}dD1,q+v?S7`%Am@H3)Lf@4j*e2`Lrmzuv' );

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
