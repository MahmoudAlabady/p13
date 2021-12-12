<?php

class user {
    public $email;
    public $password;
    public static $status = 'active';
    public const bonus = 50;

    public static function login()
    {
        echo "login <br>";
    }
    public function logout()
    {
        // echo "logout <br>";
        user::$status;
        user::login();
        user::bonus;
        // self
        self::$status;
        self::login();
        self::bonus;
    }
}

$galal = new user;
// print_r($galal);
// $galal->email = 'galal.husseny@gmail.com';
$galal->logout();
$galal->password = 21245;
// $ahmed = new user;

// $ahmed->email = 'ahmed@gmail.com';
user::$status = 'not active';
echo user::$status; // :: => double colon , scope resolution operator
user::login();
user::bonus;