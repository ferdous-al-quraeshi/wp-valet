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
// ** FTP settings
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'learning-wp');

/** MySQL database username */
define('DB_USER', 'pavel');

/** MySQL database password */
define('DB_PASSWORD', 'mlA');

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
define('AUTH_KEY',         '7n(#40:cs:d2x|A^xR`EW;5g}Au&V~&s?|OzK/]/{D:2XxGVKVTYQ^)+`4N35Tk3');
define('SECURE_AUTH_KEY',  '7F)CRF5:C3AKf,|<)Hs TcLWHF!@-.h>eU ghfozArKiy%y%P<ChM@!|y:&X`5@Z');
define('LOGGED_IN_KEY',    '}}dStW{WCrD37=J}{rnBM#:157+4<$nPQ4*L{j2Vkn*C+V;T;#/~+>kYQ[=}B#.t');
define('NONCE_KEY',        'gn%uG;5u8T!r/oK7!C[)9~(+(A4-->OM6]`le}z#>b#BY`:]+bi~dSXOM0R;Nt1D');
define('AUTH_SALT',        '/sM%$h8DIO6]~c/A(rs-#_,0XS//)IG$LZc>6Tw(Bjt-uT6-H/q#n.W>Lh`VWI8T');
define('SECURE_AUTH_SALT', '{I7b4^pPrm+hC>`h,+]<7t[!=*q;OaWMY}qDk2a~PZmzN5,E;L:WA1((8VeQy~d8');
define('LOGGED_IN_SALT',   'Kn__qumG!3T6;6jN3$Iqkae|&f.vRZ<r}dO5d/|s@W$(a(Qt}MRj3A ZpV<kCya^');
define('NONCE_SALT',       ').OK=mcwZxvu^C!wXf]|*r<(Wlo+44:C%[%b%V9uAPV~=UV;zRG~vgibEe-2=H,Y');

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
define('UPLOADS', 'wp-content/uploads');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
