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
define( 'DB_NAME', 'bhaveshweb_db' );

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
define( 'AUTH_KEY',         '8sR011xadD[8&~P*NM;l&PI[ml4r-~92X73[k5x4PlE;2:*SoM9}ep4Z ~.)THje' );
define( 'SECURE_AUTH_KEY',  'Y`3F~ofuD.0.>%`DaKdo4G6~QL4z@_.Ei1?+gujn->U[#$Uo,k9qMX;zA&Fp BZ9' );
define( 'LOGGED_IN_KEY',    'F1@@`|b:BBm08%x>#rePaVehA+3[rANhFwA;Y/Lc|.+Xyh}-_%*&f!Fa0Tj0Z|e/' );
define( 'NONCE_KEY',        'Hlzv-l}cCweE.Mauyf6})>gkTQ,S@r/$<tsS*1rNS3,TvUEjnNK68Jd:gmPH iE_' );
define( 'AUTH_SALT',        'AnOvan$qJVrGT=RoAp@O#yw~bp~BTKJ0k2N#)D >r0w}135%RZ. 6Sj<?F:2t9;}' );
define( 'SECURE_AUTH_SALT', '#`!9e$y.5TJHHY{:>7AxXPD-k[?A(:nU%f9,@H5}b`05B`d:nk8^Pr^jmep!a7Gj' );
define( 'LOGGED_IN_SALT',   'TggbBO#Qfl^oC_MU-(B-]w!5Zut 2;9i=`pDYyI*~%0<wrsRWFlT~bqZb]IHP,:U' );
define( 'NONCE_SALT',       'M+wJIP@(eRb7kQ*c3Y?ssD Fh%][=hkg[9u2!>yoqnOHfK.r-u{e[)+<4y?hmu!S' );

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
