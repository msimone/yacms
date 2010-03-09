<?php

class Page extends AppModel
{
    var $name = 'Page';
    var $actsAs = array('Tree', 'Translate' => array('title' => 'titleTranslation', 'content' => 'contentTranslation'));
    
    function afterSave()
    {
        if (empty($this->data[$this->name]['slug']))
        {
            $this->data[$this->name]['slug'] = $this->data[$this->name]['title'] . '-' . $this->id;
        }
        
        $this->data[$this->name]['slug'] = Inflector::slug($this->data[$this->name]['slug']);
        $this->saveField('slug', $this->data[$this->name]['slug'], array('callbacks' => false));
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
    
    function find($type = null, $options = array())
    {
        switch ($type)
        {
            case "translate":
                
                $self = parent::find(null, $options);
                
                $self[$this->name]['title'] = array();
                $self[$this->name]['content'] = array();
                
                foreach ($self['titleTranslation'] as $value)
                {
                    $self[$this->name]['title'][$value['locale']] = $value['content'];
                }
                
                foreach ($self['contentTranslation'] as $value)
                {
                    $self[$this->name]['content'][$value['locale']] = $value['content'];
                }
            break;
                
	    default:
                $self = parent::find($type, $options);
            break;
	}
        
        return $self;
    }
}

?>
