<?php

class Gallery extends AppModel
{
    var $name = 'Gallery';
    
    var $hasMany = array
    (
        'Resource' => array
        (
            'className'  => 'Resource',
            'foreignKey' => 'parent_id',
        ),
     );
    
    function afterSave()
    {
        $this->saveField('slug', Inflector::slug($this->data[$this->name]['title'], '-') . '-' . $this->id, array('callbacks' => false));
    }
}

?>
