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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/ugflag.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Если вы обновляете e107, или просто нуждаетесь в том, чтобы ваш сайт был в оф-лайне, поставьте галочку в окне обслуживания. В таком случае, посетители будут перенаправлены на страницу объясняющую, что сайт недоступен по причине технического обслуживания. Уберите отметку для того, чтобы вернуть сайт в рабочее состояние.";

$ns -> tablerender("Техобслуживание", $text);