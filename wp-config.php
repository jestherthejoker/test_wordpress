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

define('WP_REDIS_HOST', 'viicarttest.33s682.0001.use1.cache.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'viicarttest');

/** MySQL database username */
define('DB_USER', 'viicarttest');

/** MySQL database password */
define('DB_PASSWORD', 'viicarttest');

/** MySQL hostname */
define('DB_HOST', 'viicarttest.c4zxdnat3jdk.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'x=7!{s{c[S]pOZ=ZsvT@) j2/.m=C(M}Ud3$g|=_M5zsbue^).IPQ@D+iH5nYdL%');
define('SECURE_AUTH_KEY',  'SCuIk,.6_r)du0E>Ut4wSSF9mY8^vuV@`I/lQOmwAqA6al)!aaZL[/!XtUoqVLk-');
define('LOGGED_IN_KEY',    '#[3GZCK7JXh8Xgqp+XFX/]~qj[NE`<4tuMjwy>feAzn7.9_+B,_`u>d+ejeYR+|=');
define('NONCE_KEY',        ';)2ABM_ Q%ji`/mIB$4_`PSt488oqm75WdyKKHE2 +$bL2|0D0{?C9+>ME9?@u-P');
define('AUTH_SALT',        '|8;}]rzQ#:nCiH^>]G_!>8I2!):e -otOO`$zhH8{l(e>%_1c$R1W-X?#K ^VhyX');
define('SECURE_AUTH_SALT', 'ZH8#T;Y[{W2Y*u0U}Bht1c=7gM|$a,+ru)w9M=c|%v_~NK~)dEY[54GqM[qpBHWt');
define('LOGGED_IN_SALT',   'mKO##]f3(E/q$GM8{`_!2JuL#M KEkCbh[J2#U@K-wuJ:fv64i_QWE_ qjN]*nAb');
define('NONCE_SALT',       'nSLtyoI-!ho>eaznw1NkM%e8a6ih}dT0Ze!1l%#0Fvo}*~gIO$afV}/#%+kQ!*MU');

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
