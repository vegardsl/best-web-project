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
define('DB_NAME', 'dropletdatabase');

/** MySQL database username */
define('DB_USER', 'xympdsf808');

/** MySQL database password */
define('DB_PASSWORD', 'MZ25yRtHZWH21jOr');

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
define('AUTH_KEY',         '[t]7X9*1rw$FHJ:2T[@UX-LPTb&-p ]ZXTJ,-W1fHo[Nu|Fn2-3+-za%Bc4urYx(');
define('SECURE_AUTH_KEY',  'bc5mMbV|F?}qk_!ljL(yUPAQxWA[6HL>?<2F&1Bi|a{Ex ][<xq~{ly&0`V?tJ+s');
define('LOGGED_IN_KEY',    'd*8G/_MX7YZ=wHCGj1uxih,zzu?QkK8*7sGtg@xzH}J}i`JwST&Tp/`u84]a|+<B');
define('NONCE_KEY',        'xT40-o-Q7](^kRGx;eUF~,W:.[kMx( 1[Sf?8x0cYDrBz+IMA|,ffRZZFnHwCLI*');
define('AUTH_SALT',        'J0BmjU&kPFKcj>6d~YgGYP{9_o??@]R!0F4Q;cG8l4g;p|P<p%RW0}7KhZf9a@3p');
define('SECURE_AUTH_SALT', 'u4oUWpE(]JI_0j8kmQa2S6Wx;6y%3y+ZU:>[|M)~ln>}_l6.%02a%9QHM2e)XiDW');
define('LOGGED_IN_SALT',   'yDrU97ann|<@xh,z,|@0o(A5x|{@$m~-qe2SK6Bq,SENsX,J+(ss~A_$.P_^E*x?');
define('NONCE_SALT',       '>rs!KS3=$-,?Iv@Vy--`cfZ{z[V`}rwGtLo{+*eKE?U((bd5t-i3)z$;oH4YiXi,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dropletmain_';

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
