<?php

class UsersController extends AppController
{
    var $name = 'Users';
    var $uses = array('User');
    
    function backend_index()
    {
        $this->paginate = array('limit' => 8);
        $this->set('users', $this->paginate($this->modelClass));
    }
    
    function backend_add($id = null)
    {
        $this->User->id = $id;
        
        if (empty($this->data))
        {
            $this->data = $this->User->read();
        }
        else
        {
            if ($this->User->save($this->data))
            {
                $this->Session->setFlash(__('User saved successfully.', 1), 'flash_success');
                $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('Unable to save user.', 1), 'flash_failed');
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
            if ($this->User->remove($id))
            {
                $this->Session->setFlash(__('User removed successfully.', 1), 'flash_success');
            }
            else
            {
                $this->Session->setFlash(__('Unable to remove user.', 1), 'flash_failed');
            }
        }
        
        $this->redirect(array('action' => 'index'));
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