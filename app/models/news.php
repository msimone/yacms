<?php

class News extends AppModel
{
    var $name = 'News';
    
    function beforeSave()
    {
        $this->data[$this->name]['slug'] =
        Inflector::slug($this->data[$this->name]['title'], '-');
        
        return true;
    }
}

?>
