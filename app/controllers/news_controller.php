<?php

class NewsController extends AppController
{
    var $name = 'News';
    var $helpers = array('Tree');
    var $uses = array('News', 'Page');
    
    function beforeFilter()
    {
	parent::beforeFilter();
	$this->Auth->allow('display');
    }
    
    function backend_index()
    {
	$this->paginate = array('limit' => 15);
        $this->set('news', $this->paginate($this->modelClass));
    }
    
    function backend_add($id = null)
    {
	if (!empty($this->data))
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
	$this->News->id = $id;
	
        if (!empty($this->data))
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
	else if ($id)
	{
	    $this->data = $this->News->find('translate');
	}
	
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
	$menu_top_pages = $this->Page->find('threaded');
	$this->set('menu_top_pages', $menu_top_pages);
	
	//$menu_bottom_pages = $this->Page->find('threaded');
	//$this->set('menu_bottom_pages', $menu_bottom_pages);
	
	$self = $this->News->find('first', array('conditions' => array('slug' => $slug)));
	$this->set('self', $self);
	
	if ($slug)
	{
	    $this->render('templates/news');
	}
	else
	{
	    $this->render('templates/index');
	}
    }
}

?>