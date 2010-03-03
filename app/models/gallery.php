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
    
    function beforeSave()
    {
        $this->data[$this->name]['slug'] = Inflector::slug($this->data[$this->name]['title'], '-');
        
        return true;
    }
}

?>
