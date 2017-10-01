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
define('DB_NAME', 'wp2');

/** Имя пользователя MySQL */
define('DB_USER', 'wp2');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'admin');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' v23I:X&+!dieM8R Gn!v0L[Z)nOFQX5HhIGX{.gT-XO!$+W=5L5J4a tNuJ<W/e');
define('SECURE_AUTH_KEY',  '9XJsVsV*4.Pxid`MjN}j&gFh/#Nu,sG%DFOa1PUs+7WW[J}]Ie?]52[k6`p/Kr91');
define('LOGGED_IN_KEY',    ' gz3&q9;jzQR@q(W*LZZZUMKl_${]l{Pu.{kj)4sw9OZN}aMc,)y(33YZtzb)=IK');
define('NONCE_KEY',        '[]p=:qO=/k6 Uy1uV oH3i/f(9FcFMmW<&^Qa`tPMy-}Br2ap)O<KJk:6!z_?6gR');
define('AUTH_SALT',        '0+y 0YQL6?]msG.-AcP6jp%#HUJUdo=@B~YH[>=MHMK/j|h^LoB(8i944p{1HIWW');
define('SECURE_AUTH_SALT', '`IAN*7a~PmRFO;VlFTOKPH_`*a+7%iFYTt#zH]`ez.W9/ht~iICL$d,0M.{{|QHQ');
define('LOGGED_IN_SALT',   'hT@bH[BWp{b#[#MDyj#U}?bka*-S2!R rL{kZn:/q$$f6uF}}^P^LSt)8Xy.Yvcs');
define('NONCE_SALT',       '7Pm&(!.]_,^R0jxC<is-{Y@*[_N>i_gS(g*P4px!MwUI*#.8Hf,j,Y+]3]Vz0p)]');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
