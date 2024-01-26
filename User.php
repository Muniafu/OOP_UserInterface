<?php

class User{
    // Properties
    public $id;
    public $username;
    public $email;
    public $password;

    // Construction
    public function __construct($id, $username, $email, $password) {
        $this ->id = $id;
        $this-> username= $username;
        $this-> email = $email;
        $this-> password=$password;
    }
}