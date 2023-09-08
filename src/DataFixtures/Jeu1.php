<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Plat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
    
        $categorie1 = new Categorie();
        $categorie1->setLibelle("Sandwich");
        $categorie1->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/category/sandwich_cat.jpg');
        $categorie1->setActive(1);
        
        $categorie2 = new Categorie();
        $categorie2->setLibelle("Burger");
        $categorie2->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/category/burger_cat.jpg');
        $categorie2->setActive(1);
        
        $categorie3 = new Categorie();
        $categorie3->setLibelle("Pizza");
        $categorie3->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/category/pizza_cat.jpg');
        $categorie3->setActive(1);

        $categorie4 = new Categorie();
        $categorie4->setLibelle("Asian_food");
        $categorie4->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/category/asian_food_cat.jpg');
        $categorie4->setActive(1);

        $categorie5 = new Categorie();
        $categorie5->setLibelle("Pasta");
        $categorie5->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/category/pasta_cat.jpg');
        $categorie5->setActive(1);

        $categorie6 = new Categorie();
        $categorie6->setLibelle("Salade");
        
        $categorie7 = new Categorie();
        $categorie7->setLibelle("Veggie");

        $categorie8 = new Categorie();
        $categorie8->setLibelle("Wrap");

        $plat1 = new Plat();
        $plat1->setLibelle("Wrap");
        $plat1->setDescription("Wrap au poulet");
        $plat1->setPrix("15.10");







        
        $manager->persist($categorie1);
        $manager->persist($categorie2);
        $manager->persist($categorie3);
        $manager->persist($categorie4);
        $manager->persist($categorie5);
        $manager->persist($categorie6);
        $manager->persist($categorie7);
        $manager->persist($categorie8);



        $manager->flush();
    }
}
