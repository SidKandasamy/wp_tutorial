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
define('AUTH_KEY',         'uYaR/6Wk77LY3uDZgOTpwP4II/wNNn2xgJMxUzaQD3bxCrh+z6wy/H3P35EhPk+ICXM3NviHTq/X9DwMrtfO0w==');
define('SECURE_AUTH_KEY',  'gFDyjz510rcJigrBzp+TcM7HF4sdQKd+/7dZOyOPyK9OXhyTvEvTUy5TC6eVDbuEBjEZwpSF3Vg6BcY/NwnWeg==');
define('LOGGED_IN_KEY',    'UJ1ajLr6FagfR8+W8nEQMR15+pvkKgU3I0kYFzwlYovcUggpMhIvJCBblY7XL/dUVHwEAep15fXE7PyJij43Wg==');
define('NONCE_KEY',        'KbXeN4EHN7NThEzziyaZcgKHZiMQ4ABTm20KSIm1iS9ubALwgkwcuONnhxRUbyZw6A0EoLTqLzBeiUk9Ks9rhA==');
define('AUTH_SALT',        'l6jF4mx4Y7k+RovABDAcj3xoffQGKSpGxq04RY27yQoCtJfI02gdxjqVXdehIvWS/EkmVXThSLSuEHNi+0655A==');
define('SECURE_AUTH_SALT', 'MPCaq6KTuoEfHHRdVNpRi8gibCWytkngUWYXZdi5duKsk4Vf+r5Vz6s8GBIbQoG7A+OwbaJf8Kbjvecy7TcXkA==');
define('LOGGED_IN_SALT',   'mn/nt7jc83s0cQ9z9Up04w3Xq22Q0C/RWBzoOUbCZdWD/a3DaE2Finz7Q5aesDD8ckfeNzdg0wbWNvoO7MYPEg==');
define('NONCE_SALT',       'p9RsoBBVBssUT6Gx+XJ1EJp9rhW5Bqh/o9vhe9u8xV4ZswTBElxK8ldeErAm4fdPJa0pnpidhbzoV4xsSck/ug==');

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
