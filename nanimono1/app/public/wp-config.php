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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'DyTxgdRsWNbiH2Kzp+YcbWKQDTsi9McTWJlx+tPjVNWq8EsNP+gYnAllWB9kzGjvsw/+g5/lGWtjcGN3HhBLfw==');
define('SECURE_AUTH_KEY',  'AmASeT5BsdzUk0x6lNKS00mm0faQjlkTbs1YCGcKrOirI7WoNUbYVqcOwgiUKkXIxI0vsWRHOmkJesAqW3v3PA==');
define('LOGGED_IN_KEY',    '6EHy1xot+EMicdCF8MfqUhxpcQrXclQwCFcavtEyb9miwCQIicgmhOTvrj9w6EEDTjYpbpTgRwg0Jzm872BczA==');
define('NONCE_KEY',        'Ijdr0ij+ZbsGrZ69eEVGcFdS7b2KABvbXuRlMDQzWtRl2jdfkcn6ysxpMy8l8Q0azPguc58mVXZBq4N04LHh7A==');
define('AUTH_SALT',        'OBciHFvb7iSutFemYMr0qu/z7vrsKV6r+0IBoSiGWNucuQ9DbqUwu78PRmiEITXafdRhwGNSD2ZVSUPbbj0TIg==');
define('SECURE_AUTH_SALT', 'IJ3mn8g0RxDGJiIplSMVOqgkRrAFeXZEYCqcP/gqyO7DdSeo+TmCQfFBbTkrEx5uCTq3glaoz0gkshOjrGyh9Q==');
define('LOGGED_IN_SALT',   'Nqgr2L75/gAqil+iGM1CYC4ZdrBRIX519TZ7bws1WVpyOTUwwVYQtE+MFsiVRsfjEp/M5vtehd5+b1fY8lIjuA==');
define('NONCE_SALT',       '31upj3zG6UzjQ55wJtRdhkSc6EHJvfpLc61tVIAU6erTAeBxROvC6VkJSLBxFoIuWMe1/OdzfduxDGPRqiaeEg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
