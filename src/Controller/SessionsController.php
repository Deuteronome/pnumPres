<?php

namespace App\Controller;

use App\Repository\NavItemsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SessionsController extends AbstractController
{
    #[Route('/ateliers', name: 'app_sessions')]
    public function index(NavItemsRepository $navItemsRepository): Response
    {
        $navItems = $navItemsRepository->findAll();

        return $this->render('sessions/index.html.twig', [
            'navItems' => $navItems
        ]);
    }
}
