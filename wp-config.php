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
define( 'DB_NAME', 'pholio-wp' );

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
define( 'AUTH_KEY',         'H(2dBHH:u!Drj5+5 $9W:PZ^BR4dj4$>q-[ML>dK%Q_35 )81d].sGFO2<sT!@)E' );
define( 'SECURE_AUTH_KEY',  'i7D/$dUuQZ!7sROqy@<8KIc4{mG~nL)OI@pG~+0$Y|8nBu7?VztEmk&Y4~ISz[9e' );
define( 'LOGGED_IN_KEY',    '<~e?G-&(klguNVH0WQ%4iKldx[oerWqV8zI9L08>q6+HMZ@n>xS,H;7us}R5%9[)' );
define( 'NONCE_KEY',        '7UwN{p#uJUr-&f1/~1y87?m>8lBzkwq),iIB$}eF?k||)MPEP&Zg:*{Q&OIirsJ_' );
define( 'AUTH_SALT',        'k4q}*5vsX#Di>jjMV=Kn3iYs{qZGg-tdq=z,/8K,y/M;~+mi]>gexXA30dRtP&>q' );
define( 'SECURE_AUTH_SALT', 'PalpN*KhAD-kH#K/ASZVGV)Jr6E.6)+-X1-U>RdBh#i(;UMy~@)A}[HH0(bTOiRy' );
define( 'LOGGED_IN_SALT',   'ajS<[h_N6L?gw%6#qEq^9b9}[ %?|jI6spS-s!J%6e0(S8nOUS~arvvjRZ[&Q}xd' );
define( 'NONCE_SALT',       '@]n]amSuot3ZRnw9nj_wduNBV_:P72N1UlI~g/Q^Kp3b4a&sbvMjdjy6$UiHj8O+' );

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
