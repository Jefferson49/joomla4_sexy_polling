<?php
/**
 * Joomla! component sexypolling
 *
 * @version $Id: view.html.php 2012-04-05 14:30:25 svn $
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
use Joomla\CMS\MVC\View\HtmlView;
use Joomla\CMS\Toolbar\ToolbarHelper;

// no direct access
defined('_JEXEC') or die('Restircted access');

class SexypollingViewSexypoll extends HtmlView
{
	protected $form;
	protected $item;
	protected $state;

	/**
	 * Display the view
	 */
	public function display($tpl = null)
	{
		// Initialiase variables.
		$this->form		= $this->get('Form');
		$this->item		= $this->get('Item');
		$this->state	= $this->get('State');
		$max_id	= $this->get('max_id');
		
		//Patched: set max_id = 0 to allow unlimited polls
		$this->max_id = 0;
		
		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			Factory::getApplication()->enqueueMessage(implode("\n", $errors));
			return;
		}

		$this->addToolbar($max_id);
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @since	1.6
	 */
	protected function addToolbar($max_id)
	{
		Factory::getApplication()->input->set('hidemainmenu', true);

		$isNew		= ($this->item->id == 0);
		// Since we don't track these assets at the item level, use the category id.

		$text = $isNew ? Text::_( 'JTOOLBAR_NEW' ) : Text::_( 'JTOOLBAR_EDIT' );
		ToolbarHelper::title(   Text::_( 'COM_SEXYPOLLING_POLL' ).': <small><small>[ ' . $text.' ]</small></small>','manage.png' );
	
		ToolbarHelper::apply('sexypoll.apply');
		ToolbarHelper::save('sexypoll.save');
		ToolbarHelper::save2copy('sexypoll.save2copy');
		
		// Build the actions for new and existing records.
		if ($isNew)  {
			ToolbarHelper::cancel('sexypoll.cancel');
		}
		else {
			ToolbarHelper::cancel('sexypoll.cancel','JTOOLBAR_CLOSE');
		}
	}
}