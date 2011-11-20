<?php
/**
 * Helper class for Coco Book Feed module
 * 
 * @package    Joomla.cocoate
 * @subpackage Modules
 * @link https://github.com/hagengraf/mod_coco_bookfeed
 * @license        GNU/GPL, see LICENSE.php
 * mod_coco_bookfeed is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
// no direct access
defined('_JEXEC') or die;

class modCocoBookFeedHelper
{
    /**
     * Retrieves the hello message
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    function getFeed($params)
    {
		$url = 'http://cocoate.com/books/feed';
        //not working on some servers
        //$xmlstr = file_get_contents($url);
    
        // seems to work better but curl has to be configured
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "");
        $xmlstr = curl_exec($ch);      
        curl_close($ch);
                
        $xml = new SimpleXMLElement($xmlstr);      
        return $xml;
    }
}
