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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newest' );

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
define( 'AUTH_KEY',         'E&vJO!K-3p&4F_Pd?jfN.?[0cR5$A8OXh:@.l%#;w4#]=S^[[=D~TtDYCNES{Dp^' );
define( 'SECURE_AUTH_KEY',  'dxi>o>S;!{qfl+;6&v7t;h)Q*s1$ZQB8=Km(Xr|PR%YV/LSa%,fB!v%*=$vcIwqQ' );
define( 'LOGGED_IN_KEY',    '.V6F b1,6*c%=j}wPQoE>/!$)o)uvO,Kt~j!`gMZ(0_G1T_L}VV>K_DTE~#`U10B' );
define( 'NONCE_KEY',        '&d)|XBY-Vn)5H`?exg^_sEfI~%fB47CR%4rB,m2AltXK3}0o5e[|ApV47#I/oGG>' );
define( 'AUTH_SALT',        'vO?T:Fx J.k&{OP08.P%KV 8[e$9geO937Z,&;RX7;:ck|!5wC.?/FuBf:[D/T.@' );
define( 'SECURE_AUTH_SALT', 't>[]2CC_~.vee?MoE B}iY8N~blqSb7~HN<=cnj!KR82%_#U>T? bOP9x=tOVvYh' );
define( 'LOGGED_IN_SALT',   '?<GK~UOp,U0TIWH^0*=iKt+/R]Yco1c F)-MpKisOaN^|`I9M}I%oZX0ZWTK~{WW' );
define( 'NONCE_SALT',       'GTr-[gY2|Dl)||beiZ6v8A{2SI6btKn$S,`Zo(F`)`-!Fp*6asKAd|5R2Yw+SyVl' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
