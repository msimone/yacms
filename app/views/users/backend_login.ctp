<?php
    echo $form->create('User',    array('id' => 'users-login-form', 'action' => 'login'));
    echo $form->input('username', array('label' => __('Username:', 1)));
    echo $form->input('password', array('label' => __('Password:', 1)));
    
    $session->flash('auth');
    
    echo $form->end(__('Login', 1));
?>

