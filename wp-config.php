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
define( 'DB_NAME', 'sql11517247' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'sql11517247' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'r6R885pKyw' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'sql11.freesqldatabase.com' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'Y*ql=8l|k_9iJE`3ha(X J_~uEkx%uOqwDqap>@KmmP{=d4 L<;f;u+`(JJva)cu' );
define( 'SECURE_AUTH_KEY',  'Vd<ixNyl!l4F#m*UGv0?>&msewKPXeMn09qoU[{iBqbGj`n|G7d60s<Br{bgwU.l' );
define( 'LOGGED_IN_KEY',    '?a1qhW]4$RX9qAXL0M$p{ob7F_u,GzIDXtA_QSsaTKBd$VJja= Zz;]GCxr7dF7v' );
define( 'NONCE_KEY',        '8nz[]VxT91~J$%w56M~{r=a~_zUg2kqKb8+ w-@6VMg g7uoAqU )(r}WR`wtNW9' );
define( 'AUTH_SALT',        'u,5B{!5Vmn>Cdl]_={@PA{OcHUfh?_izzS+@/5I5#Y?4;3uYOr}?j4PW/H0=y@9u' );
define( 'SECURE_AUTH_SALT', ';k(OulPjZ/8+OP;wq^8 &i2=iyD-k*7fkkAKe#}L<FA}}L:s{(&2?;1ba~Em;fC4' );
define( 'LOGGED_IN_SALT',   '$0})n6v3gF]SfHY#dlIYj{F:<hX[]cR%awFtc^h]yd`@VlguKM}vn[,w5<]Gq&%V' );
define( 'NONCE_SALT',       'JNx=P5a:{,D0[XIxEg7n-BRQx`B$kNOb9xTqZ*Btal`#a?RvR=7m(JhaQZ^T8(T6' );

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
