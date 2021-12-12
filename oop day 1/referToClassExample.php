<?php

class userWallet {
    public $balance;
    public const bonus = 50;

    public function getBalance()
    {
        return $this->balance;
    }

    public function addBonusToBalance()
    {
        $this->balance += self::bonus;
    }

    public function deposite($depositeBalance)
    {
       $this->balance += $depositeBalance;
    }

    public function withdraw($withdrawBalance)
    {
        $this->balance -= $withdrawBalance;
    }
}

$user = new userWallet;
$user->addBonusToBalance(); 
echo $user->getBalance() . '<br>'; // 50

$user->deposite(150);
echo $user->getBalance() . '<br>'; // 200

$user->withdraw(100);
echo $user->getBalance() . '<br>'; // 100
