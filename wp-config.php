<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'travel');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K|_Ow)&(Bw?#mI=NId4E+(Y3+JQw*BU5.!JZS$s#ua78VBeL8Xi0C:r35?!h`M9O');
define('SECURE_AUTH_KEY',  'j$LgSf6cMT;C6l<^*$FfL/#hv A;_Es5To.dsDS>36|a<Es:NCKAY.k[BPmmn!X(');
define('LOGGED_IN_KEY',    ')l^w+.eG|L!mSI692PLk:#J&ab;$?qH:lB(VR%2O8{wpIlnu(iGh8[Bsqua.VDo#');
define('NONCE_KEY',        'k3T^UlDWR-*=r;[Q9ilv}-W+_^&80QY)zVt_jx6SP=8V=9]r]1vhW8jtF<xCJmtO');
define('AUTH_SALT',        'PzFz#9ebp69I78?KWdJIHE+tv zcGj%qB|~#bk+:bXNe}:TF-~Hm2%UB5qve4vEO');
define('SECURE_AUTH_SALT', '@e.V-a;pd@}Bn~4l5#0F]:;S--NmkJy)~?/$0!|yF<T_RHY90lW7+f((]/r_k7zz');
define('LOGGED_IN_SALT',   'a%veDXGaBHM<zU:O~e0436&?+Or=8*WC!%-2lk+.4;~Io76WU!tM&@&5o/(vC%0i');
define('NONCE_SALT',       'y#^7S1F&%$A(pH[&2M I]-)0`+D.MmHf`i)Yy-v,,df$W}FN+Q9.]}tS4 yFEX!m');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
