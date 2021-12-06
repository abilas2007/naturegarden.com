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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'n{+NG3Z@.]Rg?tQ;caLkU[B{.glNsw;t-_hXi`Xi81leF&(FBcP9z!hW>hsHP!HO' );
define( 'SECURE_AUTH_KEY',  'wB#~a@tg8rn[+@NF{6n&o38}kD@g:3x fkD_7sX^u#{x3RqK; NUQ{^t(LO]T0y*' );
define( 'LOGGED_IN_KEY',    ':T`aElj`{.bTa72U))XT22SjOkPsR3N%_Z0HB{j1g?7dPuma6Djd7yB&=-?X>nIp' );
define( 'NONCE_KEY',        '|5|yv.2z7{5%?crgf]VN~#,7}LLpE tn/K($vs+^^ELOyx6xPc>xK&smweRgpQ#o' );
define( 'AUTH_SALT',        'JN[@){`e%=HgJsVSa6>uz@EtE7B(3X6v{KdPcT-^$K:,dY- 5QCyqQThDJc#%|oC' );
define( 'SECURE_AUTH_SALT', ' 3>x{c&^f^+ek~W!2SU[T$K?x+[2(<sQ%S`4=Fzr5E4HDgzW0> 8Ho9ly%!m;oui' );
define( 'LOGGED_IN_SALT',   '_g#;29Yxuw_.mC%55l~N& AAUiZk!N{--A:Dn6Saq56i. Z|$T9l)QkTZSTI2Uq}' );
define( 'NONCE_SALT',       '[ G yB5T($(I^.x]W_<qtqtTCt0D45i/<VX?`Bib%<>kyc)I2rAOf$o$K?Ne8^{>' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
