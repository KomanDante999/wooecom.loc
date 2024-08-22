<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wooecom' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%FWmx??@! p>Z/ k9`HoI?vpB_lL.PWo~pbh@7tn98&6Jw#lOeZfzk#tNsNdX.Qu' );
define( 'SECURE_AUTH_KEY',  'R)k-CaqDwvNP<rP?A6cOnoYts+jEnlJ4S6wAcu&{+db(&w/h;`kC{etLBR6;4OF(' );
define( 'LOGGED_IN_KEY',    'ZsGw{,8EK|_8[/3r|ut@Y=[x#RbPbk2|*QKvD{R3mp8@3Wnmm?KKe|0>u&h&oz_E' );
define( 'NONCE_KEY',        '[Lx)=^`Q5ViRfWpa,CSL]+<ETKE;w`1uwpSQ4YTu<Q;BGgXP@Lm@0S2Xb<@F )uM' );
define( 'AUTH_SALT',        '$)(_5RQWwMtNb&z/1%n=7D(OUQzb_n?h>:spG(8/`+@ jO8d}F/F&i&b9T+4fw+Y' );
define( 'SECURE_AUTH_SALT', '{}JDt9Q.;R<zSU2m+~l:mWP)@v`rss7AC^5Pw+~lD2^gIY@RI02.)#9k*V=NOXLx' );
define( 'LOGGED_IN_SALT',   'p9}S^ Cm|L<#+A1IvRHkPEx7nlER0cfC( b0D)!4Y%:?vi@Vo=-k_5`+gk~r`@q@' );
define( 'NONCE_SALT',       ',FVm7E~t/eQO0zr4BIf%C{9>aBZy[Fis]M}lPVHX_c~M,r2nc*. p?KVr4{evD?Q' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
