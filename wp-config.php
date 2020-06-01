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
define( 'DB_NAME', 'Amazon_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '4c1~|pyV<XTQ)fkL8qG|89uN,EArj!bWIx_{BS_;L,p&ao>)XO}S8|J~$ErWrqIT' );
define( 'SECURE_AUTH_KEY',  '}pltU5hn4D6oj9O152,vgW7=RQ/5)CpEy6eeW-^}xt-65Mvgeb|3^~<E!=gB>{W&' );
define( 'LOGGED_IN_KEY',    '+-(yT_;{_/G#Ec/&iI9N3h~=PJFl#R/y [9~xhwAGWQK@w;w%anUrYc!2Cxo Z<`' );
define( 'NONCE_KEY',        'c@DY)ak1Z:2?`dzAzSIek%hH6]ww^_V) -j#r.rOP]9{j[78EEfg;3TDhI5(3BDv' );
define( 'AUTH_SALT',        '3%&I4A)I/Y&YtW-}9$jXd;)*> aj`R*mK!S(-L!zqe;!5Y3SXDxYJy{}(Aqr-!`H' );
define( 'SECURE_AUTH_SALT', 'E:k5{IW*9MP;cLQM2~^60S{^45xrBDQR85dF5tzK*eT~&x:R +;;NVYu4-I/k3Nh' );
define( 'LOGGED_IN_SALT',   'b:I.AjoaAygMFCZ8XAz.h3;Rx ,~nV/c6d+E$+M-`]V9IB&m211Wu.QW|B4/qL7;' );
define( 'NONCE_SALT',       'hfV0ltYG:UfnSe1la%2_|)HF@.`sB3%-Xx{mqmfR2PW?}cILL 7J?PjRkn+!l|.*' );

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
