<?php

class Gallery extends AppModel
{
    var $name = 'Gallery';
    var $actsAs = array('Translate' => array('title' => 'titleTranslation'));
    
    var $hasMany = array
    (
        'Resource' => array
        (
            'className'  => 'Resource',
            'foreignKey' => 'parent_id',
        ),
    );
    
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
