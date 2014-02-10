<?php 

class Core_Model_Mapper_Content
{
    
    public function find($id)
    {
        $dbTable = new Core_Model_DbTable_Content();
        $rowset = $dbTable->find($id);
        $row = $rowset->current();

        $content = new Core_Model_Content();
        $content->setId($row->content_id);
        $content->setValue($row->content_value);
        
        return $content;
        
    }
}