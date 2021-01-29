<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'client_6011e03_8_wp_cq07h' );

/** MySQL database username */
define( 'DB_USER', 'wp_yifjw' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Xgo%3n58' );

/** MySQL hostname */
define( 'DB_HOST', '172.20.83.57' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4:ASuk)R;{mMCAuI<nx<l(CT`%Jpgo`&.AS;.E@CZ^3V^%#))J,4Fa:y4T>vm=3~' );
define( 'SECURE_AUTH_KEY',  '.3[i^!/)a#nkFsy[.QJ!PsKvrG$.+/=L`tc 4-Vs9bgBv@%4{rTqg<TZx14nGg,M' );
define( 'LOGGED_IN_KEY',    '1[!2O(&NlxXF$N1 i,nGZTqpUJCX[tl=$FN^ACW0koS-0_qE3Hct9b$&dsoZ,uLl' );
define( 'NONCE_KEY',        'rmjxO8MWOOlim44WR>a3G|PMsb=Z{=IwqL>TOhZTd~_RajBjXZwiBQ&]-2s>fMI=' );
define( 'AUTH_SALT',        '/1C[(S>VfIiL6aW15XQU;^U|;qDNBjB &7g]LjwH(2=>p6t}aX&%3JYB9Qi<8m|k' );
define( 'SECURE_AUTH_SALT', '! 9hl&rLNm~k4~9Ua&eLY-nK% ~[aIT$&!xX,.u9(nR./m*>UsS^!g(U[bII1z0i' );
define( 'LOGGED_IN_SALT',   '` [;>V$r-;EWu,M@4bf*m*2={^~/m,z`)}9$#J4rYWOMf5~#6#Ef.RCm &HGh=)$' );
define( 'NONCE_SALT',       '3lxLc6WWGhI8/ZK(v-8h]1z_Q[x[`dM{P0m}Lb}y5jX&KZb93gki5V:Z``(fL3?(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
