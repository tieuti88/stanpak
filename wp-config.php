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
define('DB_NAME', 'stanpak');

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
define('AUTH_KEY',         'on2[NR)T5.<dS%y^u]=</_/k|3Wi.1jQv+%t^ w1^c9G*UD4mv*rNH/q%`cJWk>_');
define('SECURE_AUTH_KEY',  '6&%qM@2O1IW`.f!u~Rl148nd/uY9Uu8ok_Qxknj@!R)C)rz/`QeAJP93nKs!AVK+');
define('LOGGED_IN_KEY',    '42kzFn`]j&]:h,nxf}1*ESoN6[vj]>nwfmc~rON0B(|0T,b6&Uby_n8HJ|7}`#>/');
define('NONCE_KEY',        'eg.(i_mF0o0j!xsmB`G/.X0qh6w_peC?bMG%IU,0q8?6^J|OA][~}utX1w#r`f|)');
define('AUTH_SALT',        '}RLj~&L{ *9=|,[A`3EUHOPtP+QLNqU[G&*:i51[N?J:yvc^2H|/36{k#jZ/l^Nx');
define('SECURE_AUTH_SALT', 'Ai{N5y8NW2ns~!EQWhP(PlOhhFAF9:Jqr{Mb.tSXgE9@OiTYX7]c<)9aP N[IX}(');
define('LOGGED_IN_SALT',   'V(gMLXOdY_M2951ko=;IHeeAe<6B/`Mu0e:9ecw!&.;J!&^QJk>2D4 d](//-x@(');
define('NONCE_SALT',       '1l&-@GF`>,&Yij[mb_ `qh8.G=_p,7Mg.ht:-=zJcEZa):`s9kMf0vOkgNcc7.mF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sp_';

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
