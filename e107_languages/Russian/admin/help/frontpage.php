<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Frontpage Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Настройки главной";
/* FIXME - English native speakers: what should stay and what should go? 
	<p>
		The list of rules are scanned in turn, until the class of the current user matches. 
		This then determines the user's front (home) page, and also the page he sees immediately after login.
	</p>
 */
$text = "
<p>
Вы можете выбрать, что показывать посетителям в качестве Главной. По умолчанию это Новости.
Также определить на какую страницу перенаправить зарегистрированных пользователей <strong><u>после авторизации</u></strong>.
</p>
<p>
	Доступ предоставляется в порядке приоритета прав. В начале определяется класс, к которому принадлежит посетитель сайта.
	Исходя из установленного класса определяется страница, на которую вы назначили перенаправлять данный класс пользователей. 
	Если никакое правило не находит соответствия, то news.php (Новости) устанавливается как главная страница.
</p>
<p>
Зарегистрированный пользователь будет перенаправлен на указанную вами страницу сразу же после авторизации.
</p>
";
$ns->tablerender($caption, $text, 'admin_help');
?>