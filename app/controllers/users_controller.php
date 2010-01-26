<?php

class UsersController extends AppController
{
    var $name = 'Users';
    var $uses = array('User');
    
    function backend_index()
    {
        $this->paginate = array('limit' => 15);
        $this->set('users', $this->paginate('User'));
    }
    
    function backend_add()
    {
        if (!empty($this->data))
        {
            if (!empty($this->data['User']['passwd']))
            {
                $this->data['User']['password'] = $this->Auth->password($this->data['User']['passwd']);
            }
            
            if ($this->User->save($this->data))
            {
                $this->Session->setFlash(__('User saved successfully.', 1));
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
                $this->User->id = $id;
                
                if (!empty($this->data['User']['passwd']))
                {
                    $this->data['User']['password'] = $this->Auth->password($this->data['User']['passwd']);
                }
                
                if ($this->User->save($this->data))
                {
                    $this->Session->setFlash(__('User saved successfully.', 1));
                    $this->redirect(array('action' => 'index'));
                }
            }
            
            $this->data = $this->User->findById($id);
        }        
    }
    
    function backend_remove($id = null)
    {
        if ($id)
        {
            if ($this->User->remove($id))
            {
                $this->Session->setFlash(__('User removed successfully.', 1));
            }
        }
        
        $this->redirect(array('action' => 'index'));
    }
    
    function backend_toggle($id = null)
    {
        $this->autoRender = 0;
        Configure::write('debug', 0);
        
        if ($id)
        {
            $this->data = $this->User->read('active', $id);
            
            if (!empty($this->data))
            {
                $this->data['User']['active'] = !$this->data['User']['active'];
                $this->User->save($this->data);
            }
        }
    }
    
    function backend_login()
    {
    }
    
    function backend_logout()
    {
        $this->redirect($this->Auth->logout());
    }
}

?>