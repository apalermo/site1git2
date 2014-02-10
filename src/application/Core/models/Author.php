<?php 

class Core_Model_Author
{
    private $authorId;
    private $authorName;
	/**
     * @return the $authorId
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

	/**
     * @param field_type $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
        return $this;
    }

	/**
     * @return the $authorName
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

	/**
     * @param field_type $authorName
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
        return $this;
    }

}