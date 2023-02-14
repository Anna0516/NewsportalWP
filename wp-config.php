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
define( 'DB_NAME', 'ae_nyhetsportal' );

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
define( 'AUTH_KEY',         'JslGt4/XSqaCKjU,3-P3n>3D}K*n7SG@5:/ov/>(6C{6{d@m>;5]CVI|FP8Av&OB' );
define( 'SECURE_AUTH_KEY',  '$6p9[LLIl1H%])7l:sfY[uyRhOG$8&DZ%>;+sK~[8nns7_iudxHCamet{lOH:Kkv' );
define( 'LOGGED_IN_KEY',    'g3pNKxB<?/J<(IkIOz+q87*+;T12p. JUm[2KT70n(K,zm]}`|xB9dgp@&}%Dy,a' );
define( 'NONCE_KEY',        'o,4{S5g:86~%.(*cVlZcw9Ep-2?hq@y ` XM(ygUf ~pwBUgb8q!!VLgrt`}Fo>p' );
define( 'AUTH_SALT',        '?z:!g,,%1W)U=d/rsOaqG8vjY)Uo-=[M_Q!qDpQwX7/j>wIvT@~Y- QzY-o}5%&k' );
define( 'SECURE_AUTH_SALT', 'x?hK:<1&*HS{b;tjjn]s!+14LHJhkbSHZ`^M5c$ub6s-@ev[|8}k7#%6w=O;40 q' );
define( 'LOGGED_IN_SALT',   'W0z;E:pB;$lc8n0Jg3nT1*Y&7pjH{:%f1Q*&n&)vhvQm_Y|IORx)9:{+:fy)FP<2' );
define( 'NONCE_SALT',       'fiM+t(a~vs =m}Y0->z@Px$N3^N|>O LcOSkoCv`h,XKB~;|0S>YlWlmpA>0w+:8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ae_nyhetsportal';

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
