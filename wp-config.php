<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'kpZ7`lT$G:oZ/~o=+wK+,bYtNuxH~N]?Kz4j#m.rCs$_ruznc,YmFB9*L$WoQiz=' );
define( 'SECURE_AUTH_KEY',  'N`pKq1bkBTa*R2aOl-5?IHJ1%hTgq@}miZkZ^PU~nSJ374>vVK]VBOT|gf`c}*5e' );
define( 'LOGGED_IN_KEY',    'H^rfZ ,~tBV@G{E3PC</:Vv$[8;5-X@=:r:{)mnH#2EX[YW`{^^t&.P3I7]GU2-U' );
define( 'NONCE_KEY',        '*#1D`Ew`4oga]i_5<s0etx.@-Uz?@~b$]z|t?0^`I0 ufufTn#pf#6I>-7#M}okY' );
define( 'AUTH_SALT',        '2r[Mx(d31}&jw;=B9SAvKI6xMO^..+)y,G2ih Uy5}JD~ $/D0$MI~hSd!XI``yD' );
define( 'SECURE_AUTH_SALT', 'rYPVn71yx#;lvbu|x5*.A9f2APp&L& CnR[PT#Vyj-y(/,Gv)ZF~_6,Pj32^pBC0' );
define( 'LOGGED_IN_SALT',   'vW)6a^PW; B09P!N<W5T@M rRO]vEmnQe5KghPU)43IiyWiw:?`-?O[iGsgKGw7{' );
define( 'NONCE_SALT',       'H]CDP(AqBb{2lZ8Jl(WwD8[{S,c-5I~?#~I!wtMsj_r5{_qY(^gV~Oy=*4^se6aU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
