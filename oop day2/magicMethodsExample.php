<?php

class animal {
    private $food;
    private $drink;

    public function __construct($food,$drink) {
        $this->food = $food;
        $this->drink = $drink;
    }


    /**
     * Get the value of drink
     */ 
    public function getDrink()
    {
        return $this->drink;
    }

    /**
     * Get the value of food
     */ 
    public function getFood()
    {
        return $this->food;
    }
}

class animalV2 {
    private $food;
    private $drink;
    /**
     * Get the value of drink
     */ 
    public function getDrink()
    {
        return $this->drink;
    }

    /**
     * Get the value of food
     */ 
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Set the value of food
     *
     * @return  self
     */ 
    public function setFood($food)
    {
        $this->food = $food;

        return $this;
    }

    /**
     * Set the value of drink
     *
     * @return  self
     */ 
    public function setDrink($drink)
    {
        $this->drink = $drink;

        return $this;
    }
}

$cat = new animal('cheese',"milk");
echo $cat->getFood();


$dog = new animalV2;
