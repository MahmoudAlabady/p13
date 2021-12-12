<?php 

class mobile {
    public function test()
    {
        echo "test from mobile <br>";
    }
}

class samsung extends mobile {
    // public function test()
    // {
    //     echo "test from samsung <br>";
    // }
}

class apple extends samsung {

    public function test()
    {
        echo "test from apple <br>";
    }

    public function test2()
    {
        parent::test();
    }
}

$iphone = new apple;
$iphone->test2();