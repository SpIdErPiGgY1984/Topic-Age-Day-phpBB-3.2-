<?php
/**
* @package Topic Age Day Extension
* @copyright (c) 2015 dmzx - http://dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'TOPICAGEDAYPOSTED' 		=> 'Deze topic werd %1$s geleden gepost',
	'TOPIC_AGE_DAYS_YEAR'		=> 'jaar',
	'TOPIC_AGE_DAYS_YEARS'		=> 'jaren',
	'TOPIC_AGE_DAYS_MONTH'		=> 'maand',
	'TOPIC_AGE_DAYS_MONTHS'		=> 'maanden',
	'TOPIC_AGE_DAYS_WEEK'		=> 'week',
	'TOPIC_AGE_DAYS_WEEKS'		=> 'weken',
	'TOPIC_AGE_DAYS_DAY'		=> 'dag',
	'TOPIC_AGE_DAYS_DAYS'		=> 'dagen',
	'TOPIC_AGE_DAYS_HOUR'		=> 'uur',
	'TOPIC_AGE_DAYS_HOURS'		=> 'uren',
	'TOPIC_AGE_DAYS_MINUTE'		=> 'minuut',
	'TOPIC_AGE_DAYS_MINUTES'	=> 'minuten',
	'TOPIC_AGE_DAYS_SECOND'		=> 'seconde',
	'TOPIC_AGE_DAYS_SECONDS'	=> 'seconden',
));
