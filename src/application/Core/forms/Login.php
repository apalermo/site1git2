<?php 


class Core_Form_Login extends Zend_Form
{
    public function init()
    {
        $username = new Zend_Form_Element_Text('username');
        $username->setLabel('Identifiant');
        $username->setRequired(true);
        $this->addElement($username);
        
        $password = new Zend_Form_Element_Password('pass');
        $password->setLabel('Mot de passe');
        $password->setRequired(true);
        $this->addElement($password);
        
        $submit = new Zend_Form_Element_Submit('send');
        $this->addElement($submit);
    }
}