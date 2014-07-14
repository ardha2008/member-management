<?php
namespace Models;
use
    Resources;

class Registration extends Resources\Validation {
    
    public function setRules()
    {
        return array(
            'username' => array(
                'rules' => array(
                    'required',
                    'min' => 3,
                    'max' => 10,
                    'regex' => '/^([-a-z0-9_-])+$/i',
                ),
                'label' => 'Username',
                'filter' => array('trim', 'strtolower')
            ),
            'email' => array(
                'rules' => array(
                    'required',
                    'min' => 3,
                    'email',
                ),
                'label' => 'Email',
                'filter' => array('trim', 'strtolower')
            ),
            'password' => array(
                'rules' => array(
                    'required',
                    'min' => 5,
                    'compare' => 'repassword'
                ),
                'label' => 'Password'
            ),
            'repassword' => array(
                'rules' => array(
                    'required'
                ),
                'label' => 'Retype Password'
            )
        );
    }
}