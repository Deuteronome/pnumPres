<?php

namespace App\Controller;

use App\Repository\NavItemsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    #[Route('/competences', name: 'app_skills')]
    public function index(NavItemsRepository $navItemsRepository): Response
    {
        $navItems = $navItemsRepository->findAll();

        return $this->render('skills/index.html.twig', [
            'navItems' => $navItems
        ]);
    }
}
