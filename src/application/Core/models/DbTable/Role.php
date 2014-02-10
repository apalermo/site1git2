<?php 

class Core_Model_DbTable_Role extends Zend_Db_Table_Abstract
{
    protected $_name = 'role';
    protected $_primary = 'role_id';
    protected $_dependentTables = array('Core_Model_DbTable_User');
}