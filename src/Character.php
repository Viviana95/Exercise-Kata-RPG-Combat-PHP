<?php

namespace App;

class Character {
private int $health;
private int $level;



public function __construct()
{
    $this->health = 1000;
    $this->level = 1;
   
   
}
public function getHealth()
{
    return $this->health;
}
public function getLevel()
{
    return $this->level;
}
public function getAlive()
{
    if($this->health >= 1){
        return "Alive";
    }
    return  "Dead";
}

}

?>