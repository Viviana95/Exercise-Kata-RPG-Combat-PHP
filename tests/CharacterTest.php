<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;


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
		$yoshiLive = $yoshi ->getAlive();
		$this->assertEquals("Alive", $yoshiLive);
	}
	
	

}


