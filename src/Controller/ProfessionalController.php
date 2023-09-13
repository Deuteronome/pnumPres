<?php

namespace App\Controller;

use App\Repository\NavItemsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfessionalController extends AbstractController
{
    #[Route('/projetpro', name: 'app_professional')]
    public function index(NavItemsRepository $navItemsRepository): Response
    {
        $navItems = $navItemsRepository->findAll();

        return $this->render('professional/index.html.twig', [
            'navItems' => $navItems
        ]);
    }
}
