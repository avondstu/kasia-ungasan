<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ );




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
define( 'DB_NAME', 'kasia' );

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
define( 'AUTH_KEY',         'wdwmeyszduca9zfbezjphuashcmnuiyril4kbulzjm27wgvszkn4xxzztvsgksq4' );
define( 'SECURE_AUTH_KEY',  'svjl3aitndt4682j4ti8lqjyym8c0i1guqlrtekmstt9lkdigser8bmtodbbb6um' );
define( 'LOGGED_IN_KEY',    'exqwebbcfl6zhi2mv1udk52jfs4bibxrdrdlrau9opgxnbdvkwiplr4y0vwipe0h' );
define( 'NONCE_KEY',        'yspalidvsaay6gqtbv83sz8igkfv997zrmvnkimc5ieaaeeogna0sbcljj8fz0ku' );
define( 'AUTH_SALT',        'n9bg8pv9sd6fxooqxtltwmqf30eazbqwb6oaozo18ylnualoncv4gsdrploxvc5j' );
define( 'SECURE_AUTH_SALT', 'uvecpyxpvknrccwlca619hc0g5g1jjyrotmatretakmy3ccwtp0yecscactzq0gz' );
define( 'LOGGED_IN_SALT',   'bfjwoqmgw4t582o6rmhumbke1nkoextwcvjlh2iz4jf1v1wbx6v93lssfnyobl9s' );
define( 'NONCE_SALT',       'iaz4yhn8upglexjvicqc5diqyspx5mvdhk3kewlivxrs6kzq36ph9ugjg7niegv4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpb4_';

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
