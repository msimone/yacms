<?php

class UsersController extends AppController
{
    var $name = 'Users';
    var $uses = array('User');
    
    function backend_index()
    {
    }
    
    function backend_add()
    {
    }
    
    function backend_edit($id = null)
    {
    }
    
    function backend_remove($id = null)
    {
    }
    
    function backend_login()
    {
    }
    
    function backend_logout()
    {
        $this->redirect($this->Auth->logout());
    }
}

?>