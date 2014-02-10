<?php 

class Core_Model_DbTable_Author extends Zend_Db_Table_Abstract
{
    protected $_name = 'author';
    protected $_primary = 'author_id';
    protected $_dependentTables = array('Core_Model_DbTable_Article');
}