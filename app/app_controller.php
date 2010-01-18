<?php

class AppController extends Controller
{
    var $components = array('Auth');
    
    function beforeFilter()
    {
        $this->Auth->allow('display');
        
        $admin_routing = Configure::read('Routing.admin', 'backend');
        
        if (!isset($this->params['backend']))
        {
            $this->Auth->loginAction    = array($admin_routing => false, 'controller' => 'users', 'action' => 'login');
            $this->Auth->loginRedirect  = array($admin_routing => false, 'controller' => 'pages', 'action' => 'display');
            $this->Auth->logoutRedirect = array($admin_routing => false, 'controller' => 'users', 'action' => 'login');
        }
        else
        {
            $this->Auth->loginAction    = array($admin_routing => true, 'controller' => 'users', 'action' => 'login');
            $this->Auth->loginRedirect  = array($admin_routing => true, 'controller' => 'cms',   'action' => 'index');
            $this->Auth->logoutRedirect = array($admin_routing => true, 'controller' => 'users', 'action' => 'login');
        }
    }
}

?>