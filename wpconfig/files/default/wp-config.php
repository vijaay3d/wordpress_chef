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

define('WP_REDIS_HOST', 'redisdrwptheme-001.xvd31y.0001.usw1.cache.amazonaws.com');
 
define('WP_HOME','ELBWPTHEME-932311396.us-west-1.elb.amazonaws.com');
define('WP_SITEURL','ELBWPTHEME-932311396.us-west-1.elb.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'DBWPTHEME');

/** MySQL database username */
define('DB_USER', 'MYSQL_WPTHEME');

/** MySQL database password */
define('DB_PASSWORD', 'baybridge');

/** MySQL hostname */
define('DB_HOST', 'wptheme.cpqbe1ppmazs.us-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '>i4~&ri&_P5uFy`7ubp{-r(p%{y8m+N<j=OE|28iH^L^Wt{D/X>Q}A+SbO/V_ctk');
define('SECURE_AUTH_KEY',  ']}?S5T> L?`#PbxyKGjM`+;PL@|y*8liYWI(W,>Y3Yf^2W6!/DjjU^905LGwGjo&');
define('LOGGED_IN_KEY',    '?dX8n( rJ7$F.>o$0]nI4A&X=I{hVHTzK:{8eiEa=7lEP8kaMUVyIR)l[+:+_:wg');
define('NONCE_KEY',        '7^?c<sH|=u@*JW7o)s6bc]+AB*EK:s|.]rN,L<nMo#J(-U~G:M2Fx`<mtjKpAs+`');
define('AUTH_SALT',        '0Q$TO^Yk#Qe#}-H^{xP9%yjr6K~]^8w+P>BP|b@yuMn@bY.VOn)X!t)3lhZ`vwoW');
define('SECURE_AUTH_SALT', '->]1sg];Gf$OU(#sn$:rToL2Sx_Yk66ny)@JtsF`1HZ#*HrA^WgY0|~}Zk]TS>.p');
define('LOGGED_IN_SALT',   'VqP}Hk%l.t_K+7F1VDZ.J0vCfZh&0-hv36Spmtb1mt}}#OGA,We5^p|9<<.1j0t7');
define('NONCE_SALT',       'HEpv@le#xo4fQC(Qi&vB=X,xm>d%O+{#dHC4[x-h_X>A9:?y%.zGD1qy:XdDY8(q');
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
