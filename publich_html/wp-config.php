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
define( 'WPCACHEHOME', '/home3/dushonok/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'dushonok_wrdp9');

/** MySQL database username */
define('DB_USER', 'dushonok_wrdp9');

/** MySQL database password */
define('DB_PASSWORD', 'qgORRSbi9LcjwKk');

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
define('AUTH_KEY',         'Ja-=QK:#sc|1=WX|T<6@u61^II*BbosAi353=Rwsp=@(4bF=E9hi8ORt*a~WBPM3)H#');
define('SECURE_AUTH_KEY',  'YLYu9FsZP*pAkoA4|;~kq3X=Jv7i)moblG32E^-pgKKT?:-W3(:$SOU:lVGr4;Q|;NYbAWGs');
define('LOGGED_IN_KEY',    'Wc~7MG;vMKE_3$rF27\`/ZS?:Xh36o8ejzUhI:fSntt!jK#Xo)o/kSL:#fiZ!?');
define('NONCE_KEY',        '9PQ=hpo2#m-:DHS/sgz9b2#w5uUf!7av1i8@Ruqr=j0#MQ#A?@~BoE>RTL)gF9DF|ocW~I#m:rbKpl');
define('AUTH_SALT',        '4pZ\`AUmI/ZS*m3D~P2#)5IV/wWTC*Ik!Mrs!Z-38cM#>RwI!*Zm!N*eKe@nJ3drN*sWvb9-');
define('SECURE_AUTH_SALT', '6i5;BTzFk~oLUT4EBrYG)-V2p?)w^<YzXxp0-Yk/KAr)KnVIvU|i;sK:GV(vYCSl7WK');
define('LOGGED_IN_SALT',   'Po;nrIv~Wp-xzKBKRBks*H-HtuWE:CQTLW|o0)AsxnwH47/^OFS4>~XlM$@_9H(qwQ(PXhYwD_7');
define('NONCE_SALT',       'qpQUp@JyoMbt)4uIv/y:@g<>sg><RleUDx7PL:l2w8ddeKpQ>d!_O(|=#)h|d@h\`=$kx');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
//add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
