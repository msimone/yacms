<?php

class PagesController extends AppController
{
    var $name = 'Pages';
    var $uses = array('Page');
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
	    $this->data[$this->modelClass]['slug'] =
	    Inflector::slug($this->data[$this->modelClass]['title'], '-');
		
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
		$this->data[$this->modelClass]['slug'] =
		Inflector::slug($this->data[$this->modelClass]['title'], '-');
		
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
    
    function backend_sort()
    {
	$this->autoRender = 0;
	
	if (isset($this->params['url']['pages'])
	    && !empty($this->params['url']['pages']))
	{
	    $this->Page->sort($this->params['url']['pages']);
	}
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
	echo "Page/display";
	exit();
    }
}

?>
