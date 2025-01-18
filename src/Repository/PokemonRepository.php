<?php

namespace App\Repository;

use Pokemon\Pokemon;

class PokemonRepository
{

  public function __construct()
  {
    Pokemon::Options(['verify' => true]);
    Pokemon::ApiKey($_ENV['POKEMON_KEY']);
  }

  public function getCards(): array{
    return Pokemon::Card()->all();
  }

  public function getCardDetails(String $id): ?array{
    return Pokemon::Card()->find($id)?->toArray();
  }

}