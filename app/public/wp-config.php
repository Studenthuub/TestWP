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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'rXQ_<^:Ex?9QQoEf;:&A:bGOi#Jg0tuZek`MR)N}s9s:NpZ,!y}gH[-iNOu9Zl M' );
define( 'SECURE_AUTH_KEY',   'PKwq7YX-b3!*+1)pA$=dl&&pn!M2V[C^/$b@ 9O{~dRG2DW-RmujFvq..APgQ~/q' );
define( 'LOGGED_IN_KEY',     'M:q2#Ogr::`A([kiw;|]=s={(4M6g=[a5eAZOE%)A8UPMzrtE1DJRi:]S6ac:*}D' );
define( 'NONCE_KEY',         '1$CNbmLJk|I}>!p/;J1D?+`ScV,D]AI#oPNElZ<ov{PtUV^2agMQa}C*dP)v8(oB' );
define( 'AUTH_SALT',         'N*pr4v5pfnqrDl6w,~YV,A]$#fSZwzuIBb-fD fgY<I;35L(UVUMQh5%VmcxPVns' );
define( 'SECURE_AUTH_SALT',  'Xw;a$$fXqjD9R0o,5M,Z5p.:T9$cw]2ZXY1^O_a$dn>TOw?J,Pfw^`TkPl#-.6p_' );
define( 'LOGGED_IN_SALT',    'WKVlb)=Df)=dyR4^myyGVAjGtc@UhT7xvDBtGibcdT.1vfy}!~NPL!`a?/KY#o,G' );
define( 'NONCE_SALT',        '7VS Q{+=s^Ryooj}@S@O,`.l>{Hw;t;Zw%BD9~p|>V]h+5S+2Wwh}M|=gCTtK$,m' );
define( 'WP_CACHE_KEY_SALT', 'p;ng)?#;SbfV89cf8+7vQ7w.w|+/!i-g6jetq`9Hdis(D}8H*;Upg[l)shv[GbWr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
