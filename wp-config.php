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
define('DB_NAME', 'findapea_blog');

/** MySQL database username */
define('DB_USER', 'findapea');

/** MySQL database password */
define('DB_PASSWORD', 'INme3377..');

/** MySQL hostname */
define('DB_HOST', 'us44.siteground.us:3306');

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
define('AUTH_KEY',         'W+%[ZUc-;?>&}gpH,A|0|5dA/Qdhl~s>rb?%Kr-ogD1Oxg~icRJLwA{<sGf?Q[jz');
define('SECURE_AUTH_KEY',  'M&2^ye/b[KQ!e*hYDcq$<~OR}[7} |#+YnV.IgmV>`u~RC5,u,!;#h0ncRM3{h]f');
define('LOGGED_IN_KEY',    'd^`k;@]&%$vr(8%QdV?VjmsI-F`ciy7lc8|Q9obo>oMJfx,O*E}ZE9S`<[*V:tR+');
define('NONCE_KEY',        'C^T_RjeT4xlg4ip:nj47)!}lMM;jKdhIwuE GJCx%]!iL3l!?0WvTSYQd]j:?,$^');
define('AUTH_SALT',        'eO?P%iKv[BDMjE0~z=bF?.[<z )wr#Y%AQ9K6qWT$+@!TD9 |cl]#wIL;&EJ1s+J');
define('SECURE_AUTH_SALT', '{XzzxCwNbmOttz*y`PpX}[q}]@q-zn>!Z7RXq,A{`7nTWpM&]0j pHv,<k?<?]^#');
define('LOGGED_IN_SALT',   '/hl}X0]wS*k^xL83WNb463|gD0bz5G+M$|l[68qtku#tT_l>.k@X,-j{{`-apZ*v');
define('NONCE_SALT',       'W;mV>xZbR-Hh%u=FtL*8[>b qzN^yZPo<nTavv`?sR:_{+PgaY0X7ZS:CIoiZo#w');

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
