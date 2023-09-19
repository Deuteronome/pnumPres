<?php

namespace App\Controller;

use App\Repository\CarouselRepository;
use App\Repository\NavItemsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SessionsController extends AbstractController
{
    #[Route('/ateliers', name: 'app_sessions')]
    public function index(NavItemsRepository $navItemsRepository, CarouselRepository $carouselRepository): Response
    {
        $sessionCarouselPictures = $carouselRepository->findOneByName('session_carousel')->getPictures();
        
        $navItems = $navItemsRepository->findAll();

        return $this->render('sessions/session.html.twig', [
            'navItems' => $navItems,
            'carouselPictures' => $sessionCarouselPictures
        ]);
    }
}
