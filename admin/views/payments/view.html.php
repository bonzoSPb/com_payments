<?php
 defined('_JEXEC') or die; 
 jimport('joomla.application.component.view');

 class PaymentViewPayments extends JViewLegacy{
     protected $items;
     protected $pagination;
 
     public function display($tpl = null){
         try{
             $this->items = $this->get('Items');
 
             $this->pagination = $this->get('Pagination');
 

             $this->sidebar = JHtmlSidebar::render();
             parent::display($tpl);
 
         }
         catch (Exception $e){
             throw new Exception($e->getMessage());
         }
     }

 }