<?php

namespace App;

class Character {
private int $health;
private int $level;
private bool $alive;


public function __construct()
{
    $this->health = 1000;
    $this->level = 1;
    $this->alive = true;
   
   
}
public function getHealth()
{
    return $this->health;
}
public function setHealth($health)
{
    $this->health = $health;
    return $this;
}
public function getLevel()
{
    return $this->level;
}
public function Alive()
{
    if($this->health >= 1){
    $this->alive=true;
    return $this->alive;
    }
    return  $this->alive=false;
}
public function attack($enemy, $damage)
{
    $enemy->health=$enemy->health - $damage;
}

public function attackdamage($enemy,$damage ){
    if ($enemy->health < $damage  ) {
        $damage->health = 0;
        return "Dead";
        return $this->alive;
}}

public function heal($character, $healPoints){
    $character->health = $character->health + $healPoints;
}

public function health($character,$healthto){
if ($character->health == 0) return;
if ($character->health + $healthto > 1000) {
  $newlive = $character->health += $healthto;
    return $newlive ;
}  
}
}
?>