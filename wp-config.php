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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'animazine' );

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
define( 'AUTH_KEY',         '$0R}bQVcA~&^<]5cf?swDt{a7|&g)mdUd =w<=I5-NaS=Y`6f4}#Lo-QKgj5 .A*' );
define( 'SECURE_AUTH_KEY',  '/m=2.+W8Cj-F.YVH&FQ|T-Y:M(+Mgaed9g ZpYI.wwB,}m1&n#.~ZZSY2@O:3t$=' );
define( 'LOGGED_IN_KEY',    'X>xO[kr^ak3UZK )$liN B1cS8xp8zyZD4(jBRecP77-3Cs1^m _`/Ahpae(;El_' );
define( 'NONCE_KEY',        '36NE>16<INQ5SON-_1SrF-3f~?c=1T[3T6 D/6L [|*EfCyX|QIZXR~z^#g@]c[3' );
define( 'AUTH_SALT',        '3lbiGZHm?&v)D(E,3Ji &-1jm[:yGU[K@C3pcVng_Upux6zh IP20sW(ptay]bWP' );
define( 'SECURE_AUTH_SALT', 'Ajva,-foqJff]+),8[Gr0}b%T%e~S?gTd|AkZu>2/x0?sg.+V[%Tq[i+#rYtKu|+' );
define( 'LOGGED_IN_SALT',   'z)JN$odV^cODfl+M9?dP0 3C5qysM5U~_0k;^?gPNp~u,M./>!8KfEb8EKsE[.B[' );
define( 'NONCE_SALT',       'h?{ZgdWNq:,8i4U@@D4Hp1O*b-!X]S}@ozs[Ob|s|7>H:iq>&9VN+{qqy^HI[u`T' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined( 'ABSPATH' ) ) {
	define('ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
