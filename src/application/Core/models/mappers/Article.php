<?php 

class Core_Model_Mapper_Article
{
    public function fetchLast($count)
    {
        $dbTable = new Core_Model_DbTable_Article();
        $rowSet = $dbTable->fetchAll(null,array('article_id DESC'),$count);
        
        if (0 === $rowSet->count()) {
            return false;
        }
        
        $articles = array();
        foreach($rowSet as $row) {
            $article = new Core_Model_Article();
            $article->setArticleId($row->article_id)
                    ->setArticleTitle($row->article_title)
                    ->setArticleContent($row->article_content);
            
            $authorRow = $row->findParentRow('Core_Model_DbTable_Author');
            $author = new Core_Model_Author();
            $author->setAuthorId($authorRow->author_id)
                   ->setAuthorName($authorRow->author_name);
            
            $article->setAuthor($author);
            $articles[] = $article;
        }
        
        return $articles;
    }
}