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
define('DB_NAME', 'user3');

/** MySQL database username */
define('DB_USER', 'user3');

/** MySQL database password */
define('DB_PASSWORD', 'mWvbsM');

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
define('AUTH_KEY',         'olO)jw.E&JgN&dFE@$zPw1{fgLeNKA#`{B{K0na ,V:@w3r|a@&,e+s<C;dp=`.j');
define('SECURE_AUTH_KEY',  '?iWR!g|TJ?px8mlbQv5>t1x4s$#T9UHc&HS=ozJtem+I3fWz!da{?sg9>4b;oR,+');
define('LOGGED_IN_KEY',    'R=ad3}x*|j>R9UW&/dPz)`f@OJ8-G^N%3W4(5B09gk`(!|(Ju4b=?`vp+~h WlI}');
define('NONCE_KEY',        'fHTr|N!0Ta8{,ki<xoww{Lr&o~;v<w7Ol[eas2}:iB-0CkCbp&mbq72sWwX}4LSU');
define('AUTH_SALT',        '1kp$yoLf,Q /{CSQYxcJ.PeDqslpc{_+R9C]zG:V}ruaa]B^_X+860[ZP*D%ME]n');
define('SECURE_AUTH_SALT', '90si_+1r^w;XoQy9q*(^Wp5(.VP,{NOozQL<Nl1sT^ KbKLP!+P3-kGhmJIS!u&r');
define('LOGGED_IN_SALT',   'EEk*.]Tk%gQ_<:6=k/F#!;EHKjo#Zc&.S%Yc>C2!@`E92]Fap*%`=lB;zYQau_Q5');
define('NONCE_SALT',       'Qmp(</iWv;.u&1$U]zgJ7f+b601O^/lCzO{4*4;P5Pw))d{ZHQlu3ttZbtsxH2?1');

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
