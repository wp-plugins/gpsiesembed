<?php
/*
Plugin Name: GPSies Embed
Version: 0.1
Plugin URI: http://flavio.alicubi.net/gpsiesembed/
Description: Add GPSies Maps to your posts and pages.(Only for WordPress 2.5+)
Author: flavio alberti
Author URI: http://flavio.alicubi.net/

The tag to insert the code is: <code>[gpsies url width height]</code>

License:
 Released under the GPL license
  http://www.gnu.org/copyleft/gpl.html

  Copyright 2009 - 2010 flavioalberti (email : flavio@alicubi.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



define('GPS_EMBED_API_URL',		'http://www.gpsies.com/api.do?');
define('GPS_EMBED_SHORTCODE',	'gpsies');
define('GPS_EMBED_FILEID',		'fileId');
define('GPS_EMBED_USERNAME',	'username');
define('GPS_EMBED_CITY',		'city');
define('GPS_EMBED_COUNTRY',		'country');
define('GPS_EMBED_TRACKTYPE',	'trackTypes');
define('GPS_EMBED_FILETYPE',	'filetype');
define('GPS_EMBED_ZIP',			'zip');
define('GPS_EMBED_BBOX',		'BBOX');
define('GPS_EMBED_SEARCHTEXT',	'searchText');




include (dirname (__FILE__).'/plugin.php');

class GPSiesEmbed extends GPSiesEmbed_Plugin
{
	function GPSiesEmbed ()
	{
		$this->register_plugin ('gpsiesEmbed', __FILE__);
		
		$this->add_filter ('the_content');
		$this->add_action ('wp_head');
	}
	
	function wp_head ()
	{
		
	}
	
	function replace ($matches)
	{
		$showmode = $matches[2];
		$xmlresponse = $this->enquiry($matches[1]);
		$parms =  array ('gpsies' => $xmlresponse, 'showmode'=>$showmode);
		return $this->capture ('trackInfo',$parms);
	}

	function the_content ($text)
	{
		$result = preg_replace_callback ("@(?:<p>\s*)?\[gpsies\s*(.*?)\sshow=(.*?)\](?:\s*</p>)?@", array (&$this, 'replace'), $text); 
	  return $result;
	}
	
	
	function enquiry ($parms) {
		
		$url=GPS_EMBED_API_URL;
		$url = $url.$parms;
		//$url = dirname (__FILE__)."/test.xml";
		$xmlresponse = simplexml_load_file($url)or exit(__("Unable to open URL!"));
		return $xmlresponse;
	}
	
		
}

$embediframe = new GPSiesEmbed;
?>
