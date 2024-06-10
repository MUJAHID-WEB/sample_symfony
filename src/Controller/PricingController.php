<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PricingController extends AbstractController
{
    #[Route('/pricing', name: 'pricing')]
    public function index(): Response
    {
        return $this->render('pricing/index.html.twig', [
            'controller_name' => 'PricingController',
        ]);
    }
}
