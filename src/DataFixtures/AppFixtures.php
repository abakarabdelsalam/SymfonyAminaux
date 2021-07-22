<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Continent;
use App\Entity\Famille;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $continent1 = new Continent();
        $continent1->setLibelle("Europe");
        $manager->persist($continent1);
        $continent2 = new Continent();
        $continent2->setLibelle("Asie");
        $manager->persist($continent2);
        $continent3 = new Continent();
        $continent3->setLibelle("Afrique");
        $manager->persist($continent3);
        $continent4 = new Continent();
        $continent4->setLibelle("Océanie");
        $manager->persist($continent4);
        $continent5 = new Continent();
        $continent5->setLibelle("Amerique");
        $manager->persist($continent5);
        $c1 = new Famille();
        $c1->setLibelle("mammifères")
            ->setDescription("Animaux vertébrés nourrissant leurs petits avec du lait");
        $manager->persist($c1);
        $c2 = new Famille();
        $c2->setLibelle("reptiles")
            ->setDescription("Animaux vertébrés qui rampent");
        $manager->persist($c2);
        $c3 = new Famille();
        $c3->setLibelle("mammifères")
            ->setDescription("Animaux invertébrésdu monde aquatique");
        $manager->persist($c3);

        $a1 = new Animal();
        $a1->setNom('Chien')
            ->setDescription('Anmale deomestique')
            ->setImage('chien.png')
            ->setPoids(30)
            ->setDengereux(false)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4)
            ->addContinent($continent5);

        $manager->persist($a1);


        $a2 = new Animal();
        $a2->setNom('Crocodil')
            ->setDescription('Anmale sauvage')
            ->setImage('croco.png')
            ->setPoids(90)
            ->setDengereux(true)
            ->setFamille($c2)
            ->addContinent($continent1)
            ->addContinent($continent2);

        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Sepent')
            ->setDescription('Anmale dangere')
            ->setImage('serpent.png')
            ->setPoids(4)
            ->setDengereux(true)
            ->setFamille($c2)
            ->addContinent($continent3)
            ->addContinent($continent4)
            ->addContinent($continent5);

        $manager->persist($a3);


        $a4 = new Animal();
        $a4->setNom('Cochon')
            ->setDescription('Anmale deomestique')
            ->setImage('cochon.png')
            ->setPoids(100)
            ->setDengereux(false)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4);

        $manager->persist($a4);


        $a5 = new Animal();
        $a5->setNom('Requin')
            ->setDescription('Anmale de la mere')
            ->setImage('requin.png')
            ->setPoids(1000)
            ->setDengereux(true)
            ->setFamille($c3)
            ->addContinent($continent1)
            ->addContinent($continent2);

        $manager->persist($a5);



        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}