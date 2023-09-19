<?php

namespace App\Controller;

use App\Repository\CarouselRepository;
use App\Repository\NavItemsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(NavItemsRepository $navItemsRepository, CarouselRepository $carouselRepository): Response
    {
        $homeCarouselPictures = $carouselRepository->findOneByName('home_carousel')->getPictures();        
        $navItems = $navItemsRepository->findAll();

        return $this->render('main/home.html.twig', [
           'navItems' => $navItems,
           'carouselPictures' => $homeCarouselPictures
        ]);
    }
}
