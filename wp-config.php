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
define('AUTH_KEY',         'mwevBl8V97x1nbrJakU+Eou4TlxxaTSB8R2+ReWpXSVBFer/cThFkvbwBH6C7fX800W3c/sB5y+ohoc6sIFKCA==');
define('SECURE_AUTH_KEY',  '8ySyblnj8u9k2asvXZGvhjkB90A2lQNxIO7Bu0Zi0Y9ZcK3WiBitn3yeWbfB5ELVnabBFSaPVOkd8D+Jpkiqcg==');
define('LOGGED_IN_KEY',    'kdJ2jXSenwbhrVs7s0dKSwS7MALGFdvVBr3kTrfUYo+xRpT8M3ciG863kwu8oR4/aHzgSSwoFVN008m1XpwaZg==');
define('NONCE_KEY',        '0CSScr51bwWysa+X+u6ooxPVsmOLuViE8kNgqmPw9z1Rt8kpA5zwve9jh/Bv51E1pc3EKjnRx3krf3TwbsUy/Q==');
define('AUTH_SALT',        'HakaN2Zs/zMz7+C8tq2MuQA/LGQzc82dUh3lj+q1IviynQVhty3UdBqq7QFCCeOQ/c7mjq96Z2aFYGH6WseAkA==');
define('SECURE_AUTH_SALT', 'MUnClQ1JYKr9Nsa3xaQqzx3wTQ9YvOSp+EZx/pDCF21uaKXh7MKtyGBtMbY1+FWDrOPvJ7v/dFQdc8eYN2HSNw==');
define('LOGGED_IN_SALT',   'm0bQ5cKyyWEgT0jGCsVFrkH3/6cVsFM29fkGXC6iyhi1gnGvK25JFfDmGaj/BI21eNxkWpFbe7Jcql8Dso27bA==');
define('NONCE_SALT',       'EJA4ZyyO/JAIURA2+u2UM15WXPe/JlqHsYr50LzgkNhlCyfA8WN1jhblVbqkNWm2ZYvRDO1Mme4WTt7mqVsz8g==');

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
