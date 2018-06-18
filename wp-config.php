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
define('DB_NAME', 'morphozwebsite');

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
define('AUTH_KEY',         'cC|2z:m(/b(!G_AmZqNl(7Jq%;WQr$?LX<Dv_<z)Dg~}=QI<NelD|F5HhB4kYV?f');
define('SECURE_AUTH_KEY',  'pQ1.oVO6}C;h6@vH&Lx)s*Nu<5`l {Zcg;3A_f<n9PIw_OEe6*FUUu[)lluK&O6w');
define('LOGGED_IN_KEY',    'SR@zf1nc7pZr|r&F%{}k!SL_Y*E%jm~Qx^pTO}k8{.+hb+hE_|Q5GH^e5hSn+1Ae');
define('NONCE_KEY',        'O]A,BDw+fJ&31HRm-(_zQaBX*kNnCNkd^?}D4]4MF =nX,Iuk9+]x--!9nS+`;9K');
define('AUTH_SALT',        'CREapesi1XwBMd`4Q@U12fQi/ojE([^^xd7c0>=IC0VE1{!doKm?[?< tSlCLQYi');
define('SECURE_AUTH_SALT', '8!,u6HrHL{gSEGP3[{sr](|`14.C5;wwEml/YpQeR5LAax0?K-d,!]@t$4S)jl`M');
define('LOGGED_IN_SALT',   '6``Yh)_+veA>#4cr(z!T+8OkyX<xKzKD3q1d#{5e$9K:2,<wDc6E`M]^GtJZ@<R.');
define('NONCE_SALT',       'E~]4 r0i@$`ENq)K([rY#} kNg>o%IwTGsi7^Tl+(to,JPh#gxG;,VA,7F[}!|(?');

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
