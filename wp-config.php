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
define('DB_NAME', 'gmyk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'WKgXaJ>G!m?@*)or/uSRJ%~>s3Uraou(3OV{~u$9x|6iCT]G>pNAw[SO<az156uF');
define('SECURE_AUTH_KEY',  'jZ+AF[z1>Ys|#Nf9gI*>MB6[P+j!_`y2,Zc Q)Vsd[~(,X&F|kv:v_!ZwH?hyQzC');
define('LOGGED_IN_KEY',    'J&a_SQbSHpmvD[:pxz2IW,-BNz15!YuXAdDfhpfQk/@`(7|YX0UUJLc:56rTf(H2');
define('NONCE_KEY',        '+AhI!%*A5:`}dC<BR]-t_&8vj|hjejM:<UZp*fizvUgTaN%MZUx).GaC(;umT:pq');
define('AUTH_SALT',        'L(`P&R^Z`|t:L@yT uB]bjdm8X:R|`r^kv&[E9l)AUL8w=FudXaBf$;p;6&f/QTM');
define('SECURE_AUTH_SALT', '?wZ}Ufc=a1F,AS(x~ER)|jO}(p<{rX@@9yD8RgU^dkRn#M:A[r?P5^fp-3  AD=e');
define('LOGGED_IN_SALT',   '|G=Q3eGDXsy4<#u!7-fX892M9jD8|xE_{=Q{@3XpWCTWo7Zq[%C>jy8CF_/n^tB0');
define('NONCE_SALT',       ':TW7La*vR0Tle]gW? jBmA0Epz}nv+=Cp Ic|V2VE/w+7OKt9p|.@@m?}_9STOr5');

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
define('MULTISITE', false);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

define('WP_ALLOW_MULTISITE', true);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
