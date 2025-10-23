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
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         'W/-G|K$p_D.3U*HBfHE,Jn+304oBcSv}6U0SdHKx{Y7<]E+Q}x&WRl ~-%Fu:=TD' );
define( 'SECURE_AUTH_KEY',  ']<A+oGMV)RpPa2=d0zwb*rlt_2oWYk?)CU%W3okVX*[iRH)~bqDZdVd^[+MEMjO}' );
define( 'LOGGED_IN_KEY',    'c+EcxDd`dyDP;K69Co=/3sbvy{)]6fw$;3~UOU3Aa$qi4{8gW#}E:WQ30%0f&/#t' );
define( 'NONCE_KEY',        ']Deit0%;*6iCSL<{(e U}0d7q`IzG eO.J1!|Y0i)bp)XVDoj&bxzZSAw?!6/miU' );
define( 'AUTH_SALT',        'EmX%CR[$V(ipLi3p[eIe|)e3VB[/<sKTC#X6^S].CT22v(<0}-z6 urD.u9@Cb68' );
define( 'SECURE_AUTH_SALT', '#c#.,y_8!kW|O~FR38}3aboUzKW4dJNijoIay] iBX6NvV)-|J<1o=5sgpn!bk^Y' );
define( 'LOGGED_IN_SALT',   'B`X#nUb1Wm!%n(*F=qU MiIcC P.<@drG=bv(-f#m[?J1h$@(Q+)j/%3;SgZK&3K' );
define( 'NONCE_SALT',       ';A#]<a@NNc`E8K _rjIX1{aX7L:I05(*?|Q~Q.%/=L%G@3mI$xaf$gx%#{FY5?6Y' );

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
