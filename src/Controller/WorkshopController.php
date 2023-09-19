<?php

namespace App\Controller;

use App\Repository\CarouselRepository;
use App\Repository\NavItemsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkshopController extends AbstractController
{
    #[Route('/workshop', name: 'app_workshop')]
    public function index(NavItemsRepository $navItemsRepository, CarouselRepository $carouselRepository): Response
    {
        $workshopCarouselPictures = $carouselRepository->findOneByName('workshop_carousel')->getPictures();
        $navItems = $navItemsRepository->findAll();

        return $this->render('workshop/workshop.html.twig', [
            'navItems' => $navItems,
            'carouselPictures' => $workshopCarouselPictures
        ]);
    }
}
