<div id='column_left'>
</div>
<div id='column_right'>
    <?php
        $session->flash();
        echo $form->create('User',          array('id' => 'users-form', 'url' => $html->url()));
        echo $form->input('username',       array('label' => __('Usermame', 1)));
        echo $form->input('passwd',         array('label' => __('Password', 1)));
        echo $form->input('passwd_confirm', array('label' => __('Confirm password', 1), 'type'  => 'password'));
        echo $form->input('email',          array('label' => __('E-mail', 1)));
        echo $form->input('first_name',     array('label' => __('First name', 1)));
        echo $form->input('last_name',      array('label' => __('Last name', 1)));
        echo $form->input('telephone_home', array('label' => __('Telephone (home)', 1)));
        echo $form->input('telephone_work', array('label' => __('Telephone (work)', 1)));
        echo $form->end(__('Save', 1));
    ?>
</div>
