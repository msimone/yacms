<?php

class PagesController extends AppController
{
    var $name = 'Pages';
    var $uses = array('Page', 'User');
	
	function beforeFilter()
	{
		$this->Auth->allow('display');
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
    
    function display($uri = 'index')
    {
        echo "Pages/display ($uri)";
        exit();
    }
}

?>