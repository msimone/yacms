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
    
    function backend_add($id = null)
    {
	$this->Gallery->id = $id;
	
        if (empty($this->data))
	{
	    $this->data = $this->Gallery->read();
	}
	else
	{
	    if ($this->Gallery->save($this->data))
	    {
		$this->Session->setFlash(__('Gallery saved successfully.', 1), 'flash_success');
		$this->redirect(array('action' => 'index'));
	    }
            else
            {
                $this->Session->setFlash(__('Unable to save gallery.', 1), 'flash_failed');
            }
            
	}
	
	$this->paginate = array('limit' => 15);
	$this->set('resources', $this->paginate('Resource'));
    }
    
    function backend_edit($id = null)
    {
	$this->backend_add($id);
	$this->render('add');
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