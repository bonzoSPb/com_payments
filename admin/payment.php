<?php
defined('_JEXEC') or die;
 
JError::$legacy = false;
$document = JFactory::getDocument();


jimport('joomla.application.component.controller');

$controller = JControllerLegacy::getInstance('Payment');
 
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task', 'display'));

$controller->redirect();