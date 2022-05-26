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
define( 'DB_NAME', 'Test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'maher_db' );

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
define( 'AUTH_KEY',         ';[i*z9],5->#NSig,Ar}&|]6g>AKjs5H1lJmsoO2FC4H=PZq?:bd:f?e([pwafKp' );
define( 'SECURE_AUTH_KEY',  '&/*/5PM+gU70r`rUpEi.OpR5RKW_( *<#EAO9-ZG%:Be>.~/aQG5DL9|E-W4.g4.' );
define( 'LOGGED_IN_KEY',    '=BQh8tV,fO4!(6%{r+#jHCW=x4Qo`B~y2z*f?bJX%.=e5-.mNpVpCUnrYTf5lu92' );
define( 'NONCE_KEY',        'J`+<A1a.G1mh>(.VDIrTE^7y}1`_^iOw@Ojr.!TRKHht$HA:|SV+0xDV0g{}0(u~' );
define( 'AUTH_SALT',        '7E?JP:aaL];!T_/3q<-Ww_aD#_k<%Pd(3u,PUq+pSs^2L<<pfx|,CK%=jg[2N^oy' );
define( 'SECURE_AUTH_SALT', '<%-:y4zucPDN0(xf1et[7SI&Gs&ZnpS|]~js#>| TDTX+S$&FcC8$J`gaF%x.(8I' );
define( 'LOGGED_IN_SALT',   '9I%?8UoPxC_j|-i!L.TnG!PM,LJo~0QUP>2&nRC;lm>Htw)s=i{cVVrc^_Co OET' );
define( 'NONCE_SALT',       'EzO5_?|!AGIlUgWHs|r/r:{0Cvx:@GcSGnpMC7so6jt&N%rUh00#zl._hCr2|c~z' );

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
