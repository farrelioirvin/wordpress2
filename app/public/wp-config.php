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
define('AUTH_KEY',         '6uhIOHYghfk7Zqe0J7RwsRwDBb8nECCLaPZJ/ySnW1pdllctx+8cVAs5jFaXgvwgYv2YqOXgxCZVtEbkAIPH9Q==');
define('SECURE_AUTH_KEY',  'C7zVyA39liHleD0UnMIHhJSgDDJeSG0lx8Nt+M3leLkEJFggoFJqrAWJxVvXVNjIEt04a03ce6AxLkB4ktS0sw==');
define('LOGGED_IN_KEY',    'nJEtMs1HwCl2xcZEnRTT3NOH5EHk0TUcVeU5y16a2EaGob+WmiOoy9vATa3gijC7p/jexWH3LcfL9LNAnyvrXw==');
define('NONCE_KEY',        'gN9IFm6O9oYAjnFvQIlXNGE7Mtz/RLk3aEldL+UE9SwWf/rM+p+K9hEK73O55mEH7Ta30Kqpf4WJ29U6d7wzlg==');
define('AUTH_SALT',        'IiVgfi45a9mrcVri2yxeFPRf8ZrwO2exmFqa00NEKUDNHhpw5fu98ZCb+DMVt64Lh/hRX5m+dVUh717ZaO6hFw==');
define('SECURE_AUTH_SALT', 'oN5+rRIM4I0ik4g4rrkMdQ/wDhurJtuNk6EIuV006udBjtxJJ/iF3eXVmPIQgZde/mqK5ZEXFNYM0ajTO+Yyrw==');
define('LOGGED_IN_SALT',   'aYWCsEJ7m0jYiWvzGtb0zpIJ2hQ3o+TYQpDar+aSw7Y/x1RtvlQsvny7mlbxKlQ45uKqfvZSCvmTY9/Qq7/iSg==');
define('NONCE_SALT',       'JeNCKJfNXOfMW5PhTZNON0C/KP+msY5h86CSAzWevpx9fdumfSaiPr4GcUtaE6Z1QdL3waU39WNcIedblogZEg==');

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
