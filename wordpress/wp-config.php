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
define( 'DB_NAME', 'photo' );

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
define( 'AUTH_KEY',         '=}^WznLzuRc_VWC^Yym69R^Dh$&KJa2[xnA@@fBclJD1( {9vLNoVbgJ4oNZ%-^l' );
define( 'SECURE_AUTH_KEY',  ':m.!)*T?yT6U)q$-~U6x*<0+Z^x~Yz`RooUh 0[y5aw]t_H{]!?KG#a*4@O:-&~a' );
define( 'LOGGED_IN_KEY',    'h5#&0!IqUM;X,`4$B#dsTIq{dg,#n8e*1SHDGllnOb!|g6n06_pSx`<A=pemGS^X' );
define( 'NONCE_KEY',        '>!}JCy,V!e|kGh<Z#K5?/EtM9or onI5Wq0qEQ[)O1ixs2u2Z}2j`Exsjx2Q fQ`' );
define( 'AUTH_SALT',        'q:mDXM+`O`p04D8p#W 8IM+3*~fU v,WX`M1}^;Er<Nf*h[Eil[8ggOyW[mf{]#Y' );
define( 'SECURE_AUTH_SALT', 'fE>_<N5$o*-g02p+TydOk--QbtJ.FwVt[<jw8[W*+2:g {rnB|&iXv0n`qx4{u>1' );
define( 'LOGGED_IN_SALT',   'qpnN]uS`;+ew#QM9O`~JK_j>M&LPa{Q#N#Kq1|)Omvr!k?bAOiHr:1{D8ggX=fQ?' );
define( 'NONCE_SALT',       '94H;ar~$5%;bEH lk#h<se^!tRNb<l`$JCCI+tZs5wab>>[]Wqfd]VR`L%SavpD1' );

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
