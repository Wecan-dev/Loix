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
define( 'DB_NAME', 'db_loix' );

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
define( 'AUTH_KEY',         ',n5~W~,T9zgp^;f?Q,+B%I(r1W?`%?4oO@Y;kn9/L-p9kX/TF#FQTcw[I@,RkQHC' );
define( 'SECURE_AUTH_KEY',  '*[ #A1WKsVe@@fgl1g?aQ@Le0}XEA~MW,oj?}s0#<6RZG8/FfXvx aV~]|p8qsZh' );
define( 'LOGGED_IN_KEY',    '.LGKqjalXC1;PLB!$Fu0CajTYJ+yB08rIF8><|M. QL^X}a%}nV%l6^C<u;W,V|e' );
define( 'NONCE_KEY',        '- |K^>@2i vl>C<_jj4c#?F(qoRQ8G3W zcrT9{<}3T>uInM%*abAzhf2F#n[w!2' );
define( 'AUTH_SALT',        'c0Mx)9qS@=.^tjqrFpe5_j1.Jf/FB}]=S3-xH]-G%1JYQui6cq*1nv(hA!-95UfW' );
define( 'SECURE_AUTH_SALT', '80ci;MQ<F#ZuX<XF8N!K}1a!;&L<&N~A*t/.<1YLhq7##SNm)^mH#JfyV/[:5j6 ' );
define( 'LOGGED_IN_SALT',   '={Q!syX*bi?wSbOfFY}b~F9l92v&J=kYlAZcrmKR~^tpQZiGDz;8l+dh!>:ZI+Mo' );
define( 'NONCE_SALT',       'D)5VLEN;{j_yoB-%fSUNOEMDO/~0W7j%n-Z}54!?&%iL=JYU>|` |^)B1&N{)~0#' );

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
