<?php

class NewsController extends AppController
{
    var $name = 'News';
    var $uses = array('News');
    
    function backend_index()
    {
        $this->paginate = array('limit' => 15);
        $this->set('news', $this->paginate('News'));
    }
    
    function backend_add()
    {
        if (!empty($this->data))
	{
	    if ($this->News->save($this->data))
	    {
		$this->Session->setFlash(__('News saved successfully.', 1), 'flash_success');
		$this->redirect(array('action' => 'index'));
	    }
	}
    }
    
    function backend_edit($id = null)
    {
	if ($id)
        {
            if (!empty($this->data))
            {
		$this->News->id = $id;
		
		if ($this->News->save($this->data))
                {
                    $this->Session->setFlash(__('News saved successfully.', 1), 'flash_success');
		    $this->redirect(array('action' => 'index'));
                }
	    }
	    
	    $this->data = $this->News->findById($id);
	}	
    }
    
    function backend_remove($id = null)
    {
	if ($id)
	{
	    if ($this->News->remove($id))
            {
                $this->Session->setFlash(__('News removed successfully.', 1), 'flash_success');
            }
        }
	
	$this->redirect(array('action' => 'index'));
    }
    
    function backend_toggle($id = null)
    {
        $this->autoRender = 0;
        Configure::write('debug', 0);
        
        if ($id)
        {
            $this->data = $this->News->read('active', $id);
            
            if (!empty($this->data))
            {
                $this->data[$this->modelClass]['active'] = !$this->data[$this->modelClass]['active'];
                $this->News->save($this->data);
            }
        }
    }
}

?>