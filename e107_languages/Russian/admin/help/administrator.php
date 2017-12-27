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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/administrator.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Справка: Администраторы";
$text = "Страница управления администраторами и модераторами. Администраторам доступны только те функции, которые отмечены галочкой.<br /><br />
Чтобы создать нового администратора, перейдите на страницу управления пользователями и обновите существующего пользователя до статуса администратора.";
$ns -> tablerender($caption, $text);