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
define('DB_NAME', 'thaithien_database');

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
define('AUTH_KEY',         'i^oe($?M~Kf(>K0su1YwTIipHPq+g=2<y_cBSlvnhM2V!cZ Ywq+|y|4n+4w(Y/O');
define('SECURE_AUTH_KEY',  '~pExanOHcIAS.P= `W$Ac/UX$*+RYsAasrT2/iAi~pJQ#~=|<7DsH8B+4aQL6P1!');
define('LOGGED_IN_KEY',    'nhZfr>_[s,fmziT$^.~/fylW4i@&{DPL[-k71n*Cmca1#C+EWUG_`H6g}q@!uugR');
define('NONCE_KEY',        ')s#qXZ,*>}8E_T=9qE:_GLd}SxO#/VF1;I`jQIH6hNfzbk@Jl#t*}`v9qfN5>rt6');
define('AUTH_SALT',        'o0Yo0<}n?owfhcCP]t9QtITu>-sp1ZU8MAvt=u,g]Da6OPO8Sm{SM{o.ow|s.v3&');
define('SECURE_AUTH_SALT', '[w2m9g:#!6DdXW#_dH#w|&KM`Si8(.F@L&)qKsntvuYu3r!PWe{{b>m`qJT$ttpr');
define('LOGGED_IN_SALT',   '~$BG$HR63h_/~NM~ZZ,yDMRQ6Ii{2aXh.3a(c^6=z{`I7fgb,e^O0HQt9NdG5W3Q');
define('NONCE_SALT',       'vwWoBUkQuyz,l*96+,z)$SiQP9pz@&=Ot}+bIlwC$aE=T0hyEz1y c=|n(.7-!T<');

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
