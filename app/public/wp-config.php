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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'xYgzQZC1lAwvD6oK86ml2SWtEGGREfRcmn3wDyUyaoNGOlDM2UDrqCo3IC3WDFbJ6E0lT3N/sTRghyPfeK1o6w==');
define('SECURE_AUTH_KEY',  '+AnAfkT7Tu9AzrVr5zCUy9So2AqlPQ6C7vG7+y96je0JHgb0BlSznsejDrDd5NRhhCGCn5YOJg53vuuibvP7Rw==');
define('LOGGED_IN_KEY',    'gqIVQKH5ZyPy5db2+XoE+r9b3LHCchu5xZD2kPDRNPNtOSMDJKHYwgRUWuurWJrRo7ZeNdk/Vg9kcYEz6/c4uw==');
define('NONCE_KEY',        'Hho/Ni2YQRAqfkL9XRm+JHMNbhup/5OaltD048NwyRbMMxW1PIC+cTeTpdet5s/2vySEeh52/CUKz8MRjrxOKg==');
define('AUTH_SALT',        'Ao3GXlB0gRiwP0LuwxmmUCeUTTrb7ViREOjtSv0NKIvQswb/4PD5yfZngLPSbXImYvMnZK/IucvkMjChtFbFyA==');
define('SECURE_AUTH_SALT', '2EwCD8qvq7pBHBvf9K2vvdelhaIlWayFXru8gkaE77t7NWBRgYJhYH5/AZy9hPYFHMYErkSZXIcDi3FCbZoCFA==');
define('LOGGED_IN_SALT',   'at7W/yCKf2qFsAIM99U3Sh5MycozRbs5NBpF+RuuhmPi+CAwGfujJcBwH67AdmAkVFBHwpVLxUOdPfGFH4NKrg==');
define('NONCE_SALT',       '4kQ2GbvTkVJ4hJ8v3pEWMYgfjazwZ9eush5jDorvmvydc9tC+YrC0GIg6yOwglX7bR+zyCnaZGpTS0VqLVf5zg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
