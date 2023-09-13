<?php

namespace App\Controller;

use App\Repository\NavItemsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkshopController extends AbstractController
{
    #[Route('/workshop', name: 'app_workshop')]
    public function index(NavItemsRepository $navItemsRepository): Response
    {
        $navItems = $navItemsRepository->findAll();

        return $this->render('workshop/index.html.twig', [
            'navItems' => $navItems
        ]);
    }
}
