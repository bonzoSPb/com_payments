<?php

defined('_JEXEC') or die;

jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
 

class JFormFieldPayment extends JFormFieldList{
    protected $type = 'Payment';
    protected function getOptions(){
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);
        $query->select('id, payer, sum, fund, date')
                ->from('#__payment');
        $db->setQuery($query);
        $records = $db->loadObjectList();
        $options = array();

        if ($records){
            foreach($records as $record) {
                $options[] = JHtml::_('select.option', $record->id, $record->title);
            }
        }

        $options = array_merge(parent::getOptions(), $options);
        return $options;
    }
}