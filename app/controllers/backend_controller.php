<?php

class BackendController extends AppController
{
    var $name = 'Backend';
    var $uses = array();
    
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
}

?>