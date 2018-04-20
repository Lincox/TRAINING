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
define('DB_NAME', 'goaheadworks');

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
define('AUTH_KEY',         'i7RfWwfK2.e6SMf(w5 ebiW@# ]XCk+sLjid&X#Kx>jed^0x*}: [gD2bdmW3-<g');
define('SECURE_AUTH_KEY',  '}#`g9=~(]_r^zl5.pv).dts/Zpg!80jacr8N;:$Qdnx8v74E0lDR{P` <C?7nXM$');
define('LOGGED_IN_KEY',    'QTMoL#SvdO%VX f~F@gu|8WbW`}LceP^r_KK$gknCPpS6(W#ubtUjE1q9]ve[+/&');
define('NONCE_KEY',        'o8/`+&i0D;$;d}UYc~(H}}.{,_1`Zyf#%V,jz[*Zr&G<!e0,Fka$>L/*TG2)H{[Z');
define('AUTH_SALT',        '`uu-1IGQMPdA$7uFoQZ@ig9H%8EhGqOE5dt8U8w]TXZsE xv~EQ)Js~r(~B-E1Fs');
define('SECURE_AUTH_SALT', 'MMn?3}}A9:+]z%EsId6iaMrD.FQkjbeom8!h6et!R(;pjYPT9XK2|DsaG!lYtYU3');
define('LOGGED_IN_SALT',   'd:By!p,Dl1,LG&/%BiHe-#o,vsOUB`a[1q]/Qs19&(H28NolN89eW We:ta#.NqX');
define('NONCE_SALT',       ')Uf(q(sII1Rndtudyx-ez@Y2;k@+59[G|>]iwi7oBmLpam @X4=<%vTIA7:sqT>C');

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
