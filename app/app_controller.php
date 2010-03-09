<?php

class AppController extends Controller
{
    var $components = array('Auth');
    
    function beforeFilter()
    {        
        $this->Auth->allow('display');
        
        if (!isset($this->params[Configure::read('Routing.admin')]))
        {
            $this->layout = 'frontend';
        }
        else
        {
            $this->layout = 'backend';
        }
        
        if (isset($this->params['named']['lang']))
        {
            $this->Session->write('Config.language', $this->params['named']['lang']);
        }
        
        if ($this->Session->check('Config.language'))
        {
            Configure::write('Config.language', $this->Session->read('Config.language'));
        }
    }
}

?>
