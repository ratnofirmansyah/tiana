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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tianaedu_webcompro' );

/** Database username */
define( 'DB_USER', 'tianaedu_webcompro' );

/** Database password */
define( 'DB_PASSWORD', 'Gb7^z4bna*$)p8JFFVz^pvqTP48Y1f5^' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '8&Iha[R@8uU5&K~PaDK1oi%OrJ9A17KvI5474]LHU68uCBoC#p@Bl6eX[iUxL#rY');
define('SECURE_AUTH_KEY', '6mOn%Z(v#92&2eR0b73#TgNz@!:CO(o97-)q(Cl&5Z;RzW+j8~;s1O]j&aIC2fE7');
define('LOGGED_IN_KEY', '8JwZzjn4cjYK*]6[e(QM[_iV)b/7_Z;Kj6A9Cttx350)Roaeh)9p9K:oP7K9+UYL');
define('NONCE_KEY', '_2bw:53ypK(#:f3b[|3_|A0EeD~8md&0)&MfU3Y4~|i)%Ng3@5+v72u1e];N]M&n');
define('AUTH_SALT', 'AK9fG#T3CBs1-XaP-X7Hj0tGJ/P%k%|d]qI6h%I]zY_Z76II]SF00kEcAEGp5H8)');
define('SECURE_AUTH_SALT', 'szqhE2p-M!|-T3S/3N7IXV:gM9O5/SO2*Z#ux9/(&g5+pN4VzL;Q~zG+WuyqK/KH');
define('LOGGED_IN_SALT', '7fy6E[Ork-q1#qA6!(44teZJF!4#wEIsJ#|ON7BnF[O]+;o&k72aZnh7l6X4@&8S');
define('NONCE_SALT', '/d1TfMh@o6--P7)X]mP;9b7_T8i0i&K4*6N(265@kf280m+/p[3m+%kt7Mt-])Z5');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tiana_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
