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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/banlist.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Бан посетителей сайта";
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';		// Non-standard separator in query

switch ($action)
{
case 'transfer' :
  $text = 'На этой странице вы можете переносить данные бан-листа на сайт, а также экспортировать в виде файлов CSV.<br /><br />';
  $text .= "<b>Экспорт данных</b><br />
  Выберите форматы экспорта бан-листа. Поля будут поделены на указанный вами разделитель, а также исходя из выбора заключены в кавычки.<br /><br />";
  $text .= "<b>Импорт данных</b><br />
  Вы можете выбрать, будут ли импортированные запреты заменять существующие, или же добавляться к списку. Если импортированные данные содержат дату/время истечения срока действия бана, то можно выбрать будут ли использоваться эти данные, или установленные значения сайта
  .<br /><br />";
  $text .= "<b>Формат CSV</b><br />
  Каждая строка в файле имеет следующий вид: IP/email, дата, срок окончания, тип бана, причина, пометки.<br />
  Дата и срок действия бана записываются в формате YYYYMMDD_HHMMDD, за исключением нулевого значения, которое отображается как «неизвестный» или «неопределенный»<br />
  Наиболее важны только IP-адрес или адрес эл. почты. Другие поля также будут импортироватся, если они присутствуют.<br /><br />
  <b>Внимание:</b> Необходимо будет изменить файл filetypes.xml, чтобы администраторы могли загружать на сервер файлы CSV.";
  break;
case 'times' :
  $text = 'Эта страница устанавливает режим действия по умолчанию для различных типов бана.<br />
  Если настроено сообщение, то оно будет показано пользователю (в случае необходимости). Если URL-адрес сообщения начинается с http: // \ или https: // \
  то данный параметр передается на указанный URL. В противном случае, пользователь скорее всего увидит пустой экран.<br />
  Запрет будет действовать в течение указанного времени; после чего он будет удален при следующем доступе к сайту.';
  break;
case 'options' :
  $text = '<b>Обратный DNS</b><br />
  Если включено, IP-адрес пользователя проверяется, чтобы получить связанное с ним имя домена. Запросы отправляются на внешний сервер, поэтому
  возможна задержка, прежде чем информация будет доступна. Если сервер не отвечает, то возможна продолжительная задержка.<br /><br />
	Вы можете выбрать поиск имен серверов при всех обращениях к сайту, или только при добавлении нового бана.<br /><br />
	<b>Maximum Access Rate</b><br />
	This sets the maximum number of site accesses permitted from a single user or IP address in any five-minute period, and is intended
	to detect denial of service attacks. At 90% of the selected limit, the user receives a warning; on reaching the limit they are banned.
	Different thresholds may be set for guests and logged-in users.<br /><br />
	<b>Retrigger Ban Period</b><br />
	This option is only relevant if the option to ban users for a specified time, rather than indefinitely, has been used. If enabled, and
	the user attempts to access the site, the ban period is extended (as if the ban had just started).
	';
  break;
case 'edit' :
case 'add' :
$text = "You can ban users from your site at this screen.<br />
Either enter their full IP address or use a wildcard to ban a range of IP addresses. You can also enter an email address to stop a user registering as a member on your site.<br /><br />
<b>Banning by IP address:</b><br />
Entering the IP address 123.123.123.123 will stop the user with that address visiting your site.<br />
Entering an IP address with one or more wildcards in the end blocks, such as 123.123.123.* or 214.098.*.*, will stop anyone in that IP range from visiting your 
site. (Note that there must be exactly four groups of digits or asterisks)<br /><br />
IPV6 format addresses are also supported, including '::' to represent a block of zero values. Each pair of digits in the end fields may be a separate wildcard<br /><br />
<b>Banning by email address</b><br />
Entering the email address foo@bar.com will stop anyone using that email address from registering as a member on your site.<br />
Entering the email address *@bar.com will stop anyone using that email domain from registering as a member on your site.<br /><br />
<b>Banning by user name</b><br />
This is done from the user administration page.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
  $text = "You can specify IP addresses which you know to be 'friendly' here - generally those for the main site admins, to guarantee that they can
  always gain access to the site.<br />
  You are advised to keep the number of addresses in this list to an absolute minimum; both for security, and to minimise the impact on site performance.";
  break;
case 'banlog' :
  $text = 'This shows a list of all site accesses involving an address which is in the ban list or the white list. The \'reason\' column shows the outcome.';
  break;
case 'white' :
  $text = "This page shows a list of all IP addresses and email addresses which are explicitly permitted.<br />
  This list takes priority over the ban list - it should not be possible for an address from this list to be banned.<br />
	All addresses must be manually entered.";
  break;
case 'list' :
default :
$text = 'На этой странице отображается список всех IP-адресов, имен хостов и адресов эл. почты, которые забанены. 
(Бан пользователей отображается на странице администрирования пользователя)<br /><br />
<b>Автоматический Бан</b><br />
e107 автоматически запрещает IP-адреса, если от них исходят попытки флуда, а также адреса с множественными неудачными попытками авторизации.<br />
Такие запреты отображаются в этом списке. Вы можете выбрать (на странице причин бана), какие действия предпринимать для каждого типа запрета.<br /><br />
<b>Удалить бан</b><br />
Можно установить продолжительность бана для каждого типа запрета. После чего запись будет удалена из бан-листа по истечению срока действия. В противном случае, десйтвие бана будет продолжаться до тех пор, пока вы его не удалите.<br />
Вы можете изменить период бана. Отсчет времени определяется от текущего.';
}
$ns -> tablerender($caption, $text);