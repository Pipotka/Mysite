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
define( 'DB_NAME', '205-22_36597' );

/** Имя пользователя базы данных */
define( 'DB_USER', '205-22_36597' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Put1n4@n' );

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
define( 'AUTH_KEY',         'prM;;u=zNQr@?zNHm{EO&a57Yb(&IFcLv,,Jla,#Z$ y4][,VdI4zEws^);::$1|' );
define( 'SECURE_AUTH_KEY',  '|fNz DM!k/2m_H,mIBZ^e1@8+6=WP@P-Osu{Wnt4M?Z:jF_A%ow>66?YRntgQ3Gb' );
define( 'LOGGED_IN_KEY',    '77T~bAq+%ow5(I1^L@U)mm:dWVAxvSyp<}?!NnCIom##TcxjN/w)~YlC+zI6~s(~' );
define( 'NONCE_KEY',        'g16=?[5$~dF/H}><,}#1N vM!!3e&<TwVRjs!5I^JOYKc82lqRn:+}pzalXt2/z~' );
define( 'AUTH_SALT',        'xW8`k/g-R{V!s-Q?~Iw;xs ?jyzQ.T/EI)WRj3E%r/tSk> }~Eb%i`m6/EpXV<hE' );
define( 'SECURE_AUTH_SALT', 'CF#0@~9l=WrmW>]}E9H~)-:JK?}uA{=@3%_qFKg(FM&FvB^cv&PR=3e~p%(LI$bq' );
define( 'LOGGED_IN_SALT',   'T[X,uht2*{b$m@r6,.w5vD}Dq%k_DN7(<Df{LKpZ85D9+(10Dp-;dF]rtT1Kd|@d' );
define( 'NONCE_SALT',       'w45B1{ZaoM!3F.wXrmz7Gc#8jWu,~7t,T:nm5t+7I^hC$ <VuRgUO!E7A9H9X;] ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'Jq15M_';


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