<?php
/**
 * cocoate book feed
 * 
 * @package    Joomla.cocoate
 * @subpackage Modules
 * @link https://github.com/hagengraf/mod_coco_bookfeed
 * @license        GNU/GPL, see LICENSE.php
 * mod_coco_bookfeed is free software. This version may have been modified pursuant
 */ 
// no direct access
defined('_JEXEC') or die('Restricted access');
 
// Include the class of the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

// Static call to the class
//$coco_bookfeed = modCocoBookFeedHelper::getFeed($params);
//$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$coco_bookfeed = modCocoBookFeedHelper::getFeed($params);

// Static call to the framework module processor which will
// Include the layout file (procedural, not a class) which is 
// passed the $coco_bookfeed
require(JModuleHelper::getLayoutPath('mod_coco_bookfeed'));


