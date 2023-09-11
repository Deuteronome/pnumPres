<?php

namespace App\Controller;

use App\Repository\NavItemsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(NavItemsRepository $navItemsRepository): Response
    {
        $navItems = $navItemsRepository->findAll();

        return $this->render('main/index.html.twig', [
           'navItems' => $navItems
        ]);
    }
}
