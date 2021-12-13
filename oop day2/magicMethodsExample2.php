<?php 

class admin {
    public function __construct() {
        echo "hello from admin <br>";
    }
}

class employee extends admin {
    public function __construct() {
        echo "hello from employee <br>";
    }

    public function welcome()
    {
        parent::__construct();
    }
}

$empolyee = new employee;
$empolyee->welcome();