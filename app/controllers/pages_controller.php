<?php

class PagesController extends AppController
{
    var $name = 'Pages';
    var $uses = array('Page', 'News');
    var $helpers = array('Tree');
	
    function backend_index()
    {
	$pages = $this->Page->find('threaded', array('fields' => array('id', 'parent_id', 'lft', 'rght', 'title', 'slug', 'content'), 'order' => array('Page.order')));
	$this->set('pages', $pages);
    }
    
    function backend_add()
    {
	if (!empty($this->data))
	{
	    if ($this->Page->save($this->data))
	    {
		$this->Session->setFlash(__('Page saved successfully.', 1), 'flash_success');
	    }
	    else
            {
		$this->Session->setFlash(__('Unable to save page.', 1), 'flash_failed');
            }
	    
	    $this->redirect(array('action' => 'index'));
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
                }
		else
		{
		    $this->Session->setFlash(__('Unable to save user.', 1), 'flash_failed');
		}
		
		$this->redirect(array('action' => 'index'));
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
	    else
            {
                $this->Session->setFlash(__('Unable to remove page.', 1), 'flash_failed');
            }
        }
	
	$this->redirect(array('action' => 'index'));
    }
    
    function backend_sort()
    {
	$this->autoRender = 0;
	
	if (isset($this->params['url']['pages']))
	{
	    $this->Page->sort($this->params['url']['pages']);
	}
    }
    
    function display($slug = 'home')
    {
	$menu_top_pages = $this->Page->find('threaded');
	$this->set('menu_top_pages', $menu_top_pages);
	
	//$menu_bottom_pages = $this->Page->find('threaded');
	//$this->set('menu_bottom_pages', $menu_bottom_pages);
	
	$news = $this->News->find('all', array('conditions' => array(), 'limit' => '3'));
	$this->set('news', $news);
	
	$self = $this->Page->find('first', array('conditions' => array('Page.slug' => $slug)));
	$this->set('self', $self);
	
	if (empty($self))
	{
	    //error 404
	}
	
	$this->render('templates/1');
    }
}

?>
