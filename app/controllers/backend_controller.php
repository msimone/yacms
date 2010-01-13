<?php

class CmsController extends AppController
{
    var $name = 'Cms';
    var $uses = array();
    
    function cms_index()
    {
        $this->layout = 'backend';
    }
}

?>