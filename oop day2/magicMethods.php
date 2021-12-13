<?php

class mobile {

    function __construct()
    {
        echo "Welcome mobile<br>";
    }

    public function trunON()
    {
        echo "your device is turned on <br>";
    }

    public function trunOFF()
    {
        echo "your device is turned OFF <br>";
    }

    public function __destruct()
    {
        echo "Bye mobile <br>";
    }
}

class tv {

    function __construct()
    {
        echo "Welcome TV <br>";
    }

    public function trunON()
    {
        echo "your device is turned on <br>";
    }

    public function trunOFF()
    {
        echo "your device is turned OFF <br>";
    }

    public function __destruct()
    {
        echo "Bye tv <br>";
    }
}

$mobile = new mobile;
$mobile->trunON();
echo "hello world <br>";

$tv = new tv;
$tv->trunOFF();
echo "hello world <br>";