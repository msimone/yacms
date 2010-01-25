<?php

class User extends AppModel
{
    var $name = 'User';
    
    var $validate = array('username' => array('loginRule-1' => array('rule' => 'alphaNumeric',
                                                                     'message' => 'Only alphabets and numbers allowed',
                                                                     'last' => true),
                                              
                                              'loginRule-2' => array('rule' => array('minLength', 8),
                                                                     'message' => 'Minimum length of 8 characters')
                                             )
                         );
}

?>
