<?php

class user {
    public $email;
    private $password;
    protected $status;
}


class admin extends user {
    public function FunctionName()
    {
       echo $this->status;
    }
}

$admin = new user;
print_r($admin);