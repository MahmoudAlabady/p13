<?php


abstract class animal {
    public $name = 'x';
    public abstract function eat();
    public abstract function drink();
    public function run()
    {
        echo "run <br>";
    }
}

class cat extends animal {
    public function eat(){
        echo "cheese <br>";
    }

    public function drink(){
        echo "milk <br>";
    }
}


class dog extends animal {
    public function eat(){
        echo "meat <br>";
    }

    public function drink(){
        echo "milk <br>";
    }
}