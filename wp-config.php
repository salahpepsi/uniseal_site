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
define( 'DB_NAME', 'uniseal_db' );

/** MySQL database username */
define( 'DB_USER', 'salah' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CISJGTDxnzXxkOYu' );

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
define( 'AUTH_KEY',         '{PAELye(ALx <{Oo=LzTHijw&0nW7=7hD_S_ZGon8Oux]/o&!C]!| B_$,_DP|E)' );
define( 'SECURE_AUTH_KEY',  '>fWTH]LI|7`$jQPF*1cR+arO:DCo ~xSS[s=2(@gNvsx$PR>`0S&rd9B(z<t&V^H' );
define( 'LOGGED_IN_KEY',    '*i$Y?RO,$!7c.#UsNhcfuio?|~q`jL`j{guzJrRcj<IC9l<ffes1g-2E4tyCl]Wz' );
define( 'NONCE_KEY',        'KIoMas(VPnYU-k-EAi01w_+K[n8+N8dnvk)iggvavu-BH_T8T#gki#UhDY~ (Pjj' );
define( 'AUTH_SALT',        't&KsT1Dn^AOTR4ty9!7mBF #V&7PeZX5j;0H9y54k1lS>hm5x{$Kl{<sM`?8vgH&' );
define( 'SECURE_AUTH_SALT', 'caFg@*@)dGc%wq:8k0kJh(O@(pW HQ,<@JxZM0{I}q,2.@AUqE73$TU!bBt?@_Sz' );
define( 'LOGGED_IN_SALT',   '%dY<@Qt%.qln(kvrh8avDFG=@[ikp~Sc4%,<:};3IrJtPA*Uh@U7#Y5s7%^IC/3:' );
define( 'NONCE_SALT',       '91O<jsjk)_T)D`03Pe;]4>|n+76&1Ul-X,NJS3#=p{)ean[,9o[6t?ji^P~TYOH`' );

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
