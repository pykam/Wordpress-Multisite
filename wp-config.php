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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'multisite' );

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
define( 'AUTH_KEY',         'HGGKGe>@F8{(nq&Z872:p;/[y~G+f#Gc(</jT?(:ocb+k!0LFy*fiy>B-`2+XGR{' );
define( 'SECURE_AUTH_KEY',  '@^Iiz$&$*(w<>/DgL/@+#0Mg!jb`]FKx|j$ 4A3~J-?*<5TT:Sd*MqLgFv;t**w`' );
define( 'LOGGED_IN_KEY',    'OK8IFlPN>k_`ho~}%!lEOM`01lI;o>hAFVoy`OY&BqvQ#ozlV?@7q*[eSAUT{/FC' );
define( 'NONCE_KEY',        'QtR.;JodqTO[0g9)Y]ou$84[grOUI2V=3fQUn4vQ]_oOV14gY~,b$x^r6Q|@6{gQ' );
define( 'AUTH_SALT',        '&d=eGEK]A{thfX`;+L&DHoiDSmb%&n;4af&T,fSbV1rcsG(-*VljStdMT-M>Ndyz' );
define( 'SECURE_AUTH_SALT', 'D&?&y@3x Bq`#liHI@LG4IQ}*W~V.^n0]1Lo>.c2<z4RU)#tu`zLz}(vH$b@nh%u' );
define( 'LOGGED_IN_SALT',   'jGDKoZL*g%XX[BBLvKEOJ0|{g;S=_VNA%pK+f>WB !(qWFImNYGO}++X5=M[@b,~' );
define( 'NONCE_SALT',       'eeT$-<![lTNF`Yg?}ze>_ V]VFt^axH8!%fWBL0NJpLAQD7hzs0w=_!E`?#qd6{<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('COOKIE_DOMAIN', false);

define( 'WP_ALLOW_MULTISITE', true);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'multisite' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
