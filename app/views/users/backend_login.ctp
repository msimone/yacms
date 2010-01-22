<?php
    echo $form->create('User', array('action' => 'login'));
    
    echo $form->input('username', array('label' => __('Username:', 1)));
    echo $form->input('password', array('label' => __('Password:', 1)));
    echo $form->end('Login');
    
    $session->flash();
    $session->flash('auth');
?>

