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
define( 'DB_NAME', 'wp_petshop' );

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
define( 'AUTH_KEY',         'bl}$$|_BhY}< w6a-9!CN(AgId`I2]b!6rAM>u4T8%G++w,?B<xh`KM:&g9Fk$I`' );
define( 'SECURE_AUTH_KEY',  'E`-K=< %?Ri%&rux3g5hMv[dPaz/^2dE6O<!>#%&g$Hl#*FzIlo<_2cUcno4Xc{S' );
define( 'LOGGED_IN_KEY',    '}I>`ajE}*8B/9Oyp=7&D5.5g.>yZ!I_EqX_h2QQRi)<V|69 +/MhX]t6kR/`{8L8' );
define( 'NONCE_KEY',        '|{~jh1S-c^N3nNZT;xwh@thoI7I^A70O@1(i|Jqilv O}Afm<#6HbM2^VbidNz5(' );
define( 'AUTH_SALT',        '`pE!*%IC)$*46y;Rc*TqY.c=yj]bD;*ist6}M27gswisifL]fuXlk6MO{f9]S!Xz' );
define( 'SECURE_AUTH_SALT', 'r<3o8VhiSk<HCmTNo$5}ZY<4j9x+|6RJDCb-aTE|.b`g*$d][{(K>|JGrV&{>$b2' );
define( 'LOGGED_IN_SALT',   '~Rx1*6ep5h+% !G(]prbp(A7IYvig,Vnvb7gp:%T=]bmw%;,+;4[7V|P{{cQG1n]' );
define( 'NONCE_SALT',       'S{A=ep]}[,9PIou[MCb9.i6qc6]8:TE&}|sw0i>61j+d|%r.KGWY!s9ubWZsb1V`' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
