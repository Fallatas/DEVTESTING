<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

	//Einstiegspunkt
    
	// Include the syndicate functions only once
    require_once __DIR__ . '/helper.php';   // Helper

	// View
   require JModuleHelper::getLayoutPath('mod_iframemodul', $params->get('layout', 'default'));

