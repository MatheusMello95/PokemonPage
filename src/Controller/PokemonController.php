<?php

namespace App\Controller;

use App\Repository\PokemonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PokemonController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function index(PokemonRepository $repository): Response
    {
      $cards = $repository->getCards();
      return $this->render('pokemon/index.html.twig', [
        'cards'=> $cards
      ]);
    }

    #[Route('/card/{id}', name: 'card_details')]
    public function details(PokemonRepository $repository, string $id): Response
    {
      $card = $repository->getCardDetails($id);
      return $this->render('pokemon/details.html.twig', [
        'card'=> $card,
      ]);
    }
}
