<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="familles")
     */
    public function index(FamilleRepository $repository): Response
    {
        $familles = $repository->findAll();
        return $this->render('famille/familles.html.twig', [
            "familles" => $familles
        ]);
    }
    /**
     * @Route("/famille/{id}", name="aficher_familles")
     */
    public function aficherFamille(Famille $RecFamille): Response
    {

        return $this->render('famille/aficheFamille.html.twig', [
            "famille" => $RecFamille
        ]);
    }
}