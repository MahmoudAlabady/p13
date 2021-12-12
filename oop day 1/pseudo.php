<?php

class mobile {
    public $brand;
    public $color;

    public function welcome()
    {
        // this => pseudo variable => refer to object inside current method
        // print_r($this);
        echo "welcome from $this->brand <br>";
    }
}

$apple = new mobile();
// $apple = new mobile;
$apple->brand = 'apple';
$apple->color = 'black';
$apple -> welcome ();

$samsung = new mobile;
$samsung->brand = 'samsung';
$samsung->color = 'red';
$samsung-> welcome();

$oppo = new mobile;
$oppo -> brand = 'oppo';
$oppo->welcome();