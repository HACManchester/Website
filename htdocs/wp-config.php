<?php

define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/srv/hacman.local/public/htdocs/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager


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
define('DB_NAME', 'hacman_wp');

/** MySQL database username */
define('DB_USER', 'reasondigital');

/** MySQL database password */
define('DB_PASSWORD', 'reasondigital');

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
define('AUTH_KEY',         '>-md}%UO9iJm{e{uJvr-dj;o)*:I~v:;FGr8I{Sr+8E6v*|,JwJRq4f7K6.uX|t|');
define('SECURE_AUTH_KEY',  'sI,dQh~57Y;nQD)8K|&}LlXxEh|&}Bp|A-EZNI=R|oKFa{`t)#rcsp,<I!X|5iS@');
define('LOGGED_IN_KEY',    '#V}3=hB@t3C{b+*c}/,X_4_+{kN{;F#-bVf^gu;0-N3)338Ng1JCKt=_]LZ]x3Oc');
define('NONCE_KEY',        'a-7yC+zMlX8{V7_ePLrx]7`SYyP6+1fneE&P)ow#IXJ]<LS0@5{bwQ}TE+p}}GyP');
define('AUTH_SALT',        'szqw9UqFl/!yiSgC2^l%B]3@2Bt+`EOI^.T]j?}$v/&ZyI!)KhS< XU=-6ITKXg/');
define('SECURE_AUTH_SALT', 'oCvOuQqi9qRC#EeDv 1:Q)nc2%:mAkOIX/c-~dY=k^By081)i5JSR!gqA|F@|^!M');
define('LOGGED_IN_SALT',   'm-..-JktG(=bM+tf8Kk;*}Gq:%JoH)MK2dgA#SlB/tctDXFkG&fB?)[sn$g/a>j,');
define('NONCE_SALT',       '<y;v#^}#QQ692EsP&}tKvHy(nwf.U|K}eGl|_L>*jR%U)c0~l+*NcFN.A,tkba:/');

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
