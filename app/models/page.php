<?php

class Page extends AppModel
{
    var $name = 'Page';
    var $actsAs = array('Tree');
    
    function afterSave()
    {
        if (empty($this->data[$this->name]['slug']))
        {
            $this->saveField('slug', Inflector::slug($this->data[$this->name]['title'], '-') . '-' . $this->id, array('callbacks' => false));
        }
    }
    
    function sort($pages, $parent = 0)
    {
        foreach ($pages as $idx => $page)
        {
            $this->id = $page['id'];
            $this->save(array('order' => $idx, 'parent_id' => $parent), array('callbacks' => false));
            
            if (isset($page['children']) && is_array($page['children']))
            {
                $this->sort($page['children'], $page['id']);
            }
        }
    }
}

?>
