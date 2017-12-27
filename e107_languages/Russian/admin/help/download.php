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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/download.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Загрузите файлы в каталог ".e_FILE."downloads, изображения в каталог ".e_FILE."downloadimages, изображения thumbnail в каталог ".e_FILE."downloadthumbs.
<br /><br />
Чтобы разрешить скачивание, сначала создайте родителя, затем создайте категорию под этим родителем, после чего скачивание файлов станет доступным.";
$ns -> tablerender("Скачивание файлов", $text);
