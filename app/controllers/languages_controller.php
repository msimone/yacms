<?php

class LanguagesController extends AppController
{
    var $name = 'Languages';
    var $uses = array();
    
    function beforeFilter()
    {
	parent::beforeFilter();
	$this->Auth->allow('change');
    }
    
    function change($language = null)
    {
	if ($language)
        {
	    $this->Session->write('Config.language', $language);
	    Configure::write('Config.language', $language);
        }
	
	$this->redirect($this->referer());
    }
}

?>
