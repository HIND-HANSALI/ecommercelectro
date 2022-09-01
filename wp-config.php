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
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'DMqAOz9zkY9ISRBDyOSYytJs4jMzYqzJX55z1hSddGWbUjYzT0JEJELNhoqJEF0d' );
define( 'SECURE_AUTH_KEY',  'E1jhLG5r6l1PfGAEIA5KYbmUCeMO7APgUtzINZDB67LGaLvD1imoLVsaqaS7AqMK' );
define( 'LOGGED_IN_KEY',    '5TLnoN1z8fPyklFRUC4GVkXHGcYw7p4NN7GxpNxPOi25bdmzh7VUiI3s3SJ0wjHe' );
define( 'NONCE_KEY',        'Lgi7BJwBC4cElZQF0j1VbkQcfnbrb4iSp8D1B4b9zHYAXx7B1zjH3KOWSuakCI7m' );
define( 'AUTH_SALT',        'ApgSDyqJDuz5Nut1LBtPmSgJ9Ky0A2PDrxS2H1p5g7l84sjhtgybeEjvPZgnvRGU' );
define( 'SECURE_AUTH_SALT', 'Q02Cgq0Op8rO34n6HBGUzEVfm2PXkPIygKYgl8mHYvZDY6MD5PRkdCs2ex2t19Gg' );
define( 'LOGGED_IN_SALT',   'lxvW6tBzBYslqn00fQkWXphCVomoGgXhoPGCaJQhILOJfPgWbcmhtu7nAyJU1bLD' );
define( 'NONCE_SALT',       '7zJO6HO2d7CCZrNdnloVwamPPQ0tGjwNPO389RSQuTOoQGLcMm423ffzU2pEt2V2' );

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
