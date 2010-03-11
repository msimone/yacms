<?php

class Resource extends AppModel
{
    var $name = 'Resource';
    
    function beforeSave()
    {
        if (!$this->data[$this->name]['error'])
        {
            $file = @pathinfo($this->data[$this->name]['name']);
            $this->data[$this->name]['name'] = Inflector::slug($file['filename'], '-') . '.' . $file['extension'];
            $this->data[$this->name]['path'] = Configure::read('Backend.resourceDirectory') . '/' . $this->data[$this->name]['name'];
	    
	    return @move_uploaded_file($this->data[$this->name]['tmp_name'], WWW_ROOT . $this->data[$this->name]['path']);
        }
	
	return false;
    }
    
    function afterDelete()
    {
	@unlink(WWW_ROOT . $this->data[$this->name]['path']);
    }
}

?>
