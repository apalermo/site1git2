<?php 

class Core_Model_DbTable_Article extends Zend_Db_Table_Abstract
{
    protected $_name = 'article';
    protected $_primary = 'article_id';
    protected $_referenceMap = array(
        'FK_author' => array(
            'columns' => array('author_id'),
            'refTableClass' => 'Core_Model_DbTable_Author',
            'refColumns' => array('author_id'),
            'onDelete' => self::RESTRICT,
            'onUpdate' => self::CASCADE
        )
    );
    
    public function __call($function, $args)
    {
        // Expects findBy to be the first part of the function
        $criteria = substr($function, 6);
        $criteria = strtolower($criteria);
    
        $select = $this->select()
        ->from($this->_name)
        ->where($criteria . ' = ?', $args);
        
        
    }
    
}