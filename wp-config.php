<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'readernew');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '^YArY5rA0b>:fT`s~`.<M[YsFy+Tkyur:2;E0&:L@S;>kR79|YuI]Yt858alZSVk');
define('SECURE_AUTH_KEY',  ' l=G`d%YEuHSC;ilhyRvNTqx]ue`66IbT4G2iKWbLfu)sRV-FC?$N[k.<COLDF_S');
define('LOGGED_IN_KEY',    'o-8M {2]KoKWX@DI+.A9dx4sU+SFNVT2h|cOtEyy9>Hp: hyQ:-NVOzk;0`P*3>y');
define('NONCE_KEY',        'Oy+5%gP+zQL8MJRpf?|:OEJs[es?<$ti]6OqynyOsu_#:-?4|AH8d(6nn<r~u)Ls');
define('AUTH_SALT',        'EW1&T`O|wQO/ARw^04o6i^cdJ!Nuww:[pgkfz(?1z!(|JX390;X_*[`sK ,laoc!');
define('SECURE_AUTH_SALT', '^{66NFo9QW:%wvCB-&n#D2+q`9[gFwSKOo.tYrVeZ-F:6cV,{OBm{sw/wkSyd@.X');
define('LOGGED_IN_SALT',   'X90i)&<kE);c;lg}abT[ZFO^jo][V@iGC&5(Dh!)+;!c=vDZaFmtrD#;&rr+fCaI');
define('NONCE_SALT',       '@A/7c%p{;^n_:Vd`Nl>.1V$o0^5<&[ .0&AIoMX8}o-AKgPfZ.q8Si;P-T> n(&-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
