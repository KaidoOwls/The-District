<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use App\Entity\Categorie;
use App\Entity\Commande;
use App\Entity\Plat;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
    
        $categorie1 = new Categorie();
        $categorie1->setLibelle("Sandwich");
        $categorie1->setImage('sandwich_cat.jpg');
        $categorie1->setActive(1);
        
        $categorie2 = new Categorie();
        $categorie2->setLibelle("Burger");
        $categorie2->setImage('burger_cat.jpg');
        $categorie2->setActive(1);
        
        $categorie3 = new Categorie();
        $categorie3->setLibelle("Pizza");
        $categorie3->setImage('pizza_cat.jpg');
        $categorie3->setActive(1);

        $categorie4 = new Categorie();
        $categorie4->setLibelle("Asian_food");
        $categorie4->setImage('asian_food_cat.jpg');
        $categorie4->setActive(1);

        $categorie5 = new Categorie();
        $categorie5->setLibelle("Pasta");
        $categorie5->setImage('pasta_cat.jpg');
        $categorie5->setActive(1);

        $categorie6 = new Categorie();
        $categorie6->setLibelle("Salade");
        $categorie6->setImage('salade_cat.jpg');
        $categorie6->setActive(1);

        
        $categorie7 = new Categorie();
        $categorie7->setLibelle("Veggie");
        $categorie7->setImage('veggie_cat.jpg');
        $categorie7->setActive(1);



        $categorie8 = new Categorie();
        $categorie8->setLibelle("Wrap");
        $categorie8->setImage('wrap_cat.jpg');
        $categorie8->setActive(1);






        $manager->persist($categorie1);
        $manager->persist($categorie2);
        $manager->persist($categorie3);
        $manager->persist($categorie4);
        $manager->persist($categorie5);
        $manager->persist($categorie6);
        $manager->persist($categorie7);
        $manager->persist($categorie8);




        $plat1 = new Plat();
        $plat1->setLibelle("Wrap");
        $plat1->setDescription("Wrap au poulet");
        $plat1->setPrix("15.10");
        $plat1->setImage('buffalo-chicken.webp');
        $plat1->setActive(1);
        $plat1->setCategorie($categorie8);
       

        $plat2 = new Plat();
        $plat2->setLibelle("Salade");
        $plat2->setDescription("Salade au poulet accompagné de délicieux crouton intermarché");
        $plat2->setPrix("23.10");
        $plat2->setImage('cesar_salad.jpg');
        $plat2->setActive(1);
        $plat2->setCategorie($categorie6);



        $plat3 = new Plat();
        $plat3->setLibelle("Hamburger");
        $plat3->setDescription("Hamburger au bacon Halal ");
        $plat3->setPrix("35.99");
        $plat3->setImage('cheesburger.jpg');
        $plat3->setActive(1);
        $plat3->setCategorie($categorie2);


        $plat4 = new Plat();
        $plat4->setLibelle("Veggie");
        $plat4->setDescription("Courgettes farcies");
        $plat4->setPrix("20.99");
        $plat4->setImage('courgettes_farcies.jpg');
        $plat4->setActive(1);
        $plat4->setCategorie($categorie7);



        $plat5 = new Plat();
        $plat5->setLibelle("Hamburger");
        $plat5->setDescription("Classik Burger");
        $plat5->setPrix("15.00");
        $plat5->setImage('Food-Name-433.jpeg');
        $plat5->setActive(1);
        $plat5->setCategorie($categorie2);


        $plat6 = new Plat();
        $plat6->setLibelle("Wrap");
        $plat6->setDescription("Classik Wrap");
        $plat6->setPrix("15.00");
        $plat6->setImage('Food-Name-3461.jpg');
        $plat6->setActive(1);
        $plat6->setCategorie($categorie8);


        $plat7 = new Plat();
        $plat7->setLibelle("Hamburger");
        $plat7->setDescription("Burger des champs");
        $plat7->setPrix("20.00");
        $plat7->setImage('Food-Name-6340.jpg');
        $plat7->setActive(1);
        $plat7->setCategorie($categorie2);

        $plat8 = new Plat();
        $plat8->setLibelle("Pizza");
        $plat8->setDescription("Healty Pizza");
        $plat8->setPrix("25.00");
        $plat8->setImage('Food-Name-8298.jpg');
        $plat8->setActive(1);
        $plat8->setCategorie($categorie3);


        $plat9 = new Plat();
        $plat9->setLibelle("Hambuger");
        $plat9->setDescription("Hamburger pas mal");
        $plat9->setPrix("25.00");
        $plat9->setImage('hamburger.jpg');
        $plat9->setActive(1);
        $plat9->setCategorie($categorie2);


        $plat10= new Plat();
        $plat10->setLibelle("Veggie");
        $plat10->setDescription("Veggie Lasagne");
        $plat10->setPrix("40.00");
        $plat10->setImage('lasagnes_viande.jpg');
        $plat10->setActive(1);
        $plat10->setCategorie($categorie7);

        $plat11= new Plat();
        $plat11->setLibelle("Veggie");
        $plat11->setDescription("Pain fromage");
        $plat11->setPrix("10.00");
        $plat11->setImage('Food-Name-3631.jpg');
        $plat11->setActive(1);
        $plat11->setCategorie($categorie7);

        $plat12= new Plat();
        $plat12->setLibelle("Pizza");
        $plat12->setDescription("Pizza Margherita");
        $plat12->setPrix("25.00");
        $plat12->setImage('pizza-margherita.jpg');
        $plat12->setActive(1);
        $plat12->setCategorie($categorie3);

        $plat13= new Plat();
        $plat13->setLibelle("Pizza");
        $plat13->setDescription("Pizza Saumon");
        $plat13->setPrix("10.00");
        $plat13->setImage('pizza-salmon.png');
        $plat13->setActive(1);
        $plat13->setCategorie($categorie3);

        $plat14 = new Plat();
        $plat14->setLibelle("Salade");
        $plat14->setDescription("Salade discount");
        $plat14->setPrix("05.00");
        $plat14->setImage('salad1.png');
        $plat14->setActive(1);
        $plat14->setCategorie($categorie6);

        $plat15= new Plat();
        $plat15->setLibelle("Veggie");
        $plat15->setDescription("Spaghetti Legumes");
        $plat15->setPrix("30.00");
        $plat15->setImage('spaghetti-legumes.jpg');
        $plat15->setActive(1);
        $plat15->setCategorie($categorie7);


        $plat16= new Plat();
        $plat16->setLibelle("Veggie");
        $plat16->setDescription("Tagliatelles saumon");
        $plat16->setPrix("20.00");
        $plat16->setImage('tagliatelles-saumon.webp');
        $plat16->setActive(1);
        $plat16->setCategorie($categorie7);





        $manager->persist($plat1);
        $manager->persist($plat2);
        $manager->persist($plat3);
        $manager->persist($plat4);
        $manager->persist($plat5);
        $manager->persist($plat6);
        $manager->persist($plat7);
        $manager->persist($plat8);
        $manager->persist($plat9);
        $manager->persist($plat10);
        $manager->persist($plat11);
        $manager->persist($plat12);
        $manager->persist($plat13);
        $manager->persist($plat14);
        $manager->persist($plat15);
        $manager->persist($plat16);




        $user1= new Utilisateur();
        $user1->setEmail("Zkr@hotmail.fr");
        $user1->setPassword("0000");
        $user1->setNom("Teurki");
        $user1->setPrenom("Zak");
        $user1->setTelephone("0752318978");
        $user1->setAdresse("9 rue de doullens");
        $user1->setCp("80000");
        $user1->setVille("Doullens");


        $user2= new Utilisateur();
        $user2->setEmail("Diouf@hotmail.fr");
        $user2->setPassword("0000");
        $user2->setNom("Diouf");
        $user2->setPrenom("Geoffrey");
        $user2->setTelephone("0752418978");
        $user2->setAdresse("9 rue de allone");
        $user2->setCp("60000");
        $user2->setVille("Beauvais");

        $user3= new Utilisateur();
        $user3->setEmail("Malek@hotmail.fr");
        $user3->setPassword("0000");
        $user3->setNom("Malek");
        $user3->setPrenom("Julien");
        $user3->setTelephone("0752318979");
        $user3->setAdresse("9 rue de clignancourt");
        $user3->setCp("80000");
        $user3->setVille("Amiens");


        $manager->persist($user1);
        $manager->persist($user2);
        $manager->persist($user3);
        

        $user4 = new Utilisateur();
        $user4->setEmail("seydina@thedistrict.com")
            ->setPassword("0000")
            ->setNom("Diallo")
            ->setPrenom("Seydina")
            ->setTelephone("0745863201")
            ->setAdresse("9 rue de dakar")
            ->setCp("80000")
            ->setVille("Amiens")
            ->setRoles(['ROLE_ADMIN']);


        $manager->persist($user4);

       





        $manager->flush();
    }
}
