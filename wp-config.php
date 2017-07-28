<?php

define( 'SAVEQUERIES', true );
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '-hD60}AXaUr!68L,_nT.==Q_VC#f`I8A>`9k~6CB3o@B<W=:8mo<s/-!|<&lu^yI');
define('SECURE_AUTH_KEY',  '2)M!WWv(7{1Vb}=-t! I$Nd W:AU`s/}%YX^Wy7^T?iO$5cpm&aJXin9R.u&rE9J');
define('LOGGED_IN_KEY',    '>:{[:~*bGXp,~d.b%Nt]*rt_(d2umGb~{ZK]#tiXp&ei)?e4M]2!Ug?^}H5oZ4BY');
define('NONCE_KEY',        '`*Ql&W Gf Lqf-)*1`%q3BRZQkUE?!NfxUt95qpg/:S,.R_f:Rc)dQ0VGCwv=Z%j');
define('AUTH_SALT',        '8ZoviY6_xdix$dP{hv0>*2+N%|uR!8|-t5%9LMm0O!$hr3sBSCH`$LUjx}59]kSN');
define('SECURE_AUTH_SALT', 'v.v>Y0`pCF Y|+x(~6+J=@q71-pS`VG]CZwsGK?CP_pQom_BZvbBy}Zq`hyE~na*');
define('LOGGED_IN_SALT',   'UuR1hIpjI<(`KBXb6q~A{Y%3xzpDs+nwW3RTF6Oq@mY5X[>O=XQy!G%iMB|eTFly');
define('NONCE_SALT',       '&WO~sW|8Z)3{-Hs|(bo|cCO|u4r4F?J7_gemsECL0PTh%>tTW{ikgJdoh*i#.$ s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
