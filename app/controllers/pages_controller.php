<?php

class PagesController extends AppController
{
    var $name = 'Pages';
    var $uses = array('Page');
	
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
	
    function display($uri = 'index')
    {
		pr($this->params);
		exit();
    }
}

?>
