<?php

use Pokemon\Pokemon;
use PHPUnit\Framework\TestCase;

class PokemonRepositoryTest extends TestCase
{
  public function testGetCards(): void
  {
    $cards = Pokemon::Card()->all();

    $this->assertTrue(!empty($cards));
    $this->assertEquals('dp3-1', $cards[0]->getId());
    $this->assertEquals(250, count($cards));
  }

  public function testGetCardDetail(): void
  {
    $card = Pokemon::Card()->find('dp3-1');

    $this->assertEquals('dp3-1', $card->getId());
    $this->assertEquals('Ampharos', $card->getName());
    $this->assertEquals(['Lightning'], $card->getTypes());
    $this->assertEquals('Metal', $card->getResistances()[0]->getType());
    $this->assertEquals('-20', $card->getResistances()[0]->getValue());
    $this->assertEquals('130', $card->getHp());
    $this->assertEquals('The tip of its tail shines brightly. In the olden days, people sent signals using the tail\'s light.', $card->getFlavorText());
  }
}