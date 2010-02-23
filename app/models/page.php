<?php

class Page extends AppModel
{
    var $name = 'Page';
    var $actsAs = array('Tree');
    
    function sort($pages, $parent = 0)
    {
        foreach ($pages as $idx => $page)
        {
            $this->id = $page['id'];
            $this->save(array('order' => $idx, 'parent_id' => $parent));
            
            if (isset($page['children']) && is_array($page['children']))
                $this->sort($page['children'], $page['id']);
        }
    }
}

?>
