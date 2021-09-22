<?php 
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'hanbil');

/** MySQL database password */
define('DB_PASSWORD', 'hanbil');

/** MySQL hostname */
define('DB_HOST', 'mariadb:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y]K%$K3wE7H7Y9|o-3$G,IDA>G-IQCch5,L4JZ|.;>%sqyEJbCP?(f6.7z1vp2u)');
define('SECURE_AUTH_KEY',  'P!C_kZy/_AvPHv{-j=c0g35N(#s;w$n;-6nKvz2W__v9|(Rl;|.bTtxWU#ZXN`-G');
define('LOGGED_IN_KEY',    'WXL^8>Xd=D|C^(y%#L5x&nLQJ2VPo;L*bpg [KWF4@Vo8%Pbv46!5<x]O=Y>>O:W');
define('NONCE_KEY',        'l:*;RJui9Q9 9?yGAqJ0(zxqzF>G8[-MkbuO<&06[Z}I!Thr=1:}xdUP~kwbZ=0-');
define('AUTH_SALT',        'K|88@ bI_@vF+EQTvfpRL--mqT%oGio4Ld<o/zH;#Y6w.BAva|CE@LUrc/BPO5Xb');
define('SECURE_AUTH_SALT', 'H<(X 5 KmH@s|+YCc{Malq_jL[pO{~eZP4:Ha4t-FHjjIKu=sp{fE[h*KZ5<y`fS');
define('LOGGED_IN_SALT',   'B6vwcXAN;byl/{U<I5oQu5IUp%)`&n%nX7o7Y*cka*Ll-!0*++iNJ9C%.MBpTd:U');
define('NONCE_SALT',       'Z&:;=dWXv.b1#qx#16BrF2.K8|)@xoSIB;@O?MVo^j:UZnzm+GNaWdj;co+6m::Y');

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

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
