<?php

class PagesController extends AppController
{
    var $name = 'Pages';
    var $helpers = array('Tree');
    var $uses = array('Page', 'News');
    
    function beforeFilter()
    {
	parent::beforeFilter();
	$this->Auth->allow('display');
    }
    
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
		$this->redirect(array('action' => 'index'));
	    }
	    else
            {
		$this->Session->setFlash(__('Unable to save page.', 1), 'flash_failed');
            }
	}
    }
    
    function backend_edit($id = null)
    {
	$this->Page->id = $id;
	
	if (!empty($this->data))
	{
	    if ($this->Page->save($this->data))
	    {
		$this->Session->setFlash(__('Page saved successfully.', 1), 'flash_success');
		$this->redirect(array('action' => 'index'));
	    }
	    else
            {
		$this->Session->setFlash(__('Unable to save page.', 1), 'flash_failed');
            }
	}
	else if ($id)
	{
	    $this->data = $this->Page->find('translate');
	}
	
	$this->render('backend_add');
    }
    
    function backend_remove($id = null)
    {
	$this->Page->id = $id;
	
	if ($this->Page->remove())
	{
	    $this->Session->setFlash(__('Page removed successfully.', 1), 'flash_success');
	}
	else
	{
	    $this->Session->setFlash(__('Unable to remove page.', 1), 'flash_failed');
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
	$menu_top_pages = $this->Page->find('threaded', array('conditions' => array('show_menu_top' => '1')));
	$this->set('menu_top_pages', $menu_top_pages);
	
	$menu_bottom_pages = $this->Page->find('threaded', array('conditions' => array('show_menu_bottom' => '1')));
	$this->set('menu_bottom_pages', $menu_bottom_pages);
	
	$news = $this->News->find('all', array('conditions' => array(), 'limit' => '3'));
	$this->set('news', $news);
	
	$self = $this->Page->find('first', array('conditions' => array('slug' => $slug)));
	$this->set('self', $self);
	
	if (empty($self))
	{
	    //error 404
	}
	
	switch ($self[$this->modelClass]['template'])
	{
	    case 0:
		$this->render('templates/home');
		break;
	    
	    case 1:
		$this->render('templates/page');
		break;
	    
	    case 2:
		$this->render('templates/gallery');
		break;
	}
    }
}

?>
