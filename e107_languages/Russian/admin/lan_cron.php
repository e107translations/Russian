<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Russian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2019/02/04 23:17:02
|        $Author: net1313 $
+---------------------------------------------------------------+
*/
if (!defined("PAGE_NAME")) { define("PAGE_NAME", "Планировщик задач"); }

// Menu
define("LAN_CRON_M_02", "Обновить");

// Table heading

define("LAN_CRON_2", "Функция");
define("LAN_CRON_3", "Ярлык");
define("LAN_CRON_4", "Выполнен"); // проверить перевод в действии

// Default crons
define("LAN_CRON_01_1", "Сообщение тест");
define("LAN_CRON_01_2", "Отправить сообщение тест [eml].");
define("LAN_CRON_01_3", "Рекомендуется протестировать планировщик");

define("LAN_CRON_02_1", "Текущая очередь рассылок");
define("LAN_CRON_02_2", "Запуск очереди рассылок");

define("LAN_CRON_03_1", "Проверка возвращенных отказов эл.почты");
define("LAN_CRON_03_2", "Проверка уведомлений об отрицательном ответе");

define("LAN_CRON_04_1", "Перезапуск проверки на бан");
define("LAN_CRON_04_2", "Процесс перезапуска");
define("LAN_CRON_04_3", "В случае, если перепроверка на бан включена");

define("LAN_CRON_05_1", "Резервное копирование базы данных");
define("LAN_CRON_05_2", "Сохранить копию БД в");


// Error and info messages
define("LAN_CRON_6", "Не удалось импортировать Prefs");
define("LAN_CRON_7", "Не удалось импортировать настройки времени");
define("LAN_CRON_8", "Импортированные настройки времени");

define("LAN_CRON_9", "[x] минут и [y] секунд назад.");
define("LAN_CRON_10", "[y] секунд назад.");

define("LAN_CRON_11", "Активные Задачи");
define("LAN_CRON_12", "Последнее обновление задач");
define("LAN_CRON_13", "Пожалуйста, убедитесь что cron.php является исполняемым файлом.");
define("LAN_CRON_14", "Пожалуйста, установите права файла /cron.php в CHMOD 755.");

define("LAN_CRON_15", "Используйте следующую команду ");
define("LAN_CRON_16", "Из панели управления сервера (например, cPanel, DirectAdmin, Plesk и т.д.) создайте crontab для запуска этой команды каждую минуту.");

// leave some room for additions/changes

// Info for checkCoreUpdate cron
define("LAN_CRON_20_1", "Проверить обновления e107");
define("LAN_CRON_20_2", "Проверьте e107.org для обновления ядра");
define("LAN_CRON_20_3", "Рекомендуется обновлять систему.");
define("LAN_CRON_20_4", "Обновить из Git репозитория");
define("LAN_CRON_20_5", "Обновление e107 последней версией на Github");
define("LAN_CRON_20_6", "Рекомендуется только разработчикам.");
//define("LAN_CRON_20_7", "Warning!");//LAN_WARNING
define("LAN_CRON_20_8", "Может привести к нестабильности сайта!");

define("LAN_CRON_30", "Каждую минуту");
define("LAN_CRON_31", "Каждую последующую минуту");
define("LAN_CRON_32", "Каждые 5 минут");
define("LAN_CRON_33", "Каждые 10 минут");
define("LAN_CRON_34", "Каждые 15 минут");
define("LAN_CRON_35", "Каждые 30 минут");

define("LAN_CRON_36", "Каждый час");
define("LAN_CRON_37", "Каждый последующий час");
define("LAN_CRON_38", "Каждые 3 часа");
define("LAN_CRON_39", "Каждые 6 часов");

define("LAN_CRON_40", "Каждый день");
define("LAN_CRON_41", "Каждый месяц");
define("LAN_CRON_42", "Каждый день недели");

define("LAN_CRON_50", "Минут(а):");
define("LAN_CRON_51", "Часа(ов):");
define("LAN_CRON_52", "Дня(ей):");
define("LAN_CRON_53", "Месяц(ев):");
define("LAN_CRON_54", "Дня(дни) недели:");
define("LAN_CRON_55", "Ошибка резервного копирования базы данных");
define("LAN_CRON_56", "Архивация базы данных завершена");

define("LAN_CRON_60", "Перейти на cPanel");
define("LAN_CRON_61", "Новый пароль cron");
define("LAN_CRON_62", "Выполнение функции настроек [b][x][/b]");
define("LAN_CRON_63", "Функция настроек [b][x][/b] НЕ найдена");
define("LAN_CRON_64", "Администратор может автоматизировать действия с помощью планировщика задач.[br]
Вкладка «Управление» позволяет редактировать, удалять и запускать задачи.[br]
Когда редактируете задание, то можете установить минуты, часы, дни, месяц или день недели, на которые вы планируете выполнение. Используйте * для запуска в течение каждого периода. Используйте свойство «Активен» для включения задачи. [br]
Примечание. Рекомендуется не удалять задачи установленные по-умолчанию.[br]
");

define("LAN_CRON_BACKUP", "Резервное копирование");
define("LAN_CRON_LOGGING", "Запись в Журнал логов");
define("LAN_CRON_RUNNING", "Исполняется");

