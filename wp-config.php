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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'D:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '/akg`>#vQ`&?Vg!k|2%U/lhv^g++UE)eGd8~+(W;7.j`=hf>sC|Q&v=z}~z}a`=7');
define('SECURE_AUTH_KEY',  '9ELG7a<Ea#%7j>P%OY+5<,e}g{8^N$Xwq:Fox2@8p.^ Xy=Qp<bt,3KN)RfU?iEX');
define('LOGGED_IN_KEY',    '6UW!V-*fwgj(oD9u2%]MsXqw:VhtD9}xaU7JPfH%Hi.$`OzCv_hc9s#J>aFbdL6:');
define('NONCE_KEY',        'Yv&&6TWDY<@8+x4HNfR&Bjh5N) |KT|gkK2N|VZC@B1o2-|w%#~jIwm$*=)l!aXH');
define('AUTH_SALT',        'M>UQa8M@5:,n9biX5y,9[OP6dod(~t!!9|j|8-cO5h/:&>adUmFdD:EA8THNIj0|');
define('SECURE_AUTH_SALT', '^*Wt-Dm[F/L6w9=OJJx~/(u|x~9JUdVR]DZ ;/bMJu(@t&4OAu|5gqAUZ+S;k~PX');
define('LOGGED_IN_SALT',   '!]Iof~o XmU}*vh^J- )|0TxHy( Jz:X9> 8n8e+)<vb| o|4ee+Gu~BuGffn7|V');
define('NONCE_SALT',       'FdQ ^DN{Rs,Wo5#?jOYy;DwjvnBM.u0l/vWQUAB-N).E{bZ1@&H|xuh5t9Tn |oX');

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
