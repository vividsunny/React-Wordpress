<?php

/** @desc this loads the composer autoload file */
require_once dirname( __DIR__ ) . '/public/vendor/autoload.php';
/** @desc this instantiates Dotenv and passes in our path to .env */
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__).'/public');
$dotenv->load();

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
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** MySQL database username */
define( 'DB_USER', $_ENV['DB_USER']  );

/** MySQL database password */
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD']  );

/** MySQL hostname */
define( 'DB_HOST', $_ENV['DB_HOST'] );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QQ+GnmluwKc9XV8OiZrXSK0ZU6TI8CHgXKPD+JgBDBdWFKim4BbGVn9Qfw2xtdv46LynlCE6FoT4AtGlCOJoUg==');
define('SECURE_AUTH_KEY',  'R1jZzoMezO45L0BlWHmkuAyZ62zA/j9obUfoisdLa0GDRBSNJvt1fkzYQlro+KxOLSXRXNLfMMs0FZYPbZTk8w==');
define('LOGGED_IN_KEY',    'Q1058vXcYBvSbMMdF8bzLcbeth6NdRDNJjSeeLmJD95AbdutxmHTsrEIJp17IYUdu22vhQFrGJ3f3qoHGWBV+w==');
define('NONCE_KEY',        'hSrx+OeuraSjJ9SUxQRFFQfSRDdd857FujvvKdYj4OnnL5XfQcJQBBZ5yzc3/UHJN1z7/NUC84MSPDLELhjnQg==');
define('AUTH_SALT',        'QlpHpHyUv76WB9ZRpxTo/U06FJk46sJNxxoJpWHN13GCu7jFCQ2s0lD1nxoPDBO6SH++nXP3wpRhd0/nnBnm1g==');
define('SECURE_AUTH_SALT', 'iZ2o7uVB6QLZ9T2dqKAHVJgcN5FgloahpDDqmQFUoS0tTqyRhUZhPa+3N/N5KDrj43cw96w+Ilb+r5A/BixTbA==');
define('LOGGED_IN_SALT',   'cnCxtW4p++bpJ/WypNIASQwt+sHJFlUWa+NzuGg9mFPHdHfs1emZBm4A/AkOTSB9Zbje96LxVmYfCnxVknDmUQ==');
define('NONCE_SALT',       'xHpTGLA2fErpKjcEK5rNlAlKr7UAGUuCo6ehacB55uy2AVJTvwPz9zZhgK5WEeVTXbNTEo/j2jlPlB/3wEVIDg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = $_ENV['DB_TABLE_PREFIX'];




/* That's all, stop editing! Happy publishing. */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
