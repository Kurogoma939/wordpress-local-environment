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
define( 'AUTH_KEY',          'FYIU:2[;hND%)JjPm!=>.y)g* _B?Pqx-.2498{y-GA@|j-LSwA#{h*S0-v~b#1~' );
define( 'SECURE_AUTH_KEY',   '%]CQ1X4;FbSCv*vfOQuhXX2DsiR[>Y;5Z<h&>/JdCm]USl,9:zZS}$2=~JZ^}*<@' );
define( 'LOGGED_IN_KEY',     'oOH?U4zXfX@yHqofH{V~i>Ps;u%yoR#|pRPnpv,}@w<I3Q^[[6r^@OXS};?7j2{6' );
define( 'NONCE_KEY',         'q0yw#5J~wIPxz[M$o1a=.<@Su%:uo@fAq}i#H4sHn_~fusxz[X<)MdXV^N]$`NQw' );
define( 'AUTH_SALT',         ':Z8kq2~eoW~x&L|neePa64-pN1o!0)i;p./k}W&Dn(d_F(gokG}Do4sn9^mHX>?G' );
define( 'SECURE_AUTH_SALT',  'FR%grrhTj-fU0`[kRj8G%I2zFwXTMA11)MaPRu*}8ESi}tP> 8Pr(]+ZA99.8d,o' );
define( 'LOGGED_IN_SALT',    'H0K|[.l&qXdjf~6ar+U%l)[+O${Zqv=<Gyw=U%)P P]v+X%o-El#J9` =VOS7j$[' );
define( 'NONCE_SALT',        'SAb%L(`nE`xN1(A7R MUm#mwnWmAjizIaPXL5IHUQlQQ|y</RS^|.%~GNDl8)$]o' );
define( 'WP_CACHE_KEY_SALT', 'AI9!x^mvAXDO:)<+Dfq/DYK6 UqI1e +KU<8mn.=N}+:?)--G~AKG:v[vWMSwNAy' );


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
