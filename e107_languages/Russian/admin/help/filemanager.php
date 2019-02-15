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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/filemanager.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Отсюда можно управлять файлами в каталоге /files. Если при загрузке файлов вы получаете сообщение об ошибках, пожалуйста, измените права доступа к каталогу, в который вы пытаетесь загрузить, на CHMOD 777.";
$ns -> tablerender("Менеджер файлов", $text);
