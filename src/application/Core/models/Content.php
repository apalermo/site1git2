<?php 


class Core_Model_Content
{
    private $id;
    
    private $value;
	/**
     * @return the $value
     */
    public function getValue()
    {
        return $this->value;
    }

	/**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

	/**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

	/**
     * @param field_type $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    
}