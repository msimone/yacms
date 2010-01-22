<div id='column_left'>
</div>

<div id='column_right'>
    <?php
        echo $form->create('User',            array('id' => 'users-edit-form', 'url' => $html->url(array('controller' => 'users', 'action' => 'edit', $this->data['User']['id']))));
        echo $form->input('username',         array('label' => __('Usermame:', 1)));
        echo $form->input('password',         array('label' => __('Password:', 1)));
        echo $form->input('password_confirm', array('type' => 'password', 'label' => __('Confirm password:', 1)));
        echo $form->input('active',           array('label' => __('Active:', 1)));
        echo $form->input('first_name',       array('label' => __('First name:', 1)));
        echo $form->input('last_name',        array('label' => __('Last name:', 1)));
        echo $form->input('telephone_home',   array('label' => __('Telephone (home):', 1)));
        echo $form->input('telephone_work',   array('label' => __('Telephone (work):', 1)));
        echo $form->end();
    ?>
</div>
