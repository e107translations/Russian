<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/cache.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Кеширование";
$text = "Включение Кеша позволит увеличить скорость отдачи страниц и уменьшит количество запросов к Базе Данных. <br /><br /><b>Внимание! При установке или тестировании новой Темы отключите, либо очистите кеш, иначе никакие изменеия не будут отображены на сайте в режиме онлайн.
</b>";
$ns -> tablerender($caption, $text);