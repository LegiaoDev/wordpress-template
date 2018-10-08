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
define('DB_NAME', 'criatema');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P**scJ}lha +BU/IU|i^+yjSgDH+Gfv`7~OD|A8QIjqcpC6A}_k%&1y|-f%~W~U?');
define('SECURE_AUTH_KEY',  'g4@h$*vM`VI-4cYP?r$FEZ:Kts-2M[D0>Q8,P[8}FKEUnF(fR#pM)N`>ZQ)ia&B^');
define('LOGGED_IN_KEY',    '(H;M1$2wBodLTZD$K92X~ww!Ksu0B)Dd<Xq&FT{W8JpcX_c)*+c8>v4GeyGwSX&*');
define('NONCE_KEY',        'd:NKi|.AOovKeD^^]_.l|FTz_,Wen?p~oxN71]E+U;26|)t0&$B@%MAC1p$a,Gi:');
define('AUTH_SALT',        'P+ejBOIiIG/Q2Y>COvir(MQDP.,OL{N9RaA!22q}J83gD 5b>1t-@g? cNuuRUp<');
define('SECURE_AUTH_SALT', 'wm9bqG;UH%qUbURUs|BDWDVo?Owo2~Xv<CMO#t=*a^]abHbH2tHl?1RnO)e8!Tvn');
define('LOGGED_IN_SALT',   'haco_D2($JRO/dLnV}By2eS+W[X5o{1&j%E4Hfq3WnIk2K2R]wof7++-JMMo,2D3');
define('NONCE_SALT',       '9^UomY?Xy@7}9Ou[K_Y=89zrP1Gc;|4P1_9lJgv@@*RWZV@QV9WIMv)Jiqa^kH@c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
