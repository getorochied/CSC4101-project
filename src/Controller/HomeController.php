<?php

namespace App\Controller;

use App\Repository\PortfolioRepository;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(PortfolioRepository $portfolioRepository, ProjectRepository $projectRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'portfolio_count' => $portfolioRepository->count([]),
            'project_count' => $projectRepository->count([]),
            'recent_projects' => $projectRepository->findBy([], ['id' => 'DESC'], 3),
        ]);
    }
}
