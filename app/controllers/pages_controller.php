<?php

class PagesController extends AppController
{
    var $name = 'Pages';
    var $uses = array();
	
	function beforeFilter()
	{
		//$this->Auth->allow('display');
	}
	
    function index()
    {
    }
    
    function add()
    {
    }
    
    function edit($id = null)
    {
    }
    
    function remove($id = null)
    {
    }
	
    function display($uri = 'index')
    {
        echo "Pages/display ($uri)";
        exit();
    }
}

?>