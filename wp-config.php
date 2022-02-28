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
define( 'DB_NAME', 'dev-upstatelt_db' );

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
define( 'AUTH_KEY',         '>Sw^gX$B$ |zFwN4$&0u&nd}:g.lm$isvwt0Rq|3uJ>V62NVvX0;?@dQ=:5{/m~K' );
define( 'SECURE_AUTH_KEY',  '.euVwU/fvw+X(&.7=WkV)vick!:X]CP@X%cOwS QvwjOa-Vy-2rcMjIrWkn*-niw' );
define( 'LOGGED_IN_KEY',    'w[pd,Vbk=68HI.|Kv>$MrW}7;N(%h>1%qX$gW~3(ly;9qs9v)j=fj{g@4ueo(KHq' );
define( 'NONCE_KEY',        'RrP@68];4.eFvmRG2>,+79(MnS@DV6rAustZn|?k7gB CyK+FtUE~>fzrB+sd~YT' );
define( 'AUTH_SALT',        'sFb& n-HBm%?4BZ~Spo8xCEsvQf,3CPH?Q:~@:%QMVi3N1%Fsm2$Nt2GU?;iBfY|' );
define( 'SECURE_AUTH_SALT', '%7-O([Cx5y0_~^wy*wy2Y8QxD+!V`+Qg> 3]<;_&YGpW0}L^s`hSGB[O,V>]hQW.' );
define( 'LOGGED_IN_SALT',   'NX*XF`u0`&C/x)LciyCjoi$;R75|kMk7:Ul/c&O]r@_oS6TDAl_rZq`$&~~6deZT' );
define( 'NONCE_SALT',       ':g4>iR&ya0N$^4u8bR|>,jY+N~f`=W6x[lRT o.wy;^+3K{n`o<ttq@SC_nGs5)!' );

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
