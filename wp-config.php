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
define( 'DB_NAME', 'medigo.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '990614' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3316' );

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
define( 'AUTH_KEY',         'kY>3;qK2$9Oe#Gi`L?(]xR=ouL=2Ki|xczQYx-Lcj(v_8=Xm]?$BZBl3Q.J(=Yq^' );
define( 'SECURE_AUTH_KEY',  'hjP+Lzm]R+6@n03B[2lk7a~ipVjk$-a_}gVpDwKY8/Ai7?X!/|:fElyxxC+a?rvw' );
define( 'LOGGED_IN_KEY',    'ER2zT2U`xwrf,V%B#4r4=Pp`og67mh+?DLB=p#QA 6v[k_F$u|K+_^}/SCB <!ev' );
define( 'NONCE_KEY',        'X4S9w-i@JhUosQ!9m!/n_!V!/DC^p!JS>MQu&_obT!A^3vzF/X0-jlQvx<?~~bSv' );
define( 'AUTH_SALT',        'VZ,eEgGwU9[oJ~Cp<JlS`|i7$RTS,UPDc4oWI}-%%2??=>`~LS9,oc1H:21:777)' );
define( 'SECURE_AUTH_SALT', '9L!6_}Y_~LxO8),Kv2H!{c03gno)vbf]?:12`suG`%XBneB1T&QwsmV~/E{vuzZw' );
define( 'LOGGED_IN_SALT',   'sWeuQ1?{~U7nvw])B`(S?,rj[PSy/hAHIkED{,R}Q`ejkIbsaDWLU0wMf<gG)S(e' );
define( 'NONCE_SALT',       '_<s-1|i,_A-JrGi>Ug*CPZ2&I/78MDWPk4E))r_kKb& /h8ILP#x7Hc5eG.1E8P9' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'DUPLICATOR_AUTH_KEY', 'RUCtbA;ks1}`:HpovAR%F=^-WE;v7Qb&=Cxm*#K?FM^ 3T>`*8na<:;:ne2v2_M&' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
