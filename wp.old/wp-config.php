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
define('DB_NAME', 'theeverestsystem_com');

/** MySQL database username */
define('DB_USER', 'k9ns3kxk');

/** MySQL database password */
define('DB_PASSWORD', '7TNrWVQ6');

/** MySQL hostname */
define('DB_HOST', 'mysql.theeverestsystem.com');

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
define('AUTH_KEY',         't93Pl0vHCbXr:NK:tXwi#Vub!BsgqS?RIT7TsEjm"E#Y|Y3wfj4/C&CRwpDZ0P^b');
define('SECURE_AUTH_KEY',  'L7r%%wzTy~w$&g/S7)tgemcZ)Ya$vBZ3&v$DJSlv$A;K!t:rlf5p|Wx9evY~4FE|');
define('LOGGED_IN_KEY',    'EwBOWsq9Eog/6j7zVlZ10nT`Ef)Sx_h8!I6p!tJH/;Y$v!9N|94Vktx:vM2PuSD?');
define('NONCE_KEY',        'zWF04$~5a~n&DJ?RVqVUZ71?;Hq55zA)kS9yNc18n%VE2dkh%ipaGg@NQ3V|z82&');
define('AUTH_SALT',        '6GOMgfALBrChRO^)_Mr^~LYzzT|;|pCWd9w_Dr%I`gJmLHs*xj)vI&0lHj:B+8b:');
define('SECURE_AUTH_SALT', 'f?#lz!va%ceRkSkn8FtD!MTssFGTK^i)+2ZuMdyou8It`c4pB(Y~I1G755zaLip1');
define('LOGGED_IN_SALT',   '|CF95/BMrauA/K("oO`BnFs9Dl4AhocGzY!@YXm`jJuh0z&V3h@jaw/l+m|eTLFD');
define('NONCE_SALT',       'B;C8LYgRJIoJD7`bOdaKqZoLl!pQ_!3Sn9W")0"*J5RbMjakq6~X)31JB%/9v_9T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_3b2ihr_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

