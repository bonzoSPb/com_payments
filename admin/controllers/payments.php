<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class PaymentControllerPayments extends JControllerAdmin{
    public function getModel($name = 'Payment', $prefix = 'PaymentModel'){
        return parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}