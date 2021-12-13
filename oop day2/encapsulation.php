<?php


class user {
    private $password; // hashing
    private $gender; // convert from f => female , m => male
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = sha1($password);
    }

    public function getGender()
    {
        if($this->gender == 'm'){
            $this->gender = 'male';
        }else{
            $this->gender = 'female';
        }
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}

$user1 = new user;
$user1->setPassword(123456);
// echo $user1->getPassword();
$user1->setGender('f');
echo $user1->getGender();

// print_r($user1);