<?php

class Page extends AppModel
{
    var $name = 'Page';
    
    var $hasMany = array('Children' => array('className' => 'Page',
                                             'order' => 'Children.order'));
}

?>
