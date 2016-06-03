<?php
defined('_JEXEC') or die;
 
jimport('joomla.application.component.view');

class PaymentViewPayment extends JViewLegacy{
    protected $item;
    protected $form;

    public function display($tpl = null){
        try{
           
            $this->form = $this->get('Form');
            $this->item = $this->get('Item');
            parent::display($tpl);
        }
        catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }
}