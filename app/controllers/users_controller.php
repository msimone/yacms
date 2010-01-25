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
            if ($this->User->save($this->data))
            {
                $this->Session->setFlash(__('User added successfully.', 1));
                $this->redirect(array('controller' => 'users', 'action' => 'index'));
            }
        }
    }
    
    function backend_edit($id = null)
    {
        if (!empty($this->data))
        {
            if ($id)
            {
                $this->User->id = $id;
            
                if ($this->User->save($this->data))
                {
                    $this->Session->setFlash(__('User edited successfully.', 1));
                    $this->redirect(array('controller' => 'users', 'action' => 'index'));
                }
            }
        }
        
        $this->data = $this->User->findById($id);
    }
    
    function backend_remove($id = null)
    {
        if ($id)
        {
            if ($this->User->remove($id))
            {
                $this->Session->setFlash(__('User removed successfully.', 1));
            }
            else
            {
                $this->Session->setFlash(__('Unable to remove user..', 1));
            }
        }
        
        $this->redirect(array('controller' => 'users', 'action' => 'index'));
    }
    
    function backend_toggle($id = null)
    {
        $this->autoRender = 0;
        
        if ($id)
        {
            $this->data = $this->User->findById($id);
            
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