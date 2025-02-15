<?php
/**
 * Joomla! component sexypolling
 *
 * @version $Id: sexyanswer.php 2012-04-05 14:30:25 svn $
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
 */

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Controller\FormController;

// no direct access
defined('_JEXEC') or die('Restircted access');

class SexyPollingControllerSexyAnswer extends FormController
{
	function __construct($default = array()) {
		parent::__construct($default);
	
		$this->registerTask('save', 'saveAnswer');
		$this->registerTask('apply', 'saveAnswer');
	}
	
	function saveAnswer() {
		$id = Factory::getApplication()->input->getInt('id',0);
		$model = $this->getModel('sexyanswer');
	
		if ($model->saveAnswer()) {
			$msg = Text::_( 'COM_SEXYPOLLING_ANSWER_SAVED' );
		} else {
			$msg = Text::_( 'COM_SEXYPOLLING_ERROR_SAVING_ANSWER' );
		}
	
		if(Factory::getApplication()->input->getCmd('task') == 'apply' && $id != 0)
			$link = 'index.php?option=com_sexypolling&view=sexyanswer&layout=edit&id='.$id;
		else
			$link = 'index.php?option=com_sexypolling&view=sexyanswers';
		$this->setRedirect($link, $msg);
	}
}
