<?php

class paint {
    public $color;

    public function increaseBlack()
    {
        $this->color .= " + Black";
        return $this;
    }

    public function increaseWhite()
    {
        $this->color .= " + White";
        return $this;
    }
}

$bmw = new paint;
$bmw->color = 'yellow';
$bmw->increaseBlack()->increaseBlack()->increaseBlack()->increaseWhite()->increaseBlack();
echo $bmw->color;


