<?php

class animal {
    public $run = true;

    public final function drink()
    {
        echo "drink water <br>";
    }
}

class cat extends animal {
    public function eat()
    {
        echo "eat cheese <br>";
    }
    // public function drink()
    // {
    //     echo "drink milk <br>";
    // }
}

$sheraz = new cat;
$sheraz->drink();


$animal = new animal;
$animal->drink();

