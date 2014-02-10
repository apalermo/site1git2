<?php 

class Core_Model_Mapper_Author
{
    public function find($id)
    {
        $dbTable = new Core_Model_DbTable_Author();
        $rowset = $dbTable->find($id);
        $row = $rowset->current();

        $author = new Core_Model_Author();
        $author->setAuthorId($row->author_id);
        $author->setAuthorName($row->author_name);

        return $author;
    }

}