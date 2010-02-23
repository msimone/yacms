<?php

class ResourcesController extends AppController
{
    var $name = 'Resources';
    var $uses = array('Resource');
            
    function backend_index()
    {
	$this->paginate = array('limit' => 8);
        $this->set('resources', $this->paginate('Resource'));
    }
    
    function backend_add()
    {
	if (!empty($this->data))
	{
	    if (!empty($this->data['Resource']['file']['name']))
	    {
		$this->data['Resource'] = $this->data['Resource']['file'];
		
		$path_info = pathinfo($this->data['Resource']['name']);
		$this->data['Resource']['name'] = Inflector::slug($path_info['filename']) . '.' . $path_info['extension'];
		$this->data['Resource']['path'] = Configure::read('Backend.resource_dir') . '/' . $this->data['Resource']['name'];
		
		@copy($this->data['Resource']['tmp_name'], WWW_ROOT . $this->data['Resource']['path']);
		
		if ($this->Resource->save($this->data))
		{
		    $this->Session->setFlash(__('Resource saved successfully.', 1), 'flash_success');
		}
	    }
	}
	
	$this->redirect(array('action' => 'index'));
    }
    
    function backend_remove($id = null)
    {
	if ($id)
	{
	    $path = $this->Resource->read('path', $id);
	    
	    if ($this->Resource->remove($id))
	    {
		@unlink(WWW_ROOT . $path['Resource']['path']);
		$this->Session->setFlash(__('Resource removed successfully.', 1), 'flash_success');
	    }
	}
	
	$this->redirect(array('action' => 'index'));
    }    
}

?>
