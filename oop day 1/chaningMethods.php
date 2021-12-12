<?php

class message {
    public $message;

    public function startConnection()
    {
        echo "start connection <br>";
        return $this;
    }

    public function send($message)
    {
        $this->message= $message;
        echo $this->message . '<br>';
        return $this;
    }

    public function endConnection()
    {
        echo "end connection <br>";
    }
}

$student = new message;

$student->startConnection();
$student->send("Hello<br>");
$student->send("Can i ask you question ? <br>");
$student->endConnection();


$mentor = new message;
$mentor->startConnection()->send("Hello<br>")->send("Yes Sure, <br>")->endConnection(); // chaning methods

