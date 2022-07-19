<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;
use LDAP\Result;

class CharacterTest extends TestCase {

	/** @test */
	public function test_character_health()
	{
		$yoshi = new Character;
		$yoshiHealth = $yoshi ->getHealth();
		$this->assertEquals(1000, $yoshiHealth);
	}
	public function test_level()
	{
		$yoshi = new Character;
		$yoshiLevel = $yoshi ->getLevel();
		$this->assertEquals(1, $yoshiLevel);
	}
	public function test_live()
	{
		$yoshi = new Character;
		$yoshiLive = $yoshi ->Alive();
		$this->assertEquals(true, $yoshiLive);
	}
	public function test_character_damage()
	{
		$peach = new Character;
		$toad = new Character;
		
		$peach->attack($toad,200);
		$result = $toad->getHealth();
		$this->assertEquals(800, $result);
	}
	public function test_character_damage_alive()
	{
		$peach = new Character;
		$toad = new Character;
		$peach->attackdamage($toad, 1000);
		$result = $toad->getHealth();
		$this->assertEquals(true, $result);
		$this->assertEquals(false, $toad->Alive());
	}
	public function test_character__healtTo()
	{
		$mario = new Character;
		$toad = new Character;
		
		$toad->setHealth(700);
		$mario->heal($toad,300);
	
		$this->assertEquals(1000, $toad->getHealth());
		
	}

	public function test_character__cant_be_healed()
	{
		$mario = new Character;
		$toad = new Character;
		$healthTo = 100;
		$result = $mario->health($toad, $healthTo);
		$this->assertEquals(150, $result);
		
	}
}


