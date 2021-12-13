<?php

trait media {
    public $name = 'x';
    public function uploadPhoto()
    {
        echo "upload photo from media <br>";
    }

    public function uploadPDF()
    {
        echo "upload PDF from media <br>";
    }
}

trait operations {
    public function printMessage()
    {
        echo "message <br>";
    }
}

trait general {
    use operations,media;
}

class user {
    use general;
}


class product {
    use general;
}

$product = new product;

echo $product->uploadPDF();