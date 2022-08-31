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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'w<$y$K<8<}..|RJ0`e<4zZ`eH3YX8cVB`A]#j!6m.ASMoknb0wZxs`*NS2=9iGfm' );
define( 'SECURE_AUTH_KEY',  'ift4Qg%LP4ndhF=oi$%3js|,ZLy]+<OU(jo=qX|8q$B?0E4F7iH%+x,<yqW)q vW' );
define( 'LOGGED_IN_KEY',    'X1Q]@~9Bm^2&+]k^Cm&A%B)YSUnZK.Mc{,O[{U:,yw5kWaUn/$Nl|~9_~[|-C.Yy' );
define( 'NONCE_KEY',        'mCx#jKuq{~.w1`;O};}Zz~w=7k6{a<#UbTGG>X/z/U4n=)^@;`gs?(tv9i:2tee2' );
define( 'AUTH_SALT',        'bU0G= fPHBnuo0FZI8SbNnCm|j4i~] DVp[d*UpJ2|{zvm3j?U$(Wt%A1@9V.ppS' );
define( 'SECURE_AUTH_SALT', 'Ul(Yf-s$jb:jm*|Viy!oLS^s3+5b_^!C(R!|<bJbt0z=OB5!Bmfg.k3A-TJ;kgqJ' );
define( 'LOGGED_IN_SALT',   'tv|9zYrGt:6x-UQ PJQfe9>MuvbH?]AJ;M?1kVK?CHFph]&DL=HnV%p5z+3|D]@=' );
define( 'NONCE_SALT',       'Iv;=P>]$M/ ?U6zV==FJ7G3){-pJi.&d-*g;RlW3}0tzKJH64(dA7jSOn9]HVxMq' );

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
