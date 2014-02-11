<?php 

class Core_Model_User implements Zend_Acl_Role_Interface{
	
	const GUEST = 0;
	const ROOT = 1;
	const ADMIN = 2;
	const AUTHOR = 3;
	const MODERATOR = 4;
    
    private $roleId;
    private $userId;
    private $userLogin;
    
	/**
     * @return the $userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @see Zend_Acl_Role_Interface::getRoleId()
     */
    public function getRoleId(){
        return $this->roleId;
    }

	/**
     * @param field_type $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

	/**
     * @return the $userLogin
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

	/**
     * @param field_type $userLogin
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
        return $this;
    }

    /**
     * @param unknown $roleId
     * @return Core_Model_User
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
        return $this;
    }
}