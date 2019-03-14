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
define( 'DB_NAME', 'ray_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(&.=QyuV^Ol|fE*C%94EXM J&BMUQ!Q8w1YEay<oW&}oT:h6@<+`=z~yI{$8U+|`' );
define( 'SECURE_AUTH_KEY',  'dW`leWn?=YT;s+iGj}R&ouG1RDr0C-x?,O.qxHIuSx,qh!nFlea``[#QzZ~}BdvX' );
define( 'LOGGED_IN_KEY',    '1NeUxFAhz&fbn!?B~>SG;0oxP}0`~>3i<3JslECl<shk]O*Z<KJ f:T32j)D`O~r' );
define( 'NONCE_KEY',        '>}XyXOAJKhe-14d1lk7UY1Z4JZW)mi##8~fHt3~MhFUNo;x#*&k7A:oEmRadQ&To' );
define( 'AUTH_SALT',        '282dx^/YKMAY`UM&l,kT.;qlm1m^GtUP:S1{sb~bm,87EekK#PfX(Xu~3;jucYs|' );
define( 'SECURE_AUTH_SALT', '16>o;f]&WjtIyVDdA}wKX_vPk;]<N&An*k{8~nZ!G3l `oBrgq*Q`dC,ZLpvXsCP' );
define( 'LOGGED_IN_SALT',   ':[4[|70pQ$cv%7pU?`12cdOy%E7B-0vaVxpCUz$K}h:|eJR*^<%sh[z{Sz2*89Ql' );
define( 'NONCE_SALT',       'H4;/kW%B0YU+WXoa$hV+?HS AnTY(l;6O2E|$M*ZRGg?F]-3C8Cw[aa) _24K5~E' );

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
