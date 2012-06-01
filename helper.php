<?php


// no direct access
defined('_JEXEC') or die('Restricted access');

require_once (JPATH_SITE.DS.'components'.DS.'com_content'.DS.'helpers'.DS.'route.php');

class modMitNHelper
{
	function getList(&$params)
	{
		$db			=& JFactory::getDBO();
		$count		= (int) $params->get('count', 5);


		// Content Items only
		$q  = 'SELECT * FROM #__mitn ';
		$q .= 'WHERE published = 1 && mitn_date <= DATE(NOW()) ';
		$q .= 'ORDER BY mitn_date DESC, mitn_id DESC';
		$db->setQuery($q, 0, $count);
		$rows = $db->loadObjectList();

		return $rows;
	}
}
