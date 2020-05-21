<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'myfirstbase5' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}fi+?i0qLVT>8p^)9;2ZAuks[z54!]/$`cL9hwn.9b^#]:m97a0E4* s{n[1PIlm' );
define( 'SECURE_AUTH_KEY',  'LXR.[C%QWJJcMrd2|gFkKm*s/MwTmI5f#H82yOJwbOU>LCK@$>4ERX!rH7Zxmdgt' );
define( 'LOGGED_IN_KEY',    'azi}Fv5pP[B+oD>8*aN&80Bydr;OZtX[QDQ~6~7_ yk_B&#}ih2!Aw[;]wa(vx7~' );
define( 'NONCE_KEY',        'U4X(6jN7?Ws!Qk8W!iOddX+;>kUx~[&A#,YkSLt*4Tax8WnI@!pH5weH5$fi_`iN' );
define( 'AUTH_SALT',        'y<&T[,@I&}L@U|ez>EjY=dAc@n)g{%;sk|t!r84^)WJNJ>,K^R=-/aYUjGL&DMdo' );
define( 'SECURE_AUTH_SALT', '[zR!YO+X*-XUL{nI]ts|WVlK)y([<}6D_o;/]ewi8;G!b2~A,{U;+Kq-59|ku;xo' );
define( 'LOGGED_IN_SALT',   'FI#Mk+YVV#]kh4+{tVzyXW&8U-pt}vfU3nul;T/Vd;_]V8ciGJ=*;!:=.n4@]9=C' );
define( 'NONCE_SALT',       'f#*Q1RQ3~K_)`Ge$[#r{SWRnk8K2!G G]s`RD4G88GaXwg9:Y5%R#!HT} ,xAfEU' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
