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
define( 'DB_NAME', 'wp_hmall' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

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
define('AUTH_KEY',         '?+ @Y/ov}yizcDM83@0KRzD-9M[.`j G%mY]S-dJ y&q,7D2k~F$)|yd{WsH3eQ3');
define('SECURE_AUTH_KEY',  'y 3J5O$8b6u;5;qLKRt^V Ga/&=XOKkrs21]*&CVl1-|>Mi[mk=5F8D^y3][&D}`');
define('LOGGED_IN_KEY',    'L%e{-?d_N/4^Svr2B09`sK~#&;H*^!(>F@%K^_6mB5Bu%L59 v8+cIopUko[xV1R');
define('NONCE_KEY',        '5-*<W3%6)U/R=+D1j+X1bO7=jDP!:o&}zo[=yl+PwEu[-%Fl+PVbX+I1*o+]vMJ.');
define('AUTH_SALT',        'HxduBN>v-y^6Cp-]f-%$L(K#Z|!(K|/IME#|i;nq<&-<`37@^n-Y.+% u%Tf4iih');
define('SECURE_AUTH_SALT', 'JufT^BOV+Hx<-4Hm3zI|vj{Ro!4~K)UuH?NLV]a+dYLC{DD/l(3&9]+v_9z_A(SP');
define('LOGGED_IN_SALT',   'H4N_Y#aTa5/(1I*};~/$iPr&#2S>hY9|ZG/*AK5`I6L>h%gk^kut#iYhWAt$R6U+');
define('NONCE_SALT',       'z,Svdtxg_vz264F7lp5w;#m%~4zz{j=:ud8_H(<v1:h4{HA%?W{~GJ[hNAko=Rb5');

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
$table_prefix = 'wp_hmal9827_';

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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', true ); // Recomendado para evitar exibir erros no front-end
@ini_set( 'display_errors', 1 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
/* Adicione valores personalizados entre esta linha até "Isto é tudo". */

//define('WP_HOME', 'http://educacao-homologacao.atarde.com.br');
//define('WP_SITEURL', 'http://educacao-homologacao.atarde.com.br');



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
