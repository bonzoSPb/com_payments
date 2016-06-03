<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');
 
class PaymentController extends JControllerLegacy{

    public function display($cachable = false, $urlparams = array()){
        $input = JFactory::getApplication()->input;
        $input->set('view', $input->getCmd('view', 'Payments'));
 		
        parent::display($cachable);
    }

}