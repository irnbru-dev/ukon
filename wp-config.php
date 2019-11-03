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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u0816506_wp114' );

/** MySQL database username */
define( 'DB_USER', 'u0816506_wp114' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pB73)1Sx9-' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'wqfsbv5b9u03nzshbtvgkifprofrmeakq4hxubnob8ujbbpvyucsovxsefl88b8z' );
define( 'SECURE_AUTH_KEY',  '3ylvx2gthbqmuolsipdgy8trjqdgaaiagujl7scrf2oxc1teaqvrynhe19tzoqhv' );
define( 'LOGGED_IN_KEY',    'id0ujpnhdetsify72tcfhu4gjvix2hd1gtcyb1ma3cxvdcgfvqm75ygk1d02oocu' );
define( 'NONCE_KEY',        'b4xzyouhfyhdukxz0mxjx5uvgakp7ss6wvraj1hjmnzxzljorxqiqqehvxoskxmd' );
define( 'AUTH_SALT',        'swwolzo6ulcfzbvfxbdlmna8huk9mdihqcd69fqia4jheqq58t5jmyrtjyqmvunt' );
define( 'SECURE_AUTH_SALT', 'yt1kiuyyxzoh9nrtq9hn2lymeoq1otwaxxc6kyrp4ebgza72jsmarxodd52togiu' );
define( 'LOGGED_IN_SALT',   '2zof7tdi6gptnvpjxirxggwvuyqzoam5vveligl0qgmuhkrjenowryytjgaqucji' );
define( 'NONCE_SALT',       '9pvtml5xshp27nbibwga9ok9cvaq1gnvbc9s2g8spalb6wtnkiifjujs6oz6oasy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpma_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define ('WPCF7_AUTOP', false );
