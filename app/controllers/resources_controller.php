<?php

class ResourcesController extends AppController
{
    var $name = 'Resources';
    var $uses = array('Resource');
    
    function backend_index()
    {
        $this->paginate = array('limit' => 8);
        $this->set('resources', $this->paginate($this->modelClass));
    }
    
    function backend_add()
    {
	if (!empty($this->data))
	{
            if ($this->Resource->save($this->data))
            {
                $this->Session->setFlash(__('Resource saved successfully.', 1), 'flash_success');
	    }
            else
            {
                $this->Session->setFlash(__('Unable to save resource.', 1), 'flash_failed');
            }
	}
        
        $this->redirect(array('action' => 'index'));
    }
    
    function backend_remove($id = null)
    {
	if ($id)
	{
            $this->data = $this->Resource->read('path', $id);
            
	    if ($this->Resource->remove($id))
	    {
                $this->Session->setFlash(__('Resource removed successfully.', 1), 'flash_success');
	    }
            else
            {
                $this->Session->setFlash(__('Unable to remove resource.', 1), 'flash_failed');
            }
	}
        
        $this->redirect(array('action' => 'index'));
    }    
}

?>
