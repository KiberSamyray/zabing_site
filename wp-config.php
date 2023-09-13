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
define( 'DB_NAME', 'delaempro_ing' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'delaempro_ing' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'fZcxn5dgWqszmdBA' );

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
define( 'AUTH_KEY',         'S-hDrh[G#~i05`)IbPEJbSZFD]uTA,ymW1I:.T`3Y a($6/TaqGLc5;BBc_!sBKm' );
define( 'SECURE_AUTH_KEY',  'Cu] 9?J~Dt*[ZlV8X0@nh3b:z(^cNSZUmvsetADS+3~{}DNq@})SG@{i`_mt_T[u' );
define( 'LOGGED_IN_KEY',    'z^U$Zs$Ab)bP$Zux4a#{Z=Fs-9~l3CUx$,N^AL>T[>#0pq*ljPR!}e_k]9r@f=dB' );
define( 'NONCE_KEY',        'ob|eU`quP(mu?h?f1MsKFI^d{HwM>(dvx<&4?c% AvSG@{.f3*X_%F>~vu##RJN(' );
define( 'AUTH_SALT',        'VHqI]b^!sy^37HwU$?0W.4g@sdYy$oB121~e:xYh%qmWxo[{XsimEj>}6_%(yAwp' );
define( 'SECURE_AUTH_SALT', '%hyRnL0h?hK2#%1fl@yIObhe,.EtvevQk)]@9u, kDB.3lM[X^+X(%v;;uN,L9oh' );
define( 'LOGGED_IN_SALT',   'FM_-dz^HYH+)^cT#mw}~J0D=_>SQTieKUzS![,{350@lz>TUO=s>1Nfr2G%_3v>e' );
define( 'NONCE_SALT',       '/Xh8VHvcxI34MhG<BI]5CS)C#]Qy/.e1jsu0$GBDCNG8c(:+=UL#r:2I3XK%Yidq' );
/** Загружать все форматы изображений */
define(‘ALLOW_UNFILTERED_UPLOADS’, true);
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
