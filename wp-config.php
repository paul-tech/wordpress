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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'b8st|E 6fQ6YB3_bf#Vh&jc4B8jiXX{3LX<L)|C:2>aHWxf@m<&>o6%gOGW6oYtk' );
define( 'SECURE_AUTH_KEY',  '?)PHF:7S~;v,,`HCS<O@9JkqyvYL6AYVNtvY;XyJ2NZi`vksw>49r3B1/va:4!++' );
define( 'LOGGED_IN_KEY',    '!$1+I#)ecVyNkz)b)ymA:O2#=lPm0_Xt)a|{g#(}Zapw` ?h0t,}wBqa+a*-v#KH' );
define( 'NONCE_KEY',        '#,Uc^(`.GhX[KkQkGBSde4 LJ.en41Q_O09`dV(PsTW[Y`=kV_!Ho#:Pku)h`O^V' );
define( 'AUTH_SALT',        ',VAEsYK_G#?sqQT@XNTN%$_59)3}Y{jT=ON[~x=elq 4G(nLGj-buztd!l4?e,7^' );
define( 'SECURE_AUTH_SALT', 'XSF=-xQD!?Ba&7R{t#:Kv.r<2Ady;azEs4H5cF`V8c[c. v~m6!EZu;E<u2n;%dR' );
define( 'LOGGED_IN_SALT',   'kgNZ*PJYsrh;@LL1p_]d//2-.Wn0vfG-B={yq}+i8>#)yo@Dec}ryv!(_H[&KW9-' );
define( 'NONCE_SALT',       '-T&.#-n*`<g5Q0nL3uix2=RFb{/mF(IXiZ&j.qC*s];2*KIN*Xo]{?RU0&Y>Cq0a' );

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
