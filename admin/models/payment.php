<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');

class PaymentModelPayment extends JModelAdmin{

    public function getTable($type = 'Payment', $prefix = 'PaymentTable', $config = array()){
        return JTable::getInstance($type, $prefix, $config);
    }
 
    public function getForm($data = array(), $loadData = true){
        $form = $this->loadForm(
            $this->option . '.payment', 'payment', array('control' => 'jform', 'load_data' => $loadData)
        );
 
        if (empty($form)){
            return false;
        }
 
        return $form;
    }

    protected function loadFormData(){
        $data = JFactory::getApplication()->getUserState($this->option . '.edit.payment.data', array());
 
        if (empty($data)){
            $data = $this->getItem();
        }
 
        return $data;
    }
}