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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webpresssite' );

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
define( 'AUTH_KEY',         '6K8S=[yzyw-V#m%AV0*/bq(KrB[vdxE.W$e$[0apm$K.>yhDxx>CHviKGduwz w+' );
define( 'SECURE_AUTH_KEY',  '5grd+`RArxFCD1l.6q*:j&a!5QY`zG-D)=Be2.fw.U<w]<DQu2[b]SQx7-#*zUMA' );
define( 'LOGGED_IN_KEY',    'csC%OPE}dnLX]T5Ng3aPXRm|I,>_e[p!^_3z=__yq~^x& EJt9a0EZ3@;A9T]@9Q' );
define( 'NONCE_KEY',        '{!Wc THi p3V!*3{iSow)5&0*-8*;a(i@A]iKp.Slksf12!L9OB6V}KePHm^c;>v' );
define( 'AUTH_SALT',        'yLi$UHc,#ocI?ni8dy&[yfn`/E,Tezw6*aQN%(B]>q&ArI<J3$+Td]/-t3K*^.8g' );
define( 'SECURE_AUTH_SALT', '[[EI2(WG.5SM:Y=]M4R91cS9>iYni~o6(3*`MHGj?f%!:ts3B9n}!syoSM7@w_L4' );
define( 'LOGGED_IN_SALT',   'pW|wLhpJ~)|Oh[CKGrA_$Zu%.+{{9$~]?l`tPFH*K}u0=NK4w>3nZo.@u^JiQLp0' );
define( 'NONCE_SALT',       'bU;2&qoeQ k#X0Q3Z*OpW]IhId{JDMTGceE2y~FH~r#Oa(vi@aVoW/Y(8a_#dMG~' );

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
