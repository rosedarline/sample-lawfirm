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
define( 'DB_NAME', 'lawfirm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '&+,.q&1/^Z9//agor+z? M]^$|[TdiW(W2XP4_5[>WPIMk#(?[>Q!)73xI)y,/~*' );
define( 'SECURE_AUTH_KEY',  'IR&Zy3;G!5YVe%8GP4,.)l|f_}Kcirmh;LRV*8d#yo(LiCb3zPJa@|:=!:`3im7>' );
define( 'LOGGED_IN_KEY',    '[,4y7!/,4l]Cp*9UvpA^(l(r]/OgW+$-tk[s5IAqfPDnqUCu>%7:DYnKL!^?kyyZ' );
define( 'NONCE_KEY',        'RVUpPwgGB}<9eH[;c012&y7A8?`Nh!be([JL|PC~/<DM,hKTO/vRbp..I.xIAi5[' );
define( 'AUTH_SALT',        'v.NE&j;EU[>e(Dmi*er2Bz5@RC|{xoq7vg#0%aVJpy-GUU~8{],`HNu/aRDs2&e9' );
define( 'SECURE_AUTH_SALT', 'pOmJBAU_;tW$;3hs[4siO_l~p[PzgQNdG9ScaX`?jD]2>`D3Ah:P1,h} &Xo17$1' );
define( 'LOGGED_IN_SALT',   'C.x&c3}-y[Y5PBkXTXuO5$+EbOl2X/~TUHp{/*h+xn7@Uuv_:`e](NJ0&oufP&J1' );
define( 'NONCE_SALT',       '`*Why&LJ/ta5$8,_koFWDE=,Wo+BTeUs*wkk-2$bEEmMu_C& Rojo,DyBtae<v:3' );

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
