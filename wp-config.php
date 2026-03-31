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
define( 'DB_NAME', 'wp01db' );

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
define( 'AUTH_KEY',         'vk|!qizo#ChgP%Qqh*N9s#9F#eK8E4&wtBlDDZA-w-2s)L}q&7uV?Yc`xSDLy*W+' );
define( 'SECURE_AUTH_KEY',  'Il[~i kWwi/ZP{(56CA4i$bL-{Iuf}N4g-)l_iq5:F]`c@*/MP32$_IqMOM0kYIH' );
define( 'LOGGED_IN_KEY',    '5(i]Oa%I^m)*GqF55VZr!l?*0blR=%)q~WtQ1[OOhhgc8J^QKneH2>RFmUTGU6g;' );
define( 'NONCE_KEY',        'QNgD1$~F7(?c[QZc:([zS9%@q[oC-W7sB7)/5>z.-3X5Ny{rE3$/)}DZH;eW-Y~T' );
define( 'AUTH_SALT',        'np4~s9(~52k$M>#C(gIPH+QroP*S(sYL(c?>g0db]I|DXM6`}>)@aA`R*b^kU%n#' );
define( 'SECURE_AUTH_SALT', '/xO&omr1t7Ls%LbPU(a{{$O0&[iw_)$?X3zj0w$k==b`zM44h=yT*i(?<|a.xm$K' );
define( 'LOGGED_IN_SALT',   '[@=Hqp6s_n;;QrQQ0adP:YS!ay?;~=a4[`HY5%;fx8|J;iD%F^9*R#`@v0G8(kv5' );
define( 'NONCE_SALT',       'BORw ZEd:Cjxd_x.iBum{e8.nk188$wFLp/~(TlSbok3N/.YLZP`|W]F`bv=!UZ:' );

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
