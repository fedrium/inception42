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
define( 'DB_NAME', 'MYSQL_DATABASE' );

/** Database username */
define( 'DB_USER', 'MYSQL_USER' );

/** Database password */
define( 'DB_PASSWORD', 'MYSQL_PASSWORD' );

/** Database hostname */
define( 'DB_HOST', 'MYSQL_LOCALHOST' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '2RG1FB&>z4q9nP#ktodp6$Lkl5{Y#p[ShXVcdGx%2zcrO|vksE@3LTKS#=v4yR5|');
define('SECURE_AUTH_KEY',  '?jH7vxg-!%Dcy/%{M-+3RQ:[tVXMv=u/%Y[5pYdXz}X)>_Q/##AArptmXD6w:qr^');
define('LOGGED_IN_KEY',    '+#!)Z+9-+R4zT|E,}fVK+G2*Q4]AJY&gFNI~%R2,&s1wVD?T8|B*d Jr:;l`zl<0');
define('NONCE_KEY',        'Cj7a36~1gYF~Y95$}E?)/*&#IPr#Gr<R`$&meRHl-ePlW#=(^AUr7fX1848:nm?s');
define('AUTH_SALT',        'Q9DAo^4Nb:GvLSe96&eL]Lx=0Cf#) O3RNQ~ -S_|3T{ ,&x8oz]Hb_?c`b|}^-w');
define('SECURE_AUTH_SALT', 'z`_+IYVI?yj&a?Lo&nPxb}W~$tB}.n|R!%W-:s1l$1>9Rgbzx4}JE&1P!JPY,R3:');
define('LOGGED_IN_SALT',   'FB<[qHPGaxVHX!/?R7X~^am/-oowo,@>_&Nin5+g;=dfs>Uf>C#N~VM) /CX&[2 ');
define('NONCE_SALT',       '8XH5ieUnsjR:juLo8I=GMd!!WiJ6>$7d5L=|Sw$MT),bjJ>(TFRYDeDH (bQ6.Hh');

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