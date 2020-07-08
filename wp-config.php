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
define('DB_NAME', 'rebornfrhf246');

/** MySQL database username */
define('DB_USER', 'rebornfrhf246');

/** MySQL database password */
define('DB_PASSWORD', 'HjJa3ezjvsC6');

/** MySQL hostname */
define('DB_HOST', 'rebornfrhf246.mysql.db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Nombre de révision limité à 3. */
define('WP_POST_REVISIONS', 3 );

/** Supression de la corbeille tout les 7 jours */
Define ('EMPTY_TRASH_DAYS', 1);

/** Ne pas garder toutes les redimensions d'images */
Define ('IMAGE_EDIT_OVERWRITE', true);




/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0xSSgbLqld05q5xBDWaYlhDZtaysyONVDfg3CNJlo2+mofT+sVfrXPelXZ+a');
define('SECURE_AUTH_KEY',  '9iInIjMbVS+2z2IHiVrR6PaBsVvleZu+yc1qsMSbZ26PmQxi0BfV6U6gzJsQ');
define('LOGGED_IN_KEY',    'luVL720/NaQ3i7vC87dgu4BT0/jBMXpn2Mnc6UPMAYmRv8ODy9UzAQ0iBkJk');
define('NONCE_KEY',        '1WR0Nw9A6pDxHIdbNX9URwxjmlJ9xb0vvvZ7Ho2cd+CSJT2S9fHuya83/TvJ');
define('AUTH_SALT',        'AqFb/COkeLCoqwtM9BXBURwF1dQD3aQR+jEbcm4LDNpB6/cCmfSXBZyGsMWp');
define('SECURE_AUTH_SALT', '8aUqEekzfqKYeNvNAABWOJ4QIsA/iGORKvT+0ZB5s5DtvXlHQ7c5fRm3LjPH');
define('LOGGED_IN_SALT',   'TrMkQpc+c9NVzTonZgYfWr+tk66hUy3o4oa3oW7IZINaUZYFMEsmf/QRGwgR');
define('NONCE_SALT',       'zYzxUvjLFiA4opvxjxkVZ8xqGG/ctDMV0vfPQjCQU+cmZBQFy3TkAA5/OXaV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod866_';

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
/** Activer le mode Debug */
define('WP_DEBUG', true);

/** Log erreur dans wp-content */
Define ('WP_DEBUG_LOG', true);

/** Réparer la bdd */
Define ('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
