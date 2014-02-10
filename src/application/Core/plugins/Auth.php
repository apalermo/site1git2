<?php 

class Core_Plugin_Auth extends Zend_Controller_Plugin_Abstract
{
    public function dispatchLoopStartup(Zend_Controller_Request_Abstract $request)
    {
        // Si l'utilisateur n'est pas connecté
        if (!Zend_Auth::getInstance()->hasIdentity()) {
            $request->setControllerName('auth')
                    ->setActionName('login')
                    ->setDispatched(true);
        } else {
            return true;
        }
    }
}