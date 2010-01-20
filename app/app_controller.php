<?php

class AppController extends Controller
{
    var $uses       = array('Module');
    var $components = array('Auth');

    function beforeFilter()
    {
        $this->Auth->allow('display');
        
        $prefix = Configure::read('Routing.admin');
        
        if (!isset($this->params[$prefix]))
        {
            $this->layout = 'frontend';
            
            $this->Auth->loginAction    = array($prefix => false, 'controller' => 'users', 'action' => 'login');
            $this->Auth->loginRedirect  = array($prefix => false, 'controller' => 'pages', 'action' => 'display');
            $this->Auth->logoutRedirect = array($prefix => false, 'controller' => 'users', 'action' => 'login');
        }
        else
        {
            $this->layout = 'backend';
            
            $this->set('modules', $this->Module->find('all', array('conditions' => array('Module.active' => 1))));
            
            $this->Auth->loginAction    = array($prefix => true, 'controller' => 'users', 'action' => 'login');
            $this->Auth->loginRedirect  = array($prefix => true, 'controller' => 'home',  'action' => 'index');
            $this->Auth->logoutRedirect = array($prefix => true, 'controller' => 'users', 'action' => 'login');
        }
    }
}

?>