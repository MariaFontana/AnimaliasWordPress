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
define( 'DB_NAME', 'animaliaswordpress' );

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
define( 'AUTH_KEY',         'scPSW|e#?H~ES5Swi &+P$.P+n#n</|D{FC]8P)5<u#7o+4*.-:[-jG,)Sl!o[8R' );
define( 'SECURE_AUTH_KEY',  '$+J^ 6>{fc~<sFHqPCwsdJy*myZ10h`Z(p1sm^q~oe%2*bD!pRyH5/w+`h2>SVgy' );
define( 'LOGGED_IN_KEY',    ':c@w;ih+g9biO$+ku,f/{1Ff_&yY)M^p$k&[^Evo5^X>Hg3Q6vg*i]Dnr9CAi!I_' );
define( 'NONCE_KEY',        '>z#0>&u|v.:^i&Y60b@Y@U{uZ>nD??orScq%`Ub@?:6Y4x<AM!r!q9S7qr8QBYZ_' );
define( 'AUTH_SALT',        'q8B]yrP*vhriCI6#LMC![_=wN5;g!VyLa/R<f7:DdVFMTZ$]dQ@@>C`nGE$o])^i' );
define( 'SECURE_AUTH_SALT', '(#iSvW2`-Y}>o*mCGKIe%qjRH#)cy&[t{c[CevEtdS_/%g96t5_1Tyvs`iqXbj,e' );
define( 'LOGGED_IN_SALT',   '&.(m}#Zyt@ez`H%I/2:jsd,?}I=XwQatb@R>~[dUj%Dc0QV/9<mDxMHAwmtkC)Q$' );
define( 'NONCE_SALT',       'WYD0.kSuO*Y)nZgjn@`s!#m7e8tm;H!@9<. Va}4g9*o_r@*.a%M6+!t}o]J(CdM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pet';

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
