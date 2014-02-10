<?php 

/**
 * 
 * Controller de contact de l'application
 * 
 * @category    App1
 * @package     Core
 */

class ContactController extends Zend_Controller_Action
{
    
    public function indexAction()
    {
        $contentMapper = new Core_Model_Mapper_Content();
        $this->view->content = $contentMapper->find(1);
    }
}