<?php

class User extends AppModel
{
    var $name = 'User';
    
    var $validate = array
    (
        'active' => array
        (
            '1' => array
            (
                'rule' => array('boolean'),
                'message' => 'Incorrect value for checkbox'
            )
        ),
        'username' => array
        (
            '1' => array
            (
                'rule' => array('minLength', 5),  
                'message' => 'Minimum length of 5 characters'
            ),
            '2' => array
            (
                'rule' => 'alphaNumeric',
                'message' => 'Only alphabets and numbers allowed'
            ),
            '3' => array
            (
                'rule' => 'isUnique',
                'message' => 'This username has already been taken'
            ),
            '4' => array
            (
                'rule' => 'isUnique',
                'message' => 'This username has already been taken'
            )
        ),
        'passwd' => array
        (
            '1' => array
            (
                'on' => 'create',
                'rule' => array('minLength', 5),
                'message' => 'Minimum length of 5 characters'
            ),  
        ),
        'passwd_confirm' => array
        (
            '1' => array
            (
                'rule' => 'validateConfirmPasswd',
                'message' => 'Confirm password doesnt match'
            ),
            '2' => array
            (
                'on' => 'create',
                'rule' => array('minLength', 5),  
                'message' => 'Minimum length of 5 characters'
            ),
        ),
        'email' => array
        (
            '1' => array
            (
                'rule' => array('email', 1),
                'message' => 'Please supply a valid email address'
            ),
            '2' => array
            (
                'rule' => 'isUnique',
                'message' => 'This E-mail has already been used'
            )
        ),
        'first_name' => array
        (
            '1' => array
            (
                'rule' => 'notEmpty',
                'message' => 'This field cannot be left blank'
            )
        ),
        'last_name' => array
        (
            '1' => array
            (
                'rule' => 'notEmpty',
                'message' => 'This field cannot be left blank'
            )
        )
    );
    
    function beforeSave()
    {
        if (!empty($this->data[$this->name]['passwd']))
        {
            $this->data[$this->name]['password'] = Security::hash($this->data[$this->name]['passwd'], 'sha1', 1);
        }
        
        return true;
    }
    
    function validateConfirmPasswd()
    {
        return $this->data['User']['passwd'] == $this->data['User']['passwd_confirm'];
    }
}

?>
