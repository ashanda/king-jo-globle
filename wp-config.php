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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yogeedev_king-jo-globle' );

/** Database username */
define( 'DB_USER', 'yogeedev_king-jo-globle' );

/** Database password */
define( 'DB_PASSWORD', 'kk$,iJLd]O;G' );

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
define( 'AUTH_KEY',         'P,OMTee}J5RTPsIakYq7.cAxZ0^b99 4o2`4-rXV?0;ma?> y@x^L1S-;7B7;i$X' );
define( 'SECURE_AUTH_KEY',  ';,7;+,2d&Lv0ys6/f!/i:*J`/TY3*j~gjL@f7 _ZjRZ!{JAu1g#a:cqh#QL~;urh' );
define( 'LOGGED_IN_KEY',    '-.^^+}vb4_%~^TpCe{H@{dYCO@^b !7X6KrO@q4:^.wlz@fsLcIj%RFFIR6gwW/,' );
define( 'NONCE_KEY',        '}W.q{U>}gIF/4#b<5>XG/LS_9_EYmVNT!Is+ItGSiDw+LPX:}y!n!b/JLN(+E_X/' );
define( 'AUTH_SALT',        'Gn%uoV2bZBAqcbb?@eX/7A}KmZ~X/.8X?.G5]%{fv2,h@^6?o5ewgTu6sNF6aw3Q' );
define( 'SECURE_AUTH_SALT', 'He%bU3sO +&~!%=s0t:##DUGYK`<5(+h]X$:!jx9MD>EH%[32YOW7)`)Ay/:y Pi' );
define( 'LOGGED_IN_SALT',   '!%Vn]L*T<inVD;7O0jlu[I!pP[1Ib9ox>8e:iS?ys_>S?K;%8g]{JFKiZeX#HzN?' );
define( 'NONCE_SALT',       '?6CY>WT7XE~n{@KgU$AJaO$w+py-RZjfe>V8nl-DQogX#4ZO0OP)X`lMxq*eN~Lp' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
