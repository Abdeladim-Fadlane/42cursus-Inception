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
define( 'DB_NAME', 'Database_MariaBd' );

/** Database username */
define( 'DB_USER', 'afadlane' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',          '*=.gCApA*nx~0<ak%|psmEki2F;!HQQYR8ODQXc8ar^Ec5(X5HO:EKzbpXy)]|Km' );
define( 'SECURE_AUTH_KEY',   '](pR$Jlo6-$R{{O%+j9JI<95:v.hJF3e!03,;_}4>TslFojwA,_mZFO~[i#%_I`1' );
define( 'LOGGED_IN_KEY',     'lB-VuaMmk[8vc`~Mp~Ym.zYXHd(I})3rRg^HqyjZt>[*ct$%qj+o7%ahb?lMuK,0' );
define( 'NONCE_KEY',         '|n~e xwH.~L~JmJyKnTRMBk~Vst3,+FPU @gcnQu8issEm:gUjR):31v:;XT-8+0' );
define( 'AUTH_SALT',         '$P<XYUx!kWp[%~OjS3%$cJ>y2t]x&Y8IXdy5O$$r8u6jv$-`cJ)s@7GX;}l.J4jx' );
define( 'SECURE_AUTH_SALT',  'H|0qsuNF1ob|`EZh]Gy6PL4A1Xn5yFL$W=GpLXcAV<`_+.^2|~ *TNaa1tQ#GO=x' );
define( 'LOGGED_IN_SALT',    'bm-cJ*C(|?o*LHd.H<?2H[H3 ,XA&7;h^nZks*|k~l6J58=RMIo%j>yHIdkA$(w]' );
define( 'NONCE_SALT',        ')a#Ni:3ox K5esr2KO.x-M{lK EYV9-)_IO(!2Hv5X[WNS_>*-@*|9IjVSL0K3_m' );
define( 'WP_CACHE_KEY_SALT', 'a>Z33W[]?5r9MqUOj/W,EScnH!GmHCzMHw0lTkLnRr>Q8JcR()SasS287lo|Z_`S' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
