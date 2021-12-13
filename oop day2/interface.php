<?php

// abstract class animal {
//     public $name = 'x';
//     public abstract function eat();
//     public abstract function drink();
//     public function run()
//     {
//         echo "run <br>";
//     }
// }

interface animal {
    // const x = 5;
    function eat();
    function drink();
    function run();
}

class parentAnimal {
    public function breathe(){
        echo "nose <br>";
    }
    public function run()
    {
        echo "with hands and legs <br>";
    }
}

// echo animal::x;

class cat extends parentAnimal implements animal {
    public function eat(){
        echo "cheese <br>";
    }

    public function drink(){
        echo "milk <br>";
    }
}


class dog extends parentAnimal implements animal {
    public function eat(){
        echo "meat <br>";
    }

    public function drink(){
        echo "milk <br>";
    }
}


class snake implements animal {
    public function eat(){
        echo "meat <br>";
    }
    public function drink(){
        echo "water <br>";
    }
    public function run(){
        
    }
}