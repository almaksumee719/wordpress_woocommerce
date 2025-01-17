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

define( 'DB_NAME', "wordpress" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'g.nZ$aYfmyMxi%!JlV0n_X6VNrp`,z#5>=tp81pT7-{xmh&!tdMX!#NM88!L^^wj' );

define( 'SECURE_AUTH_KEY',  'YV4y6,tL;,(;$$P#?NHal(9K.<*wV(mw-F{t?^R4Ssf+1b-XB_>jihWE7UiYg)+`' );

define( 'LOGGED_IN_KEY',    '8yKC%r@FIYWtMMK=K[rb>eVS$wjXcsTjU#`WEWe<%xlWg)d#wDW{;y{UO:Zjaj#O' );

define( 'NONCE_KEY',        '.ao+C|>,^[Ngx$~uaGyCP;Bv(my(K$S*_>bKn]q_z8eG2fJCbUWbef$UGd{B^?j5' );

define( 'AUTH_SALT',        'WaZhFXiJh4Nv`hJ-Loi^H@nbWx;Gi{>>T$jq^Fwk1zC58w5F3j/)pnev5 {(J_,6' );

define( 'SECURE_AUTH_SALT', 'XwTYJd$G:tv$@ MMPLW9=e^X$YA~4;SX{u<>6Ge,JJSSbqC~M-C6#2wub|a@%}1~' );

define( 'LOGGED_IN_SALT',   'E3??j^S!URe!+mf`k:JN?LO` {9Sv#:%CQrUL^e|M95$ki*5hY9C]o/my7Z]Aw;s' );

define( 'NONCE_SALT',       'vJ_Oj]33rYa#P=XvscD`*yL,ne7UZ;rD,Enexn.;$+Z3u`~!:-xSVeDsg[C<x/r:' );


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

