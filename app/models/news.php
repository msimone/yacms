<?php

class News extends AppModel
{
    var $name = 'News';
    
    function afterSave()
    {
        $this->saveField('slug', Inflector::slug($this->data[$this->name]['title'], '-') . '-' . $this->id, array('callbacks' => false));
    }
}

?>
