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
        $categorie6->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/category/salade_cat.jpg');
        $categorie6->setActive(1);

        
        $categorie7 = new Categorie();
        $categorie7->setLibelle("Veggie");
        $categorie7->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/category/veggie_cat.jpg');
        $categorie7->setActive(1);



        $categorie8 = new Categorie();
        $categorie8->setLibelle("Wrap");
        $categorie8->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/category/wrap_cat.jpg');
        $categorie8->setActive(1);

        $plat1 = new Plat();
        $plat1->setLibelle("Wrap");
        $plat1->setDescription("Wrap au poulet");
        $plat1->setPrix("15.10");
        $plat1->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/buffalo-chicken.webp');
        $plat1->setActive(1);
        $plat1->setCategorie($categorie8);
       

        $plat2 = new Plat();
        $plat2->setLibelle("Salade");
        $plat2->setDescription("Salade au poulet accompagné de délicieux crouton intermarché");
        $plat2->setPrix("23.10");
        $plat2->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/cesar_salad.jpg');
        $plat2->setActive(1);
        $plat2->setCategorie($categorie6);



        $plat3 = new Plat();
        $plat3->setLibelle("Hamburger");
        $plat3->setDescription("Hamburger au bacon Halal ");
        $plat3->setPrix("35.99");
        $plat3->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/cheesburger.jpg');
        $plat3->setActive(1);
        $plat3->setCategorie($categorie2);


        $plat4 = new Plat();
        $plat4->setLibelle("Veggie");
        $plat4->setDescription("Courgettes farcies");
        $plat4->setPrix("20.99");
        $plat4->setImage('assets/images/images_the_district/food/courgettes_farcies.jpg');
        $plat4->setActive(1);
        $plat4->setCategorie($categorie7);



        $plat5 = new Plat();
        $plat5->setLibelle("Hamburger");
        $plat5->setDescription("Classik Burger");
        $plat5->setPrix("15.00");
        $plat5->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/Food-Name-433.jpeg');
        $plat5->setActive(1);
        $plat5->setCategorie($categorie2);


        $plat6 = new Plat();
        $plat6->setLibelle("Wrap");
        $plat6->setDescription("Classik Wrap");
        $plat6->setPrix("15.00");
        $plat6->setImage('assets/images/images_the_district/food/Food-Name-3461.jpg');
        $plat6->setActive(1);
        $plat6->setCategorie($categorie8);


        $plat7 = new Plat();
        $plat7->setLibelle("Hamburger");
        $plat7->setDescription("Burger des champs");
        $plat7->setPrix("20.00");
        $plat7->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/Food-Name-6340.jpg');
        $plat7->setActive(1);
        $plat7->setCategorie($categorie2);

        $plat8 = new Plat();
        $plat8->setLibelle("Pizza");
        $plat8->setDescription("Healty Pizza");
        $plat8->setPrix("25.00");
        $plat8->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/Food-Name-8298.jpg');
        $plat8->setActive(1);
        $plat8->setCategorie($categorie3);


        $plat9 = new Plat();
        $plat9->setLibelle("Hambuger");
        $plat9->setDescription("Hamburger pas mal");
        $plat9->setPrix("25.00");
        $plat9->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/hamburger.jpg');
        $plat9->setActive(1);
        $plat9->setCategorie($categorie2);


        $plat10= new Plat();
        $plat10->setLibelle("Veggie");
        $plat10->setDescription("Veggie Lasagne");
        $plat10->setPrix("40.00");
        $plat10->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/lasagnes_viande.jpg');
        $plat10->setActive(1);
        $plat10->setCategorie($categorie7);

        $plat11= new Plat();
        $plat11->setLibelle("Veggie");
        $plat11->setDescription("Pain fromage");
        $plat11->setPrix("10.00");
        $plat11->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/Food-Name-3631.jpg');
        $plat11->setActive(1);
        $plat11->setCategorie($categorie7);

        $plat12= new Plat();
        $plat12->setLibelle("Pizza");
        $plat12->setDescription("Pizza Margherita");
        $plat12->setPrix("25.00");
        $plat12->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/pizza-margherita.jpg');
        $plat12->setActive(1);
        $plat12->setCategorie($categorie3);

        $plat13= new Plat();
        $plat13->setLibelle("Pizza");
        $plat13->setDescription("Pizza Saumon");
        $plat13->setPrix("10.00");
        $plat13->setImage('assets/images/images_the_district/food/pizza-salmon.png');
        $plat13->setActive(1);
        $plat13->setCategorie($categorie3);

        $plat14 = new Plat();
        $plat14->setLibelle("Salade");
        $plat14->setDescription("Salade discount");
        $plat14->setPrix("05.00");
        $plat14->setImage('assets/images/images_the_district/food/salad1.png');
        $plat14->setActive(1);
        $plat14->setCategorie($categorie6);

        $plat15= new Plat();
        $plat15->setLibelle("Veggie");
        $plat15->setDescription("Spaghetti Legumes");
        $plat15->setPrix("30.00");
        $plat15->setImage('/home/kaido/Bureau/TheDistrict/assets/images/images_the_district/food/spaghetti-legumes.jpg');
        $plat15->setActive(1);
        $plat15->setCategorie($categorie7);


        $plat16= new Plat();
        $plat16->setLibelle("Veggie");
        $plat16->setDescription("Tagliatelles saumon");
        $plat16->setPrix("20.00");
        $plat16->setImage('assets/images/images_the_district/food/tagliatelles-saumon.webp');
        $plat16->setActive(1);
        $plat16->setCategorie($categorie7);







        
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
