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
define( 'DB_NAME', 'carestore' );

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
define( 'AUTH_KEY',         '~uUV*gNaWSpK8s[,Ok&9DlNB<1}L-y`fejKXI<x+[Oe;!5/uwV~40}~)t=KVv&U^' );
define( 'SECURE_AUTH_KEY',  'hQydiWT3;fNyQ~%88J{.5XK(Ri})OWVIM+R,Y&fS(9VTe5(<)52dg<x!Twi}H~fT' );
define( 'LOGGED_IN_KEY',    'KfR]8J8|bGpovpRbRM:a;_?G3(J0Us{eW;@u$!|i55(Q(a4q&TigC]7Joy^WxxAv' );
define( 'NONCE_KEY',        '6H:J>lmliC#@[&^fCW_&d%57GdmkP/;ar};N>I8<NQOM*v@Sn k^hE 7a#U}7{/]' );
define( 'AUTH_SALT',        'vjF1%#YKe?Muv+BvVS1f78QZ_ ^/j[2/Mi+`gUR_A{<ON>U(OXK,%kN{H0@EeQE6' );
define( 'SECURE_AUTH_SALT', 'nJ-V>@ZoP*~87rqMdyEv|[~6_V$O+igFkYjk_.d|rEqx+Q3^me{A<KS5J:;V4g*d' );
define( 'LOGGED_IN_SALT',   'oh2p{e]8.f5G~&sKKfT;ALAKoq/46-_Ebt`C8S^Y~Z~4[A3*a:&]Wl: 1,u_[d;m' );
define( 'NONCE_SALT',       '[qRu3@9QNR&iPg-#v&jH22N7?yBR}r9uj4/].IY ?^0lZ`3f ;2v%E8ovwRi>{-.' );

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
