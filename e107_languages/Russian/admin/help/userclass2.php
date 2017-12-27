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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/userclass2.php,v $
 * $Revision$ 1
 * $Translated file
 * $Date$ 2017/12/09
 * $Author$ net1313
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Классы пользователей";

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
	$text = "Установите классы, к которым назначается новый пользователь сайта, сразу после авторизации. 
	Если включена проверка регистрации (переход по ссылке для подтверждения), то присвоение прав доступа может автоматически назначаться при регистрации, либо после подтверждения пользователем своего аккаунта.<br /><br />
	Помните, что если вы используете иерархическую схему классов, то пользователь автоматически является членом всех классов «над» каждым полследующим классом в структуре.";
	break;
  case 'options' :
	$text = "Параметры настройки позволяют создавать и удалять установленную по умолчанию структуру классов. Вы можете увидеть результат, посмотрев на схему.<br />
	Это не приведет к удалению остальной информации о классе. Вы можете изменять, или удалять иерархию позже.<br /><br />
	Необходимость перезаписи структуры классов может понадобиться только в случае повреждения базы данных.";
	break;
  case 'membs' :
    $text = "Перенесено на страницу управления пользователями";
	break;
  case 'debug' :
	$text = "For advanced users only - shows the hierarchy of the classes, plus the assigned classes and the classes to which the first 20 site members have access.<br />
	The number in front of the class name is its unique ID (reference number). The 'Everyone' class has an ID of 0 (zero). e107 uses these IDs throughout to refer to classes.<br />
	After the class name is the class visibility and editability - [vis:253, edit: 27] for example. This means that the class will be visible in most selectors only if the current user is a member of class 253, 
	and the user may edit their class membership only if they are a member of class 27.<br />
	Finally, after the '=', is a list of all classes either above or below each class in the tree, plus the ID of that class. Thus a user who is a member of a particular class will
	 be a member of all the classes in this list.<br /><br />
	To help with understanding, the class membership of the first 20 members is shown. The first entry on each line shows the classes of which the user is a member. The 
	 second entry lists all the classes where the user is a member once inheritance takes effect. The third entry shows which class memberships they can edit";
	break;
  case 'test' :
  case 'special' :
    $text = "Не делайте этого!!! Только для разработчиков!!!";
	break;
  case 'edit' :
  case 'config' :
	$text = "Здесь можно создать новые или редактировать существующие классы.<br />
         Это желательно для ограничения доступа пользователям в некоторые части сайта. Например, можно создать класс под именем TEST, 
		 создать форум, доступ к которому получат пользователи класса TEST.<br /><br />
		 Имя класса отображается в выпадающем списке и т. п., а в некоторых областях сайта также отображается более подробное описание.<br /><br />
		 Если установлено, то отображается иконка класса.<br /><br />
		 Чтобы пользователи могли сами назначить себе принадлежность к классу, разрешите им доступ к настройкам своего класса. Если вы установите «Никому», то назначение пользователя в класс будет доступно только администраторам<br /><br />
		 Поле «Видимость» позволяет скрыть отображение класса от большинства пользователей. Применяется в некоторых выпадающих списках и чекбоксах.<br /><br />
		 Ярлык «Родитель» установливает иерархию классов. Если «вершина» иерархии - это классы «Все (доступно всем)» или «Пользователь», то классы расположенные ниже в иерархии обладают такими же правами как и родительский класс, под-классы родительских и т. д. Если «вершина» иерархии является классом «Никто/неактивный», тогда права суммируются в обратном направлении - класс получает все права класса, который расположен в структуре <b>ниже</b> него. Полученная иерархия отображается в нижней части страницы. Вы можете расширять и сокращать ответвления, нажимая на поля «+» и «-».";
	break;
  case 'display' :
  default :
	$text = "На этой странице вы можете выбрать классы для редактирования, а также удалить существующие.";
}
e107::getRender() -> tablerender($caption, $text);