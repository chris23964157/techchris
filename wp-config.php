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
define( 'DB_NAME', 'techchris' );

/** Database username */
define( 'DB_USER', 'techchris' );

/** Database password */
define( 'DB_PASSWORD', 'techchris' );

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
define( 'AUTH_KEY',         'Ve,]#vO.z2GQ+1P lWTYU<A?6vjxZh@CsM=c$s|aQzEYuZUvWkdxI2p~OpDQFn}E' );
define( 'SECURE_AUTH_KEY',  'VqedOh6}Xs+`uO}zLVmK!SL):Z./vNr$@TcNR=9VyWD[]CWmavnXuChVdNZL{c_>' );
define( 'LOGGED_IN_KEY',    'Br!lor=1<IiAUa[5%WJpxV6JXwbe9FHZ_(}/<c*qLTT3OSZEmM=)J6n60Eswky`)' );
define( 'NONCE_KEY',        'U|gz3 }UThlM@V:JKuM(btAZEy7`n[Xr5@LwMT>QDyD^.3TDb#,/S8=t`zSb+=g;' );
define( 'AUTH_SALT',        '>JBd}K%K7}tWGw%q -`mG/SI.O;Y`6.;{wDn=ic-}]2JQ|/n@tQ;+!gB:!HJZ.kR' );
define( 'SECURE_AUTH_SALT', 'aN~Fn bGcY@%ik>O<mRsoDs%h OI3^nai0,S3>S:&0(@n_w#1{)-OO*f){!A_?dT' );
define( 'LOGGED_IN_SALT',   '>5n7Y3d%AnufUJgA/7V^rQ`beKoB#;9F)IGM<QjG]gT`A@?z hjq:K<P]Gj<K+tV' );
define( 'NONCE_SALT',       'R# =B%/J;Nu%,Sh;x^qoDo.RqrD9]3RWf21&wmGmwDs<]pR8fJM3?d`SLqH}0;eF' );

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
