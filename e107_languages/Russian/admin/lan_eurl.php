<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Russian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2017/12/17 22:13:49
|
|        $Author: net1313 $
+---------------------------------------------------------------+
*/
define("LAN_EURL_NAME", "Управление URL");
define("LAN_EURL_NAME_CONFIG", "Основные шаблоны");
define("LAN_EURL_NAME_ALIASES", "Алиасы");
define("LAN_EURL_NAME_SETTINGS", "Общие настройки");
define("LAN_EURL_NAME_HELP", "Справка");
define("LAN_EURL_EMPTY", "Список пуст");
define("LAN_EURL_LEGEND_CONFIG", "Выбор URL-адреса для каждой области сайта");
define("LAN_EURL_LEGEND_ALIASES", "Настройка основных URL алиасов для каждого URL маршрута");
define("LAN_EURL_DEFAULT", "По умолчанию");
define("LAN_EURL_PROFILE", "Шаблон адреса");
define("LAN_EURL_INFOALT", "Информация");
define("LAN_EURL_PROFILE_INFO", "Информация о шаблоне не доступна");
define("LAN_EURL_LOCATION", "Расположение URL шаблона");
define("LAN_EURL_LOCATION_NONE", "Конфигурационный файл не доступен");
define("LAN_EURL_FORM_HELP_DEFAULT", "С установленной локализацией");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Значение по умолчанию —");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Алиас в");
define("LAN_EURL_FORM_HELP_EXAMPLE", "Базовый URL-адрес");
define("LAN_EURL_ERR_ALIAS_MODULE", "Не удалось сохранить Алиас «%1\$s» - в системе уже есть такой URL шаблон. Пожалуйста, выберите другое значение для алиаса «%2\$s»");
define("LAN_EURL_SURL_UPD", "  ЧПУ были обновлены");
define("LAN_EURL_SURL_NUPD", "  ЧПУ НЕ обновлены");
define("LAN_EURL_SETTINGS_PATHINFO", "Не отображать в URL путь из каталога к файлу");
define("LAN_EURL_SETTINGS_MAINMODULE", "Связать с корневым пространством имен");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Выберите области, относящиеся к корневому URL. Пример: если News являются вашим корневым пространством имен, то ЧПУ в виде http://yoursite.com/News-Item-Title связывается с разделом новостей (адрес любой страницы новостей будет резолвиться)");
define("LAN_EURL_SETTINGS_REDIRECT", "Перенаправление к системной странице 404");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Если установлено значение false, то система отобразит страницу 404 (без переадресации браузера)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Авто-замена строки SEF");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Выберите, из каких элементов будет собрана строка SEF, к примеру выборка из заголовка Title (в новостях, страницах и т. д.).");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Сделайте безопасней");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "замена-на-дефисы,-и-в-нижнем регистре");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "замена-на-дефисы,-и-СлитноКаждоеСловоСЗаглавной");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "замена-на-дефисы-и-без-замены регистра");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "подчеркивание_и_в_нижнем_регистре");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Подчеркивание_И_СлитноКаждоеСловоСЗаглавной");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Подчеркивание_без_замены_регистра");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "разделитель'+' +и+ нижний+регистр");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "разделитель'+' +и+ СлитноКаждоеСловоСЗаглавной");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "разделитель'+' +без+замены+регистра");
define("LAN_EURL_MODREWR_DESCR", "Удаляет из строки URL-адреса название файла входа (index.php/). Для Aapache веб-сервера нужно подключить mod_rewrite. После чего, в корневой папке сайта переименуйте htaccess.txt на .htaccess и если необходимо, измените <em>«RewriteBase»</em> директиву.");
define("LAN_EURL_MENU", "URL-адреса сайта");
define("LAN_EURL_MENU_CONFIG", "Строка параметров URL");
define("LAN_EURL_MENU_ALIASES", "Алиасы");
define("LAN_EURL_MENU_SETTINGS", "Параметры");
define("LAN_EURL_MENU_HELP", "Справка");
define("LAN_EURL_MENU_PROFILES", "Структура URL-адресов");
define("LAN_EURL_UC", "В стадии разработки");
define("LAN_EURL_CORE_MAIN", "Корневое пространство имен сайта - алиас не используется.");
define("LAN_EURL_FRIENDLY", "Человеко-понятный URL");
define("LAN_EURL_LEGACY", "URL-адрес системы.");
define("LAN_EURL_REWRITE_LABEL", "SEO (ЧПУ) URL");
define("LAN_EURL_REWRITE_DESCR", "SEO (ЧПУ) для пользователя и поисковиков.");
define("LAN_EURL_CORE_NEWS", "Новости");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Полностью человеко-понятные URL (не системные и наиболее понятные)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "..");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Человеко-понятные URLs без ID (не системные, более понятные)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Производит парсинг и посторение ссылок.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Дружественные URL-адресов с идентификатором (Спектакль мудрый)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Показывает, что автоматизированная связь разбора и монтаж на основе предопределенных маршрут правил.");
define("LAN_EURL_CORE_USER", "Страница Пользователя");
define("LAN_EURL_USER_REWRITE_LABEL", "ЧПУ-адреса");
define("LAN_EURL_USER_REWRITE_DESCR", "Поиск двигатель и пользователь дружественных URL.");
define("LAN_EURL_CORE_PAGE", "Созданные страницы");
define("LAN_EURL_PAGE_SEF_LABEL", "Дружественные URL-адресов с идентификатором (производительность)");
define("LAN_EURL_PAGE_SEF_DESCR", "Поиск двигатель и пользователь дружественных URL.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Дружественные URL-адресов без ID (не производительность, более дружественной)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Поиск двигатель и пользователь дружественных URL.");
define("LAN_EURL_CORE_SEARCH", "Поиск");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "По умолчанию URL-адрес поиска");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Наследие прямой URL-адрес.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "ЧПУ (Человеко-понятный URL)");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "..");
define("LAN_EURL_CORE_SYSTEM", "Системный");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "По умолчанию система URL");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URL-адреса для страниц как не найден, отказано в доступе, и т.д.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Системы дружественных URL");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URL-адреса для страниц как не найден, отказано в доступе, и т.д.");
define("LAN_EURL_CORE_INDEX", "Главная страница");
define("LAN_EURL_CORE_INDEX_INFO", "Главная страница не может иметь алиас");
define("LAN_EURL_REBUILD", "Изменить");
define("LAN_EURL_REGULAR_EXPRESSION", "Регулярное выражение");
define("LAN_EURL_KEY", "Идентификатор");
define("LAN_EURL_TABLE", "Таблица");
?>