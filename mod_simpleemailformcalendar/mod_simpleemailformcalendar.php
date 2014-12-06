<?php
/**
        mod_simpleemailformcalendar.php
        
        Copyright 2014 Ivan Del Mastro <info@adventure2italy.com>
		Version	1.0.0

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
        Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
        MA 02110-1301, USA.

		* @package    mod_simpleemailformcalendar
		* @subpackage Modules
		* @link 	  http://joomla.????.com/
		* @license    GNU/GPL - MIT, see above
		
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// 2010-04-28 added DB
jimport( 'joomla.filesystem.file' );

// current directory constant
defined('MOD_SIMPLEEMAILFORMCALENDAR_DIR')
    || define('MOD_SIMPLEEMAILFORMCALENDAR_DIR', dirname(__FILE__));

// Include the syndicate functions only once
require_once( MOD_SIMPLEEMAILFORMCALENDAR_DIR . DIRECTORY_SEPARATOR . 'helper.php' );
 
$form = new modSimpleEmailFormCalendar($params);
$view = $form->main();
require( JModuleHelper::getLayoutPath( 'mod_simpleemailformcalendar' ) );
