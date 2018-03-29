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
define('DB_NAME', 'phishop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'n=l6mDYE.;T`2NxdG0S)1&cz]NXfHhQz+aIbdl17(YEf/ps,C>Gtx1b!79=a/;07');
define('SECURE_AUTH_KEY',  'NBVE1F@PHfa#]%6h&8K5{D?eZZuY=9~}kX=20a}*0g_DAV]bi%Blx9Y!*,^9TN85');
define('LOGGED_IN_KEY',    '$k<~JNCQab[1sn$-70y~`k{DgY#IvG1F$5~4ZpO^~>@%B!e&AXk4AdE=`Y!1E{)n');
define('NONCE_KEY',        'C(~:#=oj ;pKLpU q$0U:U?#>k#+17pbs40#$LJ15D{t&#i8_RN~>1MFehZ(.Sf9');
define('AUTH_SALT',        '@]:s*4r<3{,H?~h@kfRtOr$F$.P}gG2h5pq]:4FgH~pz_}oE7RV1Rz0wkWCe>[GE');
define('SECURE_AUTH_SALT', 'te71EYF7CK#sJl~cQdh&Z[nRA=mqJqn%Clx>$}jb<-:2cYa/k9pV:%R5+KOk{XFx');
define('LOGGED_IN_SALT',   '12QCh r T!=(?mD5Hp#f=GY]r5N[_I5UZCc:eho{YUzJG`UvyLL:9_uFGNh>S}NJ');
define('NONCE_SALT',       'l@2_MJgJL8MnsZAKs()!#0_Fo<2M23LP<3S=L5!x^7w9./TYY2`vqS#EQda9]h)i');

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
