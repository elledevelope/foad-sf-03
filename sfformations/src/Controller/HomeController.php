<?php

namespace App\Controller;

use App\Repository\FormationsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(FormationsRepository $formationRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $formations = $paginator->paginate(
            $formationRepository->findBy([], ['id' => 'DESC']),
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );

        return $this->render('home/index.html.twig', [
            'formations' => $formations,
        ]);

        // $formations = $formationRepository->findBy([], ['duree' => 'ASC']);
        // return $this->render('home/index.html.twig', [
        //     'formations' => $formations,
        // ]);

    }
}
