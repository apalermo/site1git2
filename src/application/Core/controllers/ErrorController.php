<?php 

/**
 * 
 * Controller d'erreur de l'application
 * 
 * @category    App1
 * @package     Core
 */

class ErrorController extends Zend_Controller_Action
{
    
    public function init()
    {
        $this->_helper->layout()->setLayout('error');
    }
    
    public function errorAction()
    {
        $errorHandler = $this->_getParam('error_handler');
        $this->view->exception = $errorHandler->exception;
        
        $fc = Zend_Controller_Front::getInstance();
        $log = $fc->getParam('bootstrap')->getResource('log');
        $log->crit($errorHandler->exception->getMessage());
       
    }
}