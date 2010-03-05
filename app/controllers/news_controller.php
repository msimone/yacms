<?php

class NewsController extends AppController
{
    var $name = 'News';
    var $uses = array('News');
    
    function backend_index()
    {
	$this->paginate = array('limit' => 15);
        $this->set('news', $this->paginate($this->modelClass));
    }
    
    function backend_add($id = null)
    {
	$this->News->id = $id;
	
        if (empty($this->data))
	{
	    $this->data = $this->News->read();
	}
	else
	{
	    if ($this->News->save($this->data))
	    {
                $this->Session->setFlash(__('News saved successfully.', 1), 'flash_success');
		$this->redirect(array('action' => 'index'));
	    }
            else
            {
		$this->Session->setFlash(__('Unable to save news.', 1), 'flash_failed');
            }
	    
	}
    }
    function backend_edit($id = null)
    {
	$this->backend_add($id);
	$this->render('backend_add');
    }
    
    function backend_remove($id = null)
    {
	if ($id)
	{
	    if ($this->News->remove($id))
            {
                $this->Session->setFlash(__('News removed successfully.', 1), 'flash_success');
            }
            else
            {
                $this->Session->setFlash(__('Unable to remove news.', 1), 'flash_failed');
            }
        }
	
	$this->redirect(array('action' => 'index'));
    }
    
    function display($slug = null)
    {
	if (!$slug)
	{
	    $this->render('templates/index');
	}
	else
	{
	    $this->render('templates/news');
	}
    }
}

?>