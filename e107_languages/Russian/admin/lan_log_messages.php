<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Russian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2017/12/25 19:40:26
|
|        $Author:  net1313 $
+---------------------------------------------------------------+
*/
define("LAN_AUDIT_LOG_001", "Вход забаненного юзера");
define("LAN_AUDIT_LOG_002", "Включена защита от флуда");
define("LAN_AUDIT_LOG_003", "Доступ забаненного IP");
define("LAN_AUDIT_LOG_004", "");
define("LAN_AUDIT_LOG_005", "");
define("LAN_AUDIT_LOG_006", "Пользователь изменил пароль");
define("LAN_AUDIT_LOG_007", "Пользователь изменил адрес эл. почты");
define("LAN_AUDIT_LOG_008", "");
define("LAN_AUDIT_LOG_009", "");
define("LAN_AUDIT_LOG_010", "Данные пользователя изменены админом");
define("LAN_AUDIT_LOG_011", "Пользователь подписался");
define("LAN_AUDIT_LOG_012", "Пользователь подтвердил регистрацию");
define("LAN_AUDIT_LOG_013", "Пользователь вошел в систему");
define("LAN_AUDIT_LOG_014", "Пользователь вышел");
define("LAN_AUDIT_LOG_015", "Пользователь изменил отображаемое имя");
define("LAN_AUDIT_LOG_016", "Пользователь изменил пароль");
define("LAN_AUDIT_LOG_017", "Пользователь изменил адрес эл. почты");
define("LAN_AUDIT_LOG_018", "Сброс пароля пользователя");
define("LAN_AUDIT_LOG_019", "Пользователь изменил настройки");
define("LAN_AUDIT_LOG_020", "Пользователь добавлен Админом");
define("LAN_AUDIT_LOG_021", "Получен отказ эл. почты юзера");
define("LAN_AUDIT_LOG_022", "Пользователь забанен");
define("LAN_AUDIT_LOG_023", "Сброс отказа почты юзера");
define("LAN_AUDIT_LOG_024", "Временный статус пользователя");

// Admin log events
//-----------------
define("LAN_AL_ADLOG_01", "Лог Админа - обновление настроек");
define("LAN_AL_ADLOG_02", "Лог Админа - удалены старые данные");
define("LAN_AL_ADLOG_03", "Лог аудита пользователей - удалены старые данные");
define("LAN_AL_ADLOG_04", "Настройки аудита пользователей обновлены");
define("LAN_AL_ADLOG_05", "");

// User edits
//-----------
define("LAN_AL_USET_01", "Админ редактировал данные пользователя");
define("LAN_AL_USET_02", "Пользователь добавлен Админом");
define("LAN_AL_USET_03", "Обновление параметров пользователя");
define("LAN_AL_USET_04", "Пользователи удалены");
define("LAN_AL_USET_05", "Пользователь забанен");
define("LAN_AL_USET_06", "Пользователь разбанен");
define("LAN_AL_USET_07", "Пользователь удален");
define("LAN_AL_USET_08", "Юзер получил статус Админа");
define("LAN_AL_USET_09", "Статус администратора отозван");
define("LAN_AL_USET_10", "Активация пользователя");
define("LAN_AL_USET_11", "Отправлен email подтверждения уч. записи");
define("LAN_AL_USET_12", "Повторная отправка еmail подтверждения всем");
define("LAN_AL_USET_13", "Удалены сообщения отрицательных отказов");
define("LAN_AL_USET_14", "Обновление принадлежности к классу");
define("LAN_AL_USET_15", "Отказано в регистрации");

// Userclass events
//------------------
define("LAN_AL_UCLASS_00", "Невыясненное событие с userclass");
define("LAN_AL_UCLASS_01", "Создан класс пользователей");
define("LAN_AL_UCLASS_02", "Удален класс пользователей");
define("LAN_AL_UCLASS_03", "Отредактирован класс пользователей");
define("LAN_AL_UCLASS_04", "Обновлено участие в классе");
define("LAN_AL_UCLASS_05", "Отредактированны исходные настройки класса");
define("LAN_AL_UCLASS_06", "Удалена принадлежность к классу");

// Banlist events
//----------------
define("LAN_AL_BANLIST_00", "Невыясненное событие с баном");
define("LAN_AL_BANLIST_01", "Бан добавлен в ручную");
define("LAN_AL_BANLIST_02", "Бан удален");
define("LAN_AL_BANLIST_03", "Изменение срока бана");
define("LAN_AL_BANLIST_04", "Запись в белый список");
define("LAN_AL_BANLIST_05", "Удаление из белого списка");
define("LAN_AL_BANLIST_06", "Банлист экспортирован");
define("LAN_AL_BANLIST_07", "Банлист импортирован");
define("LAN_AL_BANLIST_08", "Обновлены настройки бан-листа");
define("LAN_AL_BANLIST_09", "Редакция записи в бан-листе");
define("LAN_AL_BANLIST_10", "Редакция записи в белом списке");
define("LAN_AL_BANLIST_11", "Запись из белого списка занесена в бан");
define("LAN_AL_BANLIST_12", "Очищенны просроченные баны");

// Comment-related events
//-----------------------
define("LAN_AL_COMMENT_01", "Комментарии удалены");

// Rolling log events
//-------------------
define("LAN_ROLL_LOG_01", "Пустое имя пользователя или пароль");
define("LAN_ROLL_LOG_02", "Введен неверный код изображения (капчи)");
define("LAN_ROLL_LOG_03", "Неверное сочетание имени пользователя и пароля");
define("LAN_ROLL_LOG_04", "Ввод неверного имени пользователя"); 
define("LAN_ROLL_LOG_05", "Попытка входа пользователя не прошедшего полную авторизацию");
define("LAN_ROLL_LOG_06", "Вход заблокирован обработчиком событий");
define("LAN_ROLL_LOG_07", "Многократные попытки входа с одного IP");
define("LAN_ROLL_LOG_08", "Недопустимая длина имени пользователя");
define("LAN_ROLL_LOG_09", "Забаненный юзер пытался войти");
define("LAN_ROLL_LOG_10", "Сбой входа - причина неизвестна");
define("LAN_ROLL_LOG_11", "Админ не смог войти в ситему");

// Prefs events
//-------------
define("LAN_AL_PREFS_01", "Изменение настроек");
define("LAN_AL_PREFS_02", "Созданы новые настройки");
define("LAN_AL_PREFS_03", "Ошибка при сохранении настроек");

// Front Page events
//------------------
define("LAN_AL_FRONTPG_00", "Невыясненное событие с Главной страницей");
define("LAN_AL_FRONTPG_01", "Изменен порядок правил");
define("LAN_AL_FRONTPG_02", "Добавлено правило");
define("LAN_AL_FRONTPG_03", "Правила редактировались");
define("LAN_AL_FRONTPG_04", "Правила удалены");
define("LAN_AL_FRONTPG_05", "");
define("LAN_AL_FRONTPG_06", "");

// User theme admin
//-----------------
define("LAN_AL_UTHEME_00", "Невыясненное событие с темой");
define("LAN_AL_UTHEME_01", "Изменены параметры темы пользователя");
define("LAN_AL_UTHEME_02", "");

// Update routines
//----------------
define("LAN_AL_UPDATE_00", "Невыясненное событие с обновлениями");
define("LAN_AL_UPDATE_01", "Выполнено обновление с 1.0 до 2.0");
define("LAN_AL_UPDATE_02", "Выполнено обновление с 0.7.x 0.7.6 ");
define("LAN_AL_UPDATE_03", "Добавлены отсутствующие настройки");

// Administrator routines
//-----------------------
define("LAN_AL_ADMIN_00", "Невыясненное событие с администратором");
define("LAN_AL_ADMIN_01", "Обновление прав доступа админа");
define("LAN_AL_ADMIN_02", "Удаление прав доступа админа");
define("LAN_AL_ADMIN_03", "");

// Maintenance mode
//-----------------
define("LAN_AL_MAINT_00", "Неизвестное содержание сообщения");
define("LAN_AL_MAINT_01", "Установленного режима обслуживания");
define("LAN_AL_MAINT_02", "Режим обслуживания очищается");

// Sitelinks routines
//-------------------
define("LAN_AL_SLINKS_00", "Невыясненное событие со ссылками");
define("LAN_AL_SLINKS_01", "Создана подссылка");
define("LAN_AL_SLINKS_02", "Ссылки сайта перемещены вверх");
define("LAN_AL_SLINKS_03", "Ссылки сайта перемещены вниз");
define("LAN_AL_SLINKS_04", "Обновлен порядок ссылок сайта");
define("LAN_AL_SLINKS_05", "Обновлены настройки ссылок навигации");
define("LAN_AL_SLINKS_06", "Удаление ссылок навигации");
define("LAN_AL_SLINKS_07", "Предложена ссылка навигации");
define("LAN_AL_SLINKS_08", "Обновление ссылок навигации");

// Theme manager routines
//-----------------------
define("LAN_AL_THEME_00", "Неизвестное сообщение, связанное с темой");
define("LAN_AL_THEME_01", "Тема сайта обновлена");
define("LAN_AL_THEME_02", "Обновление темы админ-панели");
define("LAN_AL_THEME_03", "Имидж преднагрузки/сайт обновление CSS");
define("LAN_AL_THEME_04", "Администратор стиль/CSS обновление");
define("LAN_AL_THEME_05", "");

// Cache control routines
//-----------------------
define("LAN_AL_CACHE_00", "Невыясненное событие с кэшем");
define("LAN_AL_CACHE_01", "Обновление настроек кэша");
define("LAN_AL_CACHE_02", "Очищен кэш системы");
define("LAN_AL_CACHE_03", "Очищен кэш контента");
define("LAN_AL_CACHE_04", "");

// Emote admin
//------------
define("LAN_AL_EMOTE_00", "Невыясненное событие со смайлами");
define("LAN_AL_EMOTE_01", "Иемзнен текущий набор смайлов");
define("LAN_AL_EMOTE_02", "Активация смайлов");
define("LAN_AL_EMOTE_03", "Смайлы отключены");

// Welcome message
//----------------
define("LAN_AL_WELCOME_00", "Невыясненное событие с приветсвием");
define("LAN_AL_WELCOME_01", "Приветсвие создано");
define("LAN_AL_WELCOME_02", "Приветствие обновлено");
define("LAN_AL_WELCOME_03", "Приветствие удалено");
define("LAN_AL_WELCOME_04", "Изменение настроек приветствия");
define("LAN_AL_WELCOME_05", "");

// Admin Password
//---------------
define("LAN_AL_ADMINPW_01", "Изменен пароль администратора");

// Banners Admin
//--------------
define("LAN_AL_BANNER_00", "Невыясненное событие с баннером");
define("LAN_AL_BANNER_01", "Обновление меню баннера");
define("LAN_AL_BANNER_02", "Баннер создан");
define("LAN_AL_BANNER_03", "Обновление баннера");
define("LAN_AL_BANNER_04", "Удаление баннера");
define("LAN_AL_BANNER_05", "Обновлены настройки баннеров");
define("LAN_AL_BANNER_06", "");

// Image management
//-----------------
define("LAN_AL_IMALAN_00", "Невыясненное событие с изображениями");
define("LAN_AL_IMALAN_01", "Аватар удалены");
define("LAN_AL_IMALAN_02", "Все аватары и фотографии удалены");
define("LAN_AL_IMALAN_03", "Аватар удалены");
define("LAN_AL_IMALAN_04", "Настройки изображений обновлены");
define("LAN_AL_IMALAN_05", "");
define("LAN_AL_IMALAN_06", "");

// Language management
//--------------------
define("LAN_AL_LANG_00", "Невыясненное событие с локализацией");
define("LAN_AL_LANG_01", "Изменены настройки локализации");
define("LAN_AL_LANG_02", "Удалены таблицы языка");
define("LAN_AL_LANG_03", "Созданы таблицы языка");
define("LAN_AL_LANG_04", "Создан архив zip локализации");
define("LAN_AL_LANG_05", "");

// Meta Tags
//----------
define("LAN_AL_META_01", "Обновлены Мета-теги");

// Downloads
//----------
define("LAN_AL_DOWNL_01", "Изменены параметры загрузки");
define("LAN_AL_DOWNL_02", "Создана категория скачиваний");
define("LAN_AL_DOWNL_03", "Категории скачиваний обновлены");
define("LAN_AL_DOWNL_04", "Удалены категории скачиваний");
define("LAN_AL_DOWNL_05", "Создана загрузка/скачивание");
define("LAN_AL_DOWNL_06", "Скачивания обновлены");
define("LAN_AL_DOWNL_07", "Скачивания удалены");
define("LAN_AL_DOWNL_08", "Обновлен порядок категорий загрузок");
define("LAN_AL_DOWNL_09", "Добавлены квоты на скачивание");
define("LAN_AL_DOWNL_10", "Квоты на скачивание отредактированны");
define("LAN_AL_DOWNL_11", "Удалены квоты на скачивание");
define("LAN_AL_DOWNL_12", "Зеркало скачиваний добавлено");
define("LAN_AL_DOWNL_13", "Зеркало скачиваний обновлено");
define("LAN_AL_DOWNL_14", "Зеркало скачиваний удалено");
define("LAN_AL_DOWNL_15", "");

// Custom Pages/Menus
//-------------------
define("LAN_AL_CPAGE_01", "Добавлена страница/меню");
define("LAN_AL_CPAGE_02", "Обновлена страница/меню");
define("LAN_AL_CPAGE_03", "Удаление страниц/меню");
define("LAN_AL_CPAGE_04", "Обновление настроек страниц/меню");

// Extended User Fields
//---------------------
define("LAN_AL_EUF_01", "Доп. поле перемещено вверх");
define("LAN_AL_EUF_02", "Доп. поле перемещено вниз");
define("LAN_AL_EUF_03", "Перемещение категории доп. поля вверх");
define("LAN_AL_EUF_04", "Перемещение категории доп. поля вниз");
define("LAN_AL_EUF_05", "Добавленое доп. поля");
define("LAN_AL_EUF_06", "Обновление доп. поля");
define("LAN_AL_EUF_07", "Доп. поле пользователя удалено");
define("LAN_AL_EUF_08", "Добавлена категория доп. полей");
define("LAN_AL_EUF_09", "Обновление категории доп. полей");
define("LAN_AL_EUF_10", "Удалены категории доп. полей");
define("LAN_AL_EUF_11", "Активация дополнительных полей");
define("LAN_AL_EUF_12", "Отключение дополнительных полей");

// Menus
//------
define("LAN_AL_MENU_01", "Меню активированно");
define("LAN_AL_MENU_02", "Меню - установка видимости");
define("LAN_AL_MENU_03", "Меню - перенос в другую область");
define("LAN_AL_MENU_04", "Меню отключено");
define("LAN_AL_MENU_05", "Меню - перемещено на верх");
define("LAN_AL_MENU_06", "Меню - перемещено вниз");
define("LAN_AL_MENU_07", "Меню - вверх");
define("LAN_AL_MENU_08", "Меню - вниз");
define("LAN_AL_MENU_09", "");

// Public Uploads
//---------------
define("LAN_AL_UPLOAD_01", "Загруженный файл удален");
define("LAN_AL_UPLOAD_02", "Изменены настройки загрузок");

// Search
//-------
define("LAN_AL_SEARCH_01", "Обновление настроек поиска");
define("LAN_AL_SEARCH_02", "Обновление опций поиска");
define("LAN_AL_SEARCH_03", "Авто-обновление настроек поиска");
define("LAN_AL_SEARCH_04", "Обновление областей поиска");
define("LAN_AL_SEARCH_05", "Обновление параметров обработчика поиска");
define("LAN_AL_SEARCH_06", "");

// Notify
//-------
define("LAN_AL_NOTIFY_01", "Обновление параметров уведомления");

// News
//-----
define("LAN_AL_NEWS_01", "Элемент новостей удален");
define("LAN_AL_NEWS_02", "Удаление категории новостей");
define("LAN_AL_NEWS_03", "Удаление опубликованной новости");
define("LAN_AL_NEWS_04", "Создана категория новостей");
define("LAN_AL_NEWS_05", "Обновление категории новостей");
define("LAN_AL_NEWS_06", "Обновление настроек новостей");
define("LAN_AL_NEWS_07", "Утверждение предоставленной новости");
define("LAN_AL_NEWS_08", "Добавлена новость");
define("LAN_AL_NEWS_09", "Обновление новости");
define("LAN_AL_NEWS_10", "Изменение в записи категорий новостей");
define("LAN_AL_NEWS_11", "Удаление записи в категории новостей");
define("LAN_AL_NEWS_12", "Изменение в новости");
define("LAN_AL_NEWS_13", "Удаление новости");

// File Manager
//-------------
define("LAN_AL_FILEMAN_01", "Удаление файлов");
define("LAN_AL_FILEMAN_02", "Перемещение файлов");
define("LAN_AL_FILEMAN_03", "Загружено файлов");
define("LAN_AL_FILEMAN_04", "");

// Mail
//-----
define("LAN_AL_MAIL_01", "Отправлено сообщение тест");
define("LAN_AL_MAIL_02", "Создана рассылка");
define("LAN_AL_MAIL_03", "Обновлены настройки эл. почты");
define("LAN_AL_MAIL_04", "Удалены данные о рассылке");
define("LAN_AL_MAIL_05", "Профилактика БД почты");
define("LAN_AL_MAIL_06", "Активация рассылки");
define("LAN_AL_MAIL_07", "");

// Plugin Manager
//---------------
define("LAN_AL_PLUGMAN_01", "Плагин установлен");
define("LAN_AL_PLUGMAN_02", "Обновление плагина");
define("LAN_AL_PLUGMAN_03", "Плагин удален");
define("LAN_AL_PLUGMAN_04", "Плагин обновлен");

// URL Manager
//---------------
define("LAN_AL_EURL_01", "Изменена настройка URL-адреса сайта");

// Sundry Pseudo-plugins - technically they"re plugins, but not worth the file overhead of treating them separately
//----------------------
define("LAN_AL_MISC_01", "Обновлены настройки меню Tree menu");
define("LAN_AL_MISC_02", "Обновлены настройки меню онлайн");
define("LAN_AL_MISC_03", "Обновлены настройки меню входа");
define("LAN_AL_MISC_04", "Обновлены настройки меню камментов");
define("LAN_AL_MISC_05", "Обновлены настройки меню даты/времени");
define("LAN_AL_MISC_06", "Обновлены настройки меню календаря блога");
define("LAN_AL_MISC_07", "");


define("LAN_AL_PING_01", "Пинг сервисы");

define("LAN_AL_ADMINUI_01", "Создана таблица ДБ через админ-панель: [x]");
define("LAN_AL_ADMINUI_02", "Обновлена таблица БД через админ-панель: [x]");
define("LAN_AL_ADMINUI_03", "Удалена таблица БД через админ-панель: [x]");
define("LAN_AL_ADMINUI_04", "Ошибка БД в админ-панели: [x]");
define("LAN_AL_BACKUP", "Резервное копирование базы данных");

define("LAN_AL_MEDIA_01", "Загрузка медиа-файлов");

define("LAN_AL_USET_100", "Админ вошел под именем другого юзера");
define("LAN_AL_USET_101", "Админ вышел из аккаунта дрогого юзера");
?>