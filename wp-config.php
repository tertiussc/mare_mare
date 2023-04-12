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
define( 'DB_NAME', 'mare_mare_db' );

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
define( 'AUTH_KEY',         'R4%AO tcM)|q}gg2oD@hRRiOprNk5T.-/XP9v$YoX?#|Xi7[csBn,;O$yDlC-M>O' );
define( 'SECURE_AUTH_KEY',  '%SI_B~fDP3_oIkPP8~)x~fmkG{g({I EZ3=KDhm9}(?Vp;0)+eK9[qbs$xYo[6~0' );
define( 'LOGGED_IN_KEY',    'ycm.Iv;c`PwST+3?IGBTxn@S]iau>v)+k~:$L6]/9}@9*SITn/|0$-&h`9*;.u*4' );
define( 'NONCE_KEY',        '%uG@<$<6D,`-?p3>$Z^pmsY,<C9cf3i6w$KZBDYM4%+$)fpb1,|0.BT7o+u1=cQP' );
define( 'AUTH_SALT',        'efU7J(8L^&bAm$ggWqaao:$;~;Iq% U-}Dx#]D(-ydSVay+n4QD@BGMi#E%[)Kl6' );
define( 'SECURE_AUTH_SALT', 'wD4enloya|1U0>u5&4Q#+3HA{D}DVeAhMCD. %z_Q># 4rQK&kBV:tHJ4EG|h(GG' );
define( 'LOGGED_IN_SALT',   'A1Z{@73#yzLuh2^v+/Qy{;ZhZ=~G:3:W_M`9yzui.DI=qOXHLxthP%T7jzG|W!8-' );
define( 'NONCE_SALT',       'qB@1oi#8GWLCZbVby2f&3g/7=Xcguw;PV7e48o_PSsty3op6vEDfVM3]mYJb6ThJ' );

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
