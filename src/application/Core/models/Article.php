<?php 

class Core_Model_Article
{
    private $articleId;
    private $articleTitle;
    private $articleContent;
    private $author;
    
	/**
     * @return the $articleId
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

	/**
     * @param field_type $articleId
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
        return $this;
    }

	/**
     * @return the $articleTitle
     */
    public function getArticleTitle()
    {
        return $this->articleTitle;
    }

	/**
     * @param field_type $articleTitle
     */
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = $articleTitle;
        return $this;
    }

	/**
     * @return the $articleContent
     */
    public function getArticleContent()
    {
        return $this->articleContent;
    }

	/**
     * @param field_type $articleContent
     */
    public function setArticleContent($articleContent)
    {
        $this->articleContent = $articleContent;
        return $this;
    }

	/**
     * @return the $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

	/**
     * @param field_type $author
     */
    public function setAuthor(Core_Model_Author $author)
    {
        $this->author = $author;
        return $this;
    }

    
}