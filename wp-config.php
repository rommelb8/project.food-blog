<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'food_db');

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
define('AUTH_KEY',         'Y|DQO?;d|+c[:}G_+7T/!kWD17<jf%2GrHue(M@?zp-unf}W+o5JF_CPFo_$m-v`');
define('SECURE_AUTH_KEY',  '+ukl&3lcRi-4!8f%6]7$A6oA3T*3u8=s|Qy^!kSw4s+Z*:L%|wy0B-aa(F*)%W|D');
define('LOGGED_IN_KEY',    '-,T]c|u2)Hd6U+}UENSE8cZC1*LG,M(t3.yWU:m$a9!pP7V5-=V> nqhB3`l1|Nu');
define('NONCE_KEY',        '~N-tg)K]zNb3BX7mn?qnDF5;w|[pXMWj|`i:JoLCFK@5n|8T,b`$7@UN*WYaykE!');
define('AUTH_SALT',        'P2+R9p3-M>z%qdtZmP_:w:G!|POna8|zdEh8{ua*)w&El?v9R,(!||2^}v]O+`UM');
define('SECURE_AUTH_SALT', 'o_[x0hg{H;3u-_xW ~D:X5`F>YH{&x(&:q,v9;2-vvNIBl#;{e_~|:>OgtfP *oh');
define('LOGGED_IN_SALT',   'O+wC/$+?-1bXt2PHPL;-O>I-mV>W~%NA$#Uv{gUIET8J&k}=eH9*F+{D.WT7PP^?');
define('NONCE_SALT',       'nZ=%0OLBf*`)G_oa15T+)VgTv[M}0CI?9X!-B&$t;/><6Y}T7E-SqLJT!OC`O%7M');

/**#@-*/

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
