<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $a1 = new Animal();
        $a1->setNom('Chien')
            ->setDescription('Anmale deomestique')
            ->setImage('chien.png');
        $manager->persist($a1);


        $a2 = new Animal();
        $a2->setNom('Crokodil')
            ->setDescription('Anmale sauvage')
            ->setImage('croco.png');
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Sepan')
            ->setDescription('Anmale dangere')
            ->setImage('serpan.png');
        $manager->persist($a3);


        $a4 = new Animal();
        $a4->setNom('Chien')
            ->setDescription('Anmale deomestique')
            ->setImage('chien.png');
        $manager->persist($a4);


        $a5 = new Animal();
        $a5->setNom('Requin')
            ->setDescription('Anmale de la mere')
            ->setImage('requin.png');
        $manager->persist($a5);



        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}