<?php

class AppController extends Controller
{
    var $components = array('Auth');
    
    function beforeFilter()
    {        
        $this->Auth->allow('display');
        
        if ($this->Session->check('Config.language'))
        {
            Configure::write('Config.language', $this->Session->read('Config.language'));
        }
        
        if (!isset($this->params[Configure::read('Routing.admin')]))
        {
            $this->layout = 'frontend';
        }
        else
        {
            $this->layout = 'backend';
        }
    }
}

?>
