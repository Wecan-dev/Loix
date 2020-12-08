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
define("FS_METHOD", "direct");
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'loix' );

/** MySQL database username */
define( 'DB_USER', 'diego' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root1234' );

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
define( 'AUTH_KEY',         'S<B4li2VHL7_(|AqA2yBfU5!!P~Y&XodbI!p0gJjkE?^kzUD)Ey3yNU6bP|L$p/<' );
define( 'SECURE_AUTH_KEY',  'Eum*c#Ms,$,a$#$/`%uMnHN7iQmk~xT]`>gta#=6CD)*)%aq0YZFh9E07bW%sm);' );
define( 'LOGGED_IN_KEY',    '$[hV&]VM[v&I`a17J(Rh7t&:SY:uSh%=kOuB@_JVx)O}NwM*?Qm`Bk9YPG^q8fr|' );
define( 'NONCE_KEY',        ')&LIdcW-r9r[S7h}PjF+#jELaY;}YKQG!]lQzEyZVq16rD&lLUl${4T?nO`,{([j' );
define( 'AUTH_SALT',        'fJ0I:;e1;SB&4:0i;|s$G?q$CG?.eE*p.rhZUauc/L`nvNzkFK=%a%.%j41~ZXij' );
define( 'SECURE_AUTH_SALT', '&5 dj]sq84}IKViM[ne]8/4]y%nJwr*p=UTFA^W2ZKQ/Iv0rIFpp(BP?ESEB=3C9' );
define( 'LOGGED_IN_SALT',   '^m0cS?%wSaf=tVK*fZw|iB)L(_)21yy?E3JhMzk>Ai/Ex}[/y6S=7h=FHd f50@^' );
define( 'NONCE_SALT',       'xwwca+*KAeX.e)Yv@h| 50X4}W#(t9r$~LZ 3b}:9$|U1`]*k/B>`JGx7(Un|ntn' );

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
