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
define('DB_NAME', 'dev_skipass');

/** MySQL database username */
define('DB_USER', 'ozayats');

/** MySQL database password */
define('DB_PASSWORD', 'HNf*we8_1ewf');

/** MySQL hostname */
define('DB_HOST', '192.168.0.105');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Prevent Contact Form 7 from creating <br>	*/
define ('WPCF7_AUTOP', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iqSrqVwr[]3Eyi3-7TJo*fQR/6gYVf<tuRXHaGj=^5p_A[I---[$:jc:f3>o)cb;');
define('SECURE_AUTH_KEY',  'aK|PJ-i2[C[fe]I)$/kB >4$I#HPn~Rmx-B>R|H!;a5.PsD85!v,.@).L-R?zD<-');
define('LOGGED_IN_KEY',    'DX03 v->TRa67r4%)/0Gz!eQ-L!Km_+ttkjD.)?pTYo|E?kuhi:y~=EGD7aW8V4O');
define('NONCE_KEY',        'Hg4M-Nu,:82W/ya~3=D_0$MoUyNG-+iyXZCH?l(c%_*(IIWj^)M)0|o&L![tIrQ|');
define('AUTH_SALT',        'dP&+33Yi-.|;_D.Df-2ZnQcUD*($[+nuU)Zb5r|LZq7C,a~vT2NZ(p~+czaGVbpQ');
define('SECURE_AUTH_SALT', '<h9Jum<I(G-vf ;{mRtkZLL|+8q93-BoB~pZTX-f+T tGWNlm&)?U1-ohMp|br4>');
define('LOGGED_IN_SALT',   '-w,sCX|cozf_)12WRt!#3ph_hTRF=IDE+b*U}}DFea&|>BHBy,f)Hie&:eM2hl`z');
define('NONCE_SALT',       'Y%m!r{_b5OVs%W-+@:u!AmoBNja,.+<DlDH!8~F17#|}>;S0Y;@<<{F-w%2mxR]k');

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

