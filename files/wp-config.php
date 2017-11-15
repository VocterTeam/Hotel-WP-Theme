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
define('DB_NAME', '');

/** Имя пользователя MySQL */
define('DB_USER', '');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
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
define('AUTH_KEY',         'I9wm!V)~*;(ETv^2ealaVQT<lW^rQR$s;:;w| }V(0mg$bYe&];1.A7f3]1SgZi;');
define('SECURE_AUTH_KEY',  'ieIOlTocJ_e(E]0n DBOfe}vjGfMcZZ%;[8=d7X-!Z;6l8[ c`r75VVt7.Ao_&&+');
define('LOGGED_IN_KEY',    ']uZ+L1iV%]MpYU|!.  !o_N,+62H8;KuWwf?;TPOxGq.06,<BkFs)$2+q[-0bvOq');
define('NONCE_KEY',        'NV(O/=I6%@/SJbO{WNV:E8/#/$t%BDnnJ5yX*]L(awy2)Zm|35TQo@TXxgIZs`$C');
define('AUTH_SALT',        'fL/BINI/9S H>;9 l;8N!&VNx m!|T/k9O1Y>G`|>e+W=Pl?4*Ho,mx$eYOE.HlA');
define('SECURE_AUTH_SALT', '[,.7OG>s#7D! /YmuC*@X06Fz:-.mg;~{Vb+WjoxW$|TTKQ=jsT/tg9HMGlGJm~P');
define('LOGGED_IN_SALT',   '6Upx>/cuNYCv1O6A7Iod`r}Hbqknc=@mq#V5~B[7Lxh6knv%72Az3Fe-k2ilLgup');
define('NONCE_SALT',       '2t9e)}k5{nhnOQ42PnEyL@Nl_UE?[*S|Y<?RonF7;)&fbFH.)=yLA 4G>y6T~,[t');

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
