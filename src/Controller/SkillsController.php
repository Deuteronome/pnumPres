<?php

namespace App\Controller;

use App\Repository\CarouselRepository;
use App\Repository\NavItemsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    #[Route('/competences', name: 'app_skills')]
    public function index(NavItemsRepository $navItemsRepository, CarouselRepository $carouselRepository): Response
    {
        $skillCarouselPictures = $carouselRepository->findOneByName('skill_carousel')->getPictures();
        $navItems = $navItemsRepository->findAll();

        return $this->render('skills/skills.html.twig', [
            'navItems' => $navItems,
            'carouselPictures' => $skillCarouselPictures
        ]);
    }
}
