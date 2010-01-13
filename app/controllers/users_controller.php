<?php

class UsersController extends AppController
{
    var $name = 'Users';
    var $uses = array('User');
    
    function beforeFilter()
    {
    }
    
    function cms_index()
    {
    }
    
    function cms_add()
    {
    }
    
    function cms_edit($id = null)
    {
    }
    
    function cms_remove($id = null)
    {
    }
    
    function cms_login()
    {
    }
    
    function cms_logout()
    {
        $this->redirect($this->Auth->logout());
    }
    
    function login()
    {
    }
    
    function logout()
    {
        $this->redirect($this->Auth->logout());
    }
    
    function register()
    {
    }
}

?>