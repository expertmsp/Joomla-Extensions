<?php
/**
 * @copyright	@copyright	Copyright (c) 2015 CIS. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$title = $module->title;
$facebook = $params->get('facebook');
$twitter = $params->get('twitter');
$youtube = $params->get('youtube');
$gplus = $params->get('gplus');
$instagram = $params->get('instagram');
$param_1 = $params->get('param_1');

require(JModuleHelper::getLayoutPath('mod_ms_social_links', $params->get('layout', 'default')));