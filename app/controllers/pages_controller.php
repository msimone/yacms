<?php

class PagesController extends AppController
{
    var $name = 'Pages';
    var $uses = array();
    
    function cms_index()
    {
        echo "Pages/cms_index";
        exit();
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