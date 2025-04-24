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
define( 'DB_NAME', 'tech_consult' );

/** Database username */
define( 'DB_USER', 'lizconsult' );

/** Database password */
define( 'DB_PASSWORD', 'consult@12345' );

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
define( 'AUTH_KEY',         '&6._;djU qgEj(E:8*&s{g][g/+x!UX5R}##Bhom6J9C^NB$fn;?8bK-8Ox{UFy6' );
define( 'SECURE_AUTH_KEY',  '3zJ_jnci.#^uqj4Y;=ch8So]vQwY-to*&CeL*OV^Y3CW~F[dX;+eTMTb,+1JgF}u' );
define( 'LOGGED_IN_KEY',    'Om_)5]y!%kR6Xuo:r*gG0Th J5E?w0;*R@rk^s/fvW;v,&dRYG%0z+Y9;iXaZ2sB' );
define( 'NONCE_KEY',        '>(`jOzo2i>4#E7N>HT3`>OLQ_WNK6`D d9<:O*[zopVJ(5O!orLtxv)j~TSi!#+%' );
define( 'AUTH_SALT',        'o!#*Tt^jWCvH_Y^M%2?Fsu(V)n/~P>hYL!F-x(QFpQN,wsgRR^yu`jLQQ]EairCC' );
define( 'SECURE_AUTH_SALT', 'a_1E;Gum?P@MgL<!)5?,r1O&L#K3s^.<eIGm:}Z7o*jsIhx*[.E|z+qvfaDQbAX!' );
define( 'LOGGED_IN_SALT',   '>6QiQ~I,ywa?x#sR0]pZq}j7F0f]qf :<FB9e[j20h>L:Ob%@;o]y2&ToK2Tv@ma' );
define( 'NONCE_SALT',       'z^a.b{{z9(d@{qEu7/;$1Gi]63;|z78YKDTJt:Z# S$9.wr8ILqwb_z]U?@;rt^*' );

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
