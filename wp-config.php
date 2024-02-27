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
define( 'DB_NAME', 'cristoreyhuetortajar' );

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
define( 'AUTH_KEY',         '{Z`2Oax-N.~T9MIfID&lE.dbZv9=p>5L_*a5AU|,4aK8`Z(0o}zz+!Nt2GA>p@87' );
define( 'SECURE_AUTH_KEY',  'Koei%E{h^+zW;y0c;-^Zhvd_pP= w|Et>W6B6W|gi%21*Ua^RV%9_=b,|ms!SipW' );
define( 'LOGGED_IN_KEY',    '0;hpOVKGk.>I MA^%xBV<z7oo2mk$6/?}sQ(x7nPL;0}iZ[Lm/*?KVhPiSJ/cYn=' );
define( 'NONCE_KEY',        'N1NdR[ZC?1EjRQ}9q2H!ar~}#DGS3%|}-.|w20,dFlhhAp=A~.@6qfD}0z2<W>3c' );
define( 'AUTH_SALT',        'juc{pSsoUr11bK+kJ{TWE+)Id9J#K*N1,WyV/[!`,e;|2.&7c)~lV:Y/8?R(Q^QD' );
define( 'SECURE_AUTH_SALT', '2BV.5=X2}xxR0S%f3v?LAOCDRd{w!?5lC#`Ex`<;|qV]9=m4fDu?;O5g$d]_mO$|' );
define( 'LOGGED_IN_SALT',   '@:@ZQ.{bjQuR)Tb``lndM=GiDYv1_{0H`6e;Uk/*fw>0QPI}lr{I-23lv_OK%/fV' );
define( 'NONCE_SALT',       '(cW@pB+3;S{r:;Sj&dK1MMtQI+[uixg/rI=)$>MzzXWD6d>H<>w@#bz5p%d fvHu' );

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
