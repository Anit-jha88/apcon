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
define( 'DB_NAME', 'mkstecfw_apcon' );

/** Database username */
define( 'DB_USER', 'mkstecfw_apcon' );

/** Database password */
define( 'DB_PASSWORD', '(P^G1oKQp_Kz' );

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
define( 'AUTH_KEY',         '7LqaRWX?aTxvi>P)W:9Up$PIvXv@[{Q~`NrwjqK%9gY3N-G(S%eHXIsU`q=++b${' );
define( 'SECURE_AUTH_KEY',  ' ZU]`3@HHK}3?*9BK&$xzwT[M9LNj;2A+@w<w@U_2[b1(g(n/euV~6g>e*q*($-4' );
define( 'LOGGED_IN_KEY',    's2WH}Cw5IsExxIYwq9@phc2$WtYQo=p:.E,>r-}=#D&-DBL{#QjX0nw$;?Oz 8nK' );
define( 'NONCE_KEY',        'gD-g_|@.)ESXrz]X.*bo>-E:Fq/8{<d}Q]aaazWg1MQW`F}1d^YlF4Ji<47|?$<$' );
define( 'AUTH_SALT',        'd1N_!iOwGg=umNWk.orhf>l{G?qerSMyCO!= p5wXc3J1N<pDs6Wuh%MuwvehT+s' );
define( 'SECURE_AUTH_SALT', '[@]^$ZtZ5)tl6H|nzI0U@59]#+P2662/xY{.2,o)d$i<aO>KN;n.p48![zOn,kH0' );
define( 'LOGGED_IN_SALT',   'RH.g<Ti&c*mp9Jx-M77N:VH LdItt*EP CVh%7]p~ #pWU#xMs^:f:]q^$X{s:sr' );
define( 'NONCE_SALT',       '5L&3 82mvir5ow>DV*Zw)g/<X}bi1yDMaZ75^yJ]&g}Q{8tlx4u3YnW ] 6:$%/(' );

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
$table_prefix = 'ap_';

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
