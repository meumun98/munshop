<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'munshop' );

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
define( 'AUTH_KEY',         'M!%)eOV&<YzW[I(mN o-5pWE:Y9J^/ n[MKYy>f.bw%0e`oaU{NL39Z`of{n.Xa4' );
define( 'SECURE_AUTH_KEY',  '/NzW=kUaRN*cI.|&vuafS%~ba)i*FfSVUY[=?e,R^W4stK|t{(@IDl!O>w{;ZEjR' );
define( 'LOGGED_IN_KEY',    'kFK1*5le3/.Q6(),+P^E6cAhNSuW$v!Zhp8&aNkA>JPGmq)^M.=[pDhkvPm2{Q]&' );
define( 'NONCE_KEY',        'uN4,2DJ`QaF0,,Hj!8+Jsd<V@l!f3m|;+IJv9/_&avoRo4HD$_U?2LCHfc%gGa#x' );
define( 'AUTH_SALT',        'QtTW535kgOnKqS);Nn/Dl2#Tosr@[V7>u`v^) z`{:AMI(8{[4&Mn4($#B+o25xE' );
define( 'SECURE_AUTH_SALT', 'Pex*{zDyea$}r#{J|,]0&|LYc@ e$X~Y/x(*~Fq%PsKYS?B<@pqgO{(jaXcks1yc' );
define( 'LOGGED_IN_SALT',   'l8ru=s<}FEXg $5VM?g+;&=eLILfm~eY{&EP$J6$MFZuX_BzH$(sc3g{7=}f-i*{' );
define( 'NONCE_SALT',       'hn[]oI:Mt1M%(uE<NH[lYJG`xv){]uhw.E`)@fla2P%5S_RS!8uM>wyOQVTI$Ho-' );

/**#@-*/

/**
 * WordPress database table prefix.
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
