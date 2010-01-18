<?php

class PagesController extends AppController
{
    var $name = 'Pages';
    var $uses = array('Pages');
	
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
        echo "Pages/display ($uri)";
        exit();
    }
}

?>