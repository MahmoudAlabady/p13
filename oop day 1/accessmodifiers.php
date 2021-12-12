<?php

// access modifiers , visibilty markers =>  (private - protected - public)
// global scope , class scope , child scope
// public =>  global scope , , class scope ,, child scope
// protected => , class scope , child scope ,
// pirvate => class scope
class user {
    private $name= 'user';

    public function printUserName()
    {
       echo $this->name;
    }
}

class admin extends user {

    public function printAdminName()
    {
        echo $this->name;
    }
}

$user = new user;
// echo $user->name;
// $user->printUserName();

$admin = new admin;
$admin->printAdminName();