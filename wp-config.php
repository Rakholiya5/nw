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
define( 'DB_NAME', 'nw' );

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
define( 'AUTH_KEY',         'n?Va(~4/+L8HAHcH)CV<+PmgDi4t*IS|#;3IjJf<n2W? gr &!^f`i-2{z`-Vb@{' );
define( 'SECURE_AUTH_KEY',  '%py?^;7WyNvWDA/2;)ZTS71{{b_I$[~8gVkWXlM:NMFG%g@l`^NW$?bw*bn%S{@4' );
define( 'LOGGED_IN_KEY',    '[eGH{8{uZ%&qgVUcigM]iz^42*dX XR;yT?ECLcb+s8~^#/b,a5@8cXf|FQ3x,_A' );
define( 'NONCE_KEY',        'vtYkafni3Uc<&l$xCE?,9jI_^i<p0K{zW<pfMhnd}=VL:;*@ZrLDk;w ;ca?Hs+T' );
define( 'AUTH_SALT',        '6LiT8o0]jbozd{t2+^1!0n%Q(9Ko *]k+Rxnlwy_G_>{)`iw6qAkyP-cB$l*`X`6' );
define( 'SECURE_AUTH_SALT', '&>>EuB*X*5#Ndb){+cCBNP&WnW#ri<P~(WiG.(~),O<!}AZ:FfxaH)[ulOyv*a$:' );
define( 'LOGGED_IN_SALT',   'k@Bx_qmVEC$/]w7W5od_#cJ +4<hFlzy* T)L`Y|ONsqdo4ILZ[K@i2. LuNMH~H' );
define( 'NONCE_SALT',       '>J:eGe3K 1H/|~.t<iDf w|Zc)fqiXM?iv>5Vm$MsuywZp3[DW@d6DLK`{X>l>Yj' );

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
