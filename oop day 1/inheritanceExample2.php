<?php 

class person {
    public $name;
    public const status = 'active';

    public function login()
    {
        echo 'login from person <br>';
    }
    public function test()
    {
        echo "test <br>";
    }
    public static function delete() {
        echo 'delete from person <br>';
    }
}

class user extends person {
    public const status = 'not active';

    public function test()
    {
       echo "test from user <br>";
    }
    public static function delete() {
        // echo 'delete from person <br>';
        // parent::test();
        // $this->test();
    }

}
// $user = new user;
// $user->test();
// echo user::status .'<br>';
// echo person::status .'<br>';
// user::delete();
// person::delete();

// class admin extends person {

// }