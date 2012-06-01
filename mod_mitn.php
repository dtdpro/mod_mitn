<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$list = modMitNHelper::getList($params);
$arshow = $params->get('showarchivelink',0);
$arurl = $params->get('archivelinkid','');
$artit = $params->get('archivelinktit','');
require(JModuleHelper::getLayoutPath('mod_mitn'));
