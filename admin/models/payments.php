<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modellist');
 
class PaymentModelPayments extends JModelList{
    protected function getListQuery(){
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
 
        $query->select('id,payer,sum,fund,date');
 
        $query->from('#__payment');
 
        return $query;
    }
}