<?php

// mercides => 2021 , mercides , black
// bmw => 2021 , bmw , blue
// verna => 2021 , hyndai , gray

class car {
    public $model = 2021;
    public $brand;
    public $color;

    public function start()
    {
        echo "start engine <br>";
    }

    public function drive()
    {
        echo "move forward <br>";
    }

    public function reverse()
    {
        echo "move backward <br>";
    }

    public function stop()
    {
        echo "stop engine <br>";
    }

}

$mercides = new car;
$mercides->brand = "mercides";
$mercides->color = 'black';
print_r($mercides);

$bmw = new car;
$bmw->brand = 'bmw';
$bmw->color = 'blue';
print_r($bmw);

$verna = new car;
$verna->brand = 'hyndai';
$verna->color = 'gray';
print_r($verna);