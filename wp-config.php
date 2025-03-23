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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'pass' );

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
define( 'AUTH_KEY',          ';]uKyq)_F81_C^z5s&/?1He,Wnk>t#h;E+_P3oLPOt=yp$W*cB}TQiOZv8M5Ca9n' );
define( 'SECURE_AUTH_KEY',   'lOW,bJ/mvyFwnXh^!S![5w5W,0#{;U;7EMe737JeclN_GUgo.i&F~t4ZFh1=LY<}' );
define( 'LOGGED_IN_KEY',     'xvYO{*N.5[$+vM;&u<>%{+Tw*q0yLD&JpHX:{owvH29~C<EECs[O^o[kd(pxwovN' );
define( 'NONCE_KEY',         '$%(@sM]0A/t) PU~Pu)fuQ`KZ=G@ot~d)lLv=Xt/6vB7|1Ba8LP?yp[2V[,5~2oZ' );
define( 'AUTH_SALT',         ':A|tco>.n5x9~?Db-tVoa?*fyCo8=Uws9g&wwqpq-v|A+|OxQEGgM,`MrEI$0!D%' );
define( 'SECURE_AUTH_SALT',  '2Ug7]P e`ajoty.xK)|fF0*m].ZeY+c5CewfjOI8O[RksniR(F:;Eab-Q;O*1$[x' );
define( 'LOGGED_IN_SALT',    '=q32kS*}v9Bjq[AgggrRgq`[!yeQO,:X2O0eH#i(dF `l(bu/j/gJU~KdF_W?K- ' );
define( 'NONCE_SALT',        'cmiJhPg8snFcw6FN(]~m7<:?lmP0d4WHXw{giY5hO$R=TQF&A0e%6:/G586E_j3X' );
define( 'WP_CACHE_KEY_SALT', 'Q21QwRZzp>MU{a+t/sf3I~HL^=aU1g]+*g.HS~~?fJ-=?O~L{,~Gw#`M_>E7T/Sy' );


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

$_SERVER[ "HTTPS" ] = "on";
define('WP_SITEURL', 'https://' . ['HTTP_HOST']);
define('WP_HOME', 'https://' . ['HTTP_HOST']);
define ('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
