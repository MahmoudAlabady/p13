<?php


class mobile
{
    public $name;
    public $brand;
    public $price;
    public $ram;
    public $storage;
    public $battery;
    public $madeIN = 'china';
    public $charger = false;

    public function makeCalls()
    {
        echo "make calls <br>";
    }

    public function takePhotos()
    {
        echo "take Photos <br>";
    }
}


class samsung extends mobile
{
    public $fingerPrint = TRUE;   
}



class apple extends samsung
{
    public $faceID = TRUE;
    public function wirelessCharging()
    {
        echo "wireless";
    }
}


$iphone = new apple;
echo $iphone->madeIN;

