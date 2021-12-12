<?php 

class order {
    public $date;
    public $status;

    public function makeOrder()
    {
        $this->status = 'successfully';
        echo "order had been made $this->status <br>";
    }

    public function cancelOrder()
    {
        $this->status = 'cancelled';
        echo "order had been $this->status<br>";
        $this->deleteOrder();
    }

    public function deleteOrder()
    {
        $this->status = 'deleted';
        echo "order had been $this->status<br>";
    }
}


$firstOrder = new order;
$firstOrder->date = '12-12-2021';
$firstOrder->makeOrder(); 
// $firstOrder->deleteOrder();
$firstOrder->cancelOrder();


//$this-> refer object
// methods , properties =>  refer to object

