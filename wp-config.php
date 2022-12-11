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
define( 'DB_NAME', 'wptest' );

/** Database username */
define( 'DB_USER', 'Charles' );

/** Database password */
define( 'DB_PASSWORD', 'qygn3253' );

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
define( 'AUTH_KEY',         'zWm*@LQK=va!A_!zUBmnJ rih9v+=dvDM,HmBkO+9hR0Aa3xcJAGdX<L(s[w%Cu-' );
define( 'SECURE_AUTH_KEY',  'c}wk/dXlCm%V+j;$><;?nK-Dm>9H~)Ek2oM]5x0i$;$W4%M7G4_4mhJZjz!9rFQX' );
define( 'LOGGED_IN_KEY',    '(4`io|:7bhS!.eEL)z|o+SFggSv`nt%NE+:fzsHZFey?(}A.xM]t2_c=jL:}B&1^' );
define( 'NONCE_KEY',        '5nU7R,$.]/px+-US![ #Ic^Pm,cK  a.T_Y|FU}HvHy^oA?~-I8oK|r,{fPDG7np' );
define( 'AUTH_SALT',        'AGI#E#`F8@9jRuP)unL.z)(b}?sKx*p,|GvSjr2k$zyTL,MNNTIAQnZKOIE3i9L*' );
define( 'SECURE_AUTH_SALT', '}`9e!Nza,xvAE0GD;D+u?!*?Y=k8ed[Ep#XYr6}TeqB_/#!>5UB`lIiqz}8B~G:D' );
define( 'LOGGED_IN_SALT',   'g>xq,>c8(#Tna*s:rOwK/f:^#ho|4_>Ijp3LvQMJoNF?<BtFP-hio~,Nq9%qbaaw' );
define( 'NONCE_SALT',       '=yWmaTL1)Xa)@dy]etU|z1b#m+)WV,bGD:|nSXK6dXYc+4~VJ>8v})5%cx;Y|j(4' );

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
