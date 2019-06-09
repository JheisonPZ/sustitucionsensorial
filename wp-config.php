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
define( 'DB_NAME', 'usuarios' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2/#6*&~,x;qIvTYR8st5,RsYv0;/@fGSiLPz4UpdlQaB%@Tn_}xj!&gx5h|z@Q3f' );
define( 'SECURE_AUTH_KEY',  'zRQg=SShSjB!KJX/M>wYH%JjRK%7KuoK}[n)LT>QAG- dMXZ ~<gwG(%o>s#TR!^' );
define( 'LOGGED_IN_KEY',    'ihHZIX{MsRc.{/>Zg{?Ribv1?C^p#a&3nk+{s-Fo^88~!xw{Tg6n{P5oHIiRZhfQ' );
define( 'NONCE_KEY',        '&m5&q}T2hv5cC;^Pz5r0xBS7,19Z7^u[dtKt l{n$=^ZBeDuqy[soSj^F*:3bD_c' );
define( 'AUTH_SALT',        'p4t~)l2Uc5@NfeM}wcRhXqKbEAR6(0VKnD1Xoqi!`IM0?24.f=I-L}9Hu_4L8fyh' );
define( 'SECURE_AUTH_SALT', '=%GnC19nh JBm|^Slr-53r!j)Lb?Uc8Wcy#/yqSdT=[l!~%{oyaU&u=R@((AeHj0' );
define( 'LOGGED_IN_SALT',   '_Z~7+1{<dDshu}UB)#wVmi?Dhn~Mt4JS+] %Z[Xgr|ZGAY,gE&E$FgtIc[aW)A1R' );
define( 'NONCE_SALT',       'pLoEn~xg!|C~%Dq0hUC.xmhPE/)~sJWTJ;mCelRjYl=f7hEyGH6stkh@f,bv.>op' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
/** Add here*/
define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
//define("FTP_USER", “my_wordpress_user”);
//define("FTP_PASS", “password”);
/** To here*/

