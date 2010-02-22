<?php

class PagesController extends AppController
{
    var $name = 'Pages';
    var $uses = array('Page');
	
    function backend_index()
    {
	$this->set('pages', $this->Page->find('all'));
    }
    
    function backend_add()
    {
	if (!empty($this->data))
	{
	    if ($this->Page->save($this->data))
	    {
		$this->Session->setFlash(__('Page saved successfully.', 1), 'flash_success');
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
		$this->Page->id = $id;
		
		if ($this->Page->save($this->data))
                {
		    $this->Session->setFlash(__('Page saved successfully.', 1), 'flash_success');
		    $this->redirect(array('action' => 'index'));
                }
	    }
	    
	    $this->data = $this->Page->findById($id);
	}
	
	$this->render('backend_add');
    }
    
    function backend_remove($id = null)
    {
	if ($id)
	{
	    if ($this->Page->remove($id))
            {
                $this->Session->setFlash(__('Page removed successfully.', 1), 'flash_success');
            }
        }
	
	$this->redirect(array('action' => 'index'));
    }
	
    function display($slug = 'index')
    {
	$this->set('_', $this->Page->find('first', array('conditions' => array('Page.active' => '1', 'Page.slug' => $slug))));
    }
}

?>
