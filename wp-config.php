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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+EYG_<a-4(TzZkeZRs8mXkc;.XxKiP_dOpT~0(Zy{vj=Hr}%6Ra;ZFt;+*oJv,c;' );
define( 'SECURE_AUTH_KEY',  'd9aHa6LT2 VwAoUseU)U?mXsf.q>%M1[g0i [3l_4lsnpJN@IuH4Pk6b~ PtpI&P' );
define( 'LOGGED_IN_KEY',    '+}X8vv<je5ter ]}5C`0`s:&p6MgWm$S)Ko0o#B7hAWNq5,D#ylIeG{|NS2=bH |' );
define( 'NONCE_KEY',        'xybsc-DK5YE:tS^;Oh4uTz[AG)Gb%O?S*Am5#0$]C8%4@@o0g@`UMGU0$;=R{<6z' );
define( 'AUTH_SALT',        'UDH}V9?!<nf SnB&8,2+6z/Nf`~~Wa6UWFzON=H+m5~?-Xm%_*t&QrqFQ-a)vBmp' );
define( 'SECURE_AUTH_SALT', '0V^>  O+SiAl_sG/=D.%PAKYK,eBS$TB#UgK2|FZo)KaoW>?N v_3zTXs`AzlI3I' );
define( 'LOGGED_IN_SALT',   'Z3be}|$-by+5A?zl~Q%Ar~xKdY+D]lydDTtP&,enX+_$FJs!w~KE^n<boU*).oB|' );
define( 'NONCE_SALT',       'N&dfsR-M`(1[2?$6naic8S3bMO?sn=px}DffF4E1w*t6@keX_zURcCR0:m;XfuzP' );

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

define('FS_METHOD','direct');
