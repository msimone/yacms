<?php

class UsersController extends AppController
{
    var $name = 'Users';
    var $uses = array('User');
    
    function beforeFilter()
    {        
        if (isset($this->params['backend']))
        {
            $this->Auth->loginAction = array('controller' => 'cms/users', 'action' => 'login');
        }
        else
        {
            
        }
    }
    
    function index()
    {
    }
    
    function add()
    {
    }
    
    function edit($id = null)
    {
    }
    
    function remove($id = null)
    {
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