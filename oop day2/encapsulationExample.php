<?php 

// names must be lowercase only

class user {
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = strtolower($name);
    }
}

$user = new user;
$user->setName("Galal");
echo $user->getname();