<?php 

class Core_Model_DbTable_User extends Zend_Db_Table_Abstract
{
    protected $_name = 'user';
    protected $_primary = 'user_id';
    protected $_referenceMap = array(
        'FK_role' => array(
            'columns' => array('role_id'),
            'refTableClass' => 'Core_Model_DbTable_Role',
            'refColumns' => array('role_id'),
            'onDelete' => self::RESTRICT,
            'onUpdate' => self::CASCADE
        )
    );
}