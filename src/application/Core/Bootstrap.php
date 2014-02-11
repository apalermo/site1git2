<?php 

/**
 * Bootstrap du module Core
 * 
 * @category    App1
 * @package     Core
 * @desc        Bootstrap du module Core
 * @author      jb <jb@ipformation-lyon.com>
 *  
 */
class Core_Bootstrap extends Zend_Application_Module_Bootstrap
{
    
    protected function _initPlugins()
    {
//         $fc = Zend_Controller_Front::getInstance();
//         $fc->registerPlugin(new Core_Plugin_Auth());
    }
    
    protected function _initAcl(){
        $fc = Zend_Controller_Front::getInstance();
        $fc->registerPlugin(new Core_Plugin_Acl(), 90);
        
        $acl = new Zend_Acl();
        $acl->addRole(new Zend_Acl_Role(Core_Model_User::GUEST));
        
        $parentsRole = array(Core_Model_User::MODERATOR, 
                             Core_Model_User::ADMIN);
        
        $acl->addRole(new Zend_Acl_Role(Core_Model_User::ROOT));
        $acl->addRole(new Zend_Acl_Role(Core_Model_User::ADMIN));
        $acl->addRole(new Zend_Acl_Role(Core_Model_User::MODERATOR));
        $acl->addRole(new Zend_Acl_Role(Core_Model_User::AUTHOR), $parentsRole);
        
        
        $acl->addResource('Core::auth::login');
        $acl->addResource('Core::auth::logout');
        $acl->addResource('Core::index::index');
        $acl->addResource('Core::acl::index');
        
        $acl->addResource('article');
        
        $acl->allow(Core_Model_User::GUEST, 'Core::auth::login');
        $acl->deny(Core_Model_User::GUEST, 'Core::auth::logout');
        $acl->allow(Core_Model_User::ROOT, 'Core::auth::logout');
        $acl->allow(Core_Model_User::ROOT, 'Core::index::index');
        $acl->allow(Core_Model_User::ROOT, 'Core::acl::index');
        
        Zend_Registry::set('Zend_Acl', $acl);
        
    }
}