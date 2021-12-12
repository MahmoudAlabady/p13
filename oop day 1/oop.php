<?php

// oop => object oriented programming

// class , object 

// class => group similar tasks (local scope)


// user (login , register , logout) => class user (login , logout , register)

// make order , cancel order , => class order (make , cancel)

// properties => variables , methods => functions

// access modifiers => (public , private , protected)

class user {
    public $email;
    public $password;
    public $status = 'active';


    public function login () {
        echo "login";
    }

    public function logout()
    {
        echo "logout";
    }

}

//  object
$user = new user;
// print_r($user->status);
$user->email = 'galal@gmail.com';
$user->password = '123456';
$user->status = 'not active';
$user->login();
print_r($user);

$abdo = new user;
print_r($abdo);


// more clean (organization)
// more dynamic 
// more secure
// easy to mantian

# principles
// inheritance
// polymorphism
// abstraction
// encapsulation




