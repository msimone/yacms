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
	    if (!empty($this->data['file']['name']))
	    {
		$file = $this->data['Resource']['file'];
		$path_info = pathinfo($file['name']);
		
		$file['name'] = Inflector::slug($path_info['filename']) . '.' . $path_info['extension'];
		$file['path'] = Configure::read('Backend.resource_dir') . '/' . $file['name'];
		
		@copy($file['tmp_name'], WWW_ROOT . $file['path']);
		
		$this->data['Resource']['name']      = $file['name'];
		$this->data['Resource']['size']      = $file['size'];
		$this->data['Resource']['path']      = $file['path'];
		$this->data['Resource']['mime_type'] = $file['type'];
		
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
