<?php

namespace App\Controller;

use App\Repository\CarouselRepository;
use App\Repository\NavItemsRepository;
use Container5IF4aR6\getCarouselRepositoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfessionalController extends AbstractController
{
    #[Route('/projetpro', name: 'app_professional')]
    public function index(NavItemsRepository $navItemsRepository, CarouselRepository $carouselRepository): Response
    {
        $proCarouselPictures = $carouselRepository->findOneByName('pro_carousel')->getPictures();
        $navItems = $navItemsRepository->findAll();

        return $this->render('professional/pro.html.twig', [
            'navItems' => $navItems,
            'carouselPictures' => $proCarouselPictures
        ]);
    }
}
