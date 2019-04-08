<?php

class Unit 
{
    protected $pv;
    protected $position = [0,0];
    protected $speed = 1;

    public function walk(string $direction)
    {
        if ($direction === 'right'){
            $this->position[0] += $this->speed;
        }
        if ($direction === 'left'){
            $this->position[0] -= $this->speed;
        }
        if ($direction === 'top'){
            $this->position[1] += $this->speed;
        }
        if ($direction === 'bottom'){
            $this->position[1] -= $this->speed;
        }
    }
    public function __toString(){
        return 'position x : '.$this->position[0].' et position y : '.$this->position[1];
    }
    public function attack()
    {
        return "à l'attaque !!";
    }
}
