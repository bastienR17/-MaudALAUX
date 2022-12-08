<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Maud' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E!X9qYX>tWfiY!42m3=uYOfkfW:d{I^7:VMt)=r:}}n,X]B2Y(.fx=IH(KD%,rg?' );
define( 'SECURE_AUTH_KEY',  'Dx-*G~ulkN,ETNU00;MNkPe!T9*1_@ G(-fN? (^+UGz~vbd)zi2#N!_[^L_N3r/' );
define( 'LOGGED_IN_KEY',    'FY3.+YsxZ6=^Q:FBU_XsZrk5M88$wej#- Q~M$5deg$_{tsdaqM2VwZ#e:OY}2:C' );
define( 'NONCE_KEY',        '$?0HR`;N7*%LKUZ^wkBw?E;<XmE?RtJXmV?_A-IOm+/~6pj#?}`{, *1mBV6n*ok' );
define( 'AUTH_SALT',        '`xyNTRQ6K4gvWxK,!-`grGcg.ZY:)2f7N{3DJ&o$>T gw_vu,I[as2q)82pW@4Rg' );
define( 'SECURE_AUTH_SALT', '>X{Y6?TEC-eUmbQo6S<pLI|/z09%OQw*6x;MmH[^BF=q$WnB/Rt}&-L[c[qW1Qs`' );
define( 'LOGGED_IN_SALT',   'uwOB%h$*ed(IlL+.j_X07;|;V!2McwJ09mOQ}/t]Z5cw27STm]!wA!2HA`/^N|S^' );
define( 'NONCE_SALT',       'uPR3;dk{jF|vN4A7zePU&JMrU<R,4=haA_XrAOI`M[O0@HxE{5e7RdJJ{H?UA8m%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'KgbjRR5tp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
