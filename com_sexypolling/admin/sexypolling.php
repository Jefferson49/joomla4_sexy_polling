<?php
/**
 * Joomla! component sexypolling
 *
 * @version $Id: sexypolling.php 2012-04-05 14:30:25 svn $
 * @author 2GLux.com
 * @package Sexy Polling
 * @subpackage com_sexypolling
 * @license GNU/GPL
 *
 * Extended by:
 * @version v3.0.0
 * @author Jefferson49
 * @link https://github.com/Jefferson49/Joomla_plugin_sexypolling_reloaded
 * @copyright Copyright (c) 2022 - 2025 Jefferson49
 * @license GNU/GPL v3.0
 * 
 * @todo Function 'getInstance' has been deprecated. will be removed in 6.0. Get the controller through the MVCFactory instead
 */
use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Uri\Uri;

// no direct access
defined('_JEXEC') or die('Restircted access');

/*
 * Define constants for all pages
 */
define('JV', (version_compare(JVERSION, '3', '<')) ? 'j2' : 'j3');
define( 'COM_SEXY_POLLING_DIR', 'images'.DIRECTORY_SEPARATOR.'sexy_polling'.DIRECTORY_SEPARATOR );
define( 'COM_SEXY_POLLING_BASE', JPATH_ROOT.DIRECTORY_SEPARATOR.COM_SEXY_POLLING_DIR );
define( 'COM_SEXY_POLLING_BASEURL', Uri::root().str_replace( DIRECTORY_SEPARATOR, '/', COM_SEXY_POLLING_DIR ));

// Require the base controller
require_once JPATH_COMPONENT.DIRECTORY_SEPARATOR.'helpers'.DIRECTORY_SEPARATOR.'helper.php';

// Initialize the controller
$controller	= BaseController::getInstance('SexyPolling');

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = Factory::getApplication()->getDocument()->getWebAssetManager();
$uri_base = 'administrator/';
$cssFileIcons = $uri_base.'components/com_sexypolling/assets/css/icons_'.JV.'.css';
$wa->registerAndUseStyle('icons_'.JV, $cssFileIcons);

//If Joomla version is 4.0 or greater, add additional CSS for sidebar navigation
if(version_compare(JVERSION, '4', '>=')) {
    $cssFileSidebar = $uri_base.'components/com_sexypolling/assets/css/sidebar-nav.css';
    $wa->registerAndUseStyle('sidebar-nav', $cssFileSidebar);
}

// Perform the Request task

$controller->execute(Factory::getApplication()->input->getCmd('task'));
$controller->redirect();