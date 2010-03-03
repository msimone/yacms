<?php

class GalleriesController extends AppController
{
    var $name = 'Galleries';
    var $uses = array('Gallery', 'Resource');
    
    function backend_index()
    {
	$this->paginate = array('limit' => 15);
	$this->set('galleries', $this->paginate($this->modelClass));
    }
    
    function backend_add()
    {
        if (!empty($this->data))
	{
	    if ($this->Gallery->save($this->data))
	    {
		$this->Session->setFlash(__('Gallery saved successfully.', 1), 'flash_success');
	    }
            else
            {
                $this->Session->setFlash(__('Unable to save gallery.', 1), 'flash_failed');
            }
            
            $this->redirect(array('action' => 'index'));
	}
	
	$this->paginate = array('limit' => 15);
	$this->set('resources', $this->paginate('Resource'));
    }
    
    function backend_edit($id = null)
    {
	if ($id)
        {
            if (!empty($this->data))
            {
		pr($this->data);
		exit();
	    
		$this->Gallery->id = $id;
		
		if ($this->Gallery->save($this->data))
                {
		    $this->Session->setFlash(__('Gallery saved successfully.', 1), 'flash_success');
		}
		else
		{
		    $this->Session->setFlash(__('Unable to save gallery.', 1), 'flash_failed');
		}
		
		$this->redirect(array('action' => 'index'));
	    }
	    
	    $this->data = $this->Gallery->findById($id);
	}
	
	$this->paginate = array('limit' => 15);
	$this->set('resources', $this->paginate('Resource'));
	
	$this->render('backend_add');
    }
	
    function backend_remove($id = null)
    {
	if ($id)
	{
	    if ($this->Gallery->remove($id))
            {
                $this->Session->setFlash(__('Gallery removed successfully.', 1), 'flash_success');
            }
	    else
            {
		$this->Session->setFlash(__('Unable to remove gallery.', 1), 'flash_failed');
            }
        }
	
	$this->redirect(array('action' => 'index'));
    }
}

?>