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
define('DB_USER', 'findapea_admin');

/** MySQL database password */
define('DB_PASSWORD', 'TRfl6987..!!');

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
define('AUTH_KEY',         'qruKm;CWwDcNEhzbxhP{K2r33Dln5~V=!k!2eqU)z,c2}rD|IMQr~FM8l<kMn6[-');
define('SECURE_AUTH_KEY',  'atayK`*N[2X,c&=&P:GG<)@&`B=p_E#Z^9&Iq=DV` 7$S6mw7+mzYW@0c.a&pKZ_');
define('LOGGED_IN_KEY',    'q!)TWtth;{Z7d1!o}~kQ}R1q00#nH{{STb4<y-]$PV !0Cj-RV(M:rnpw@>V9K48');
define('NONCE_KEY',        'eV$KB.Qtt|=W|Pgku*S]Sys?jl]1H>z%Vp{.f<wFV+)_hVy9@4t0sBDuE0wNCF:^');
define('AUTH_SALT',        'p2Na2hTcvG3</!G!l`>[cBRo_?{*QnfvH/LJ`PM;C-/H/S#f<y4.J[{,Ah|WVTB8');
define('SECURE_AUTH_SALT', '^Om>q{w|:a:2qF^Q=pg,[-J7zazUutcuD-2x.<2cy&4gg= Nd^S4M2VU$JW+XUff');
define('LOGGED_IN_SALT',   '6h9)~AV<`q$BS6Z{ff?Y3obp_cAFiL4q8si|,YbxP7a)7Li7=:^{Mdk!}CVWPJ1Z');
define('NONCE_SALT',       ':c`}hCJxv6/5gU.crY#L#eL:Jg*:Xtv9Kw/a<}rj~xvbm2=]pK4J%sSzSaS :P><');

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
