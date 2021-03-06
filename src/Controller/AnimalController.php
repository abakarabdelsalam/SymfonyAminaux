<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     */
    public function index(AnimalRepository $repository): Response
    {
        //$repository = $this->getDoctrine()->getRepository(Animal::class);
        $animaux = $repository->findAll();
        return $this->render('animal/index.html.twig', [
            "listAnimaux" => $animaux
        ]);
    }


    /**
     * @Route("/animal/{id} ", name="aficherAnimal")
     */
    //public function Aficher(AnimalRepository $repository, $id): Response

    public function Aficher(Animal $RecAnimal): Response

    {
        // $RecAnimal = $repository->find($id);

        return $this->render('animal/AficherAnimal.html.twig', [
            'listAnimaux' => $RecAnimal
        ]);
    }
}