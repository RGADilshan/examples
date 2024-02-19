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
define( 'DB_NAME', 'myportfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<[Ah4{Qqn1QRs9P[{WdMJNsN]PRmo ^/8yh{-ZQ$n{x>C>hAzo}BWSdyzN!dT>`7' );
define( 'SECURE_AUTH_KEY',  'Fa KP>HpE6RtO4{ywG_ALE*E<NOVvq(gIuCj|B:FlzOmmha@H)))!IeJK*z0cuD@' );
define( 'LOGGED_IN_KEY',    'WrKKhbr^TGr(!6H{|>e8+_Q=Un?{PMYw0Qe8_]&,4#,-j)]*ikG7t`3JN?Ec=(oH' );
define( 'NONCE_KEY',        '4! 7I.a`NI/~(VND!DczSN^wsOF]0Kw;Jx86Fr`58JVG~QO16^z!2t:8I|!n+Y18' );
define( 'AUTH_SALT',        '`A<Q+J[%,34WQvQ-7|Onk#001Y vB2~`CZE:^(!{Zinlh{w5;q7T]`/N<AY_tBL$' );
define( 'SECURE_AUTH_SALT', 'HP0[`eK7up|aA=a O.3t| oI{8,vB(&vnT^9wyB?o&&<EGm8>!/PUs3#^wsC}5;S' );
define( 'LOGGED_IN_SALT',   '&-CB:_/sHX*7dHx?IkOZJAVW%&ob-3Y0.||LiVgX~n>SUVG=/axu.FSW40j,%{J/' );
define( 'NONCE_SALT',       '(Tpr,WwKUig:,Rmfo~X2KrHM[DUT? +KkxS+OuF4<{iLzBCk@o^,wmyI^W9ADJ/O' );

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
