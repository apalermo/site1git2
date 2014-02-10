<?php 

/**
 * 
 * Controller par défaur de l'application
 * 
 * @category    App1
 * @package     Core
 */

class IndexController extends Zend_Controller_Action
{
    
    public function indexAction()
    {
        $articleMapper = new Core_Model_Mapper_Article();
        $this->view->articles = $articleMapper->fetchLast(5);
        
    }
    
    public function testAction()
    {
        
    }
}