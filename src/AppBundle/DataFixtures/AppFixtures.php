<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Avis;
use AppBundle\Entity\Produit;
use AppBundle\Entity\Categorie;
use AppBundle\Entity\Commande;
use AppBundle\Entity\ProduitCommande;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // **** les categoris ***//
        // categorie femme
       $categorie1 = new Categorie();
       $categorie1->setLibelle('Chaussures femme');
       $categorie1->setDescription('Peu importe les saisons, on reste toujours aussi mordue de chaussures ? C’est comme si nos chaussures pour femme accordaient à toutes vos tenues. Claquettes, plateformes, bottines-chaussettes, on prend tout !');
       $categorie1->setImage('https://mosaic03.ztat.net/vgs/media/articles/catalog-lg/23820c2214fb48e89a9b840bed2973d2/f858119e8015427982e9953a65901a52.jpeg');
       $manager->persist($categorie1);

       // categorie homme
       $categorie2 = new Categorie();
       $categorie2->setLibelle('Chaussures homme');
       $categorie2->setDescription('Quelles chaussures pour homme choisir ? Les baskets rétro s’associeront à merveille avec nos pantalons chinos et les chaussures montantes seront parfaites avec un jean. On privilégiera une paire de derbies au bureau.');
       $categorie2->setImage('https://mosaic03.ztat.net/vgs/media/articles/catalog-lg/0bf05b8ee34f4ba5ba8b9b22f2065202/6dfb12b5c41e496aa67d104c3f9fa7c6.jpeg');
       $manager->persist($categorie2);

       // **** les produits ***//
        for ($i = 0; $i < 20; $i++) {
            $product = new Produit();
            $product->setLibellle('Adidas');
            $product->setDescriptCourt('product '.$i);
            $product->setDescriptLong('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');
            $product->setPrix(rand(10, 100));
            $product->setImagePrin('http://placeimg.com/702/515');
            $product->setImagesSec('http://placeimg.com/705/550**http://placeimg.com/690/530');
            if ((rand(1,2) % 2) == 0)
            {
              $product->setCategorie($categorie1);
            }
            else
            {
              $product->setCategorie($categorie2);
            }
            $manager->persist($product);
            // create rating
            for ($j=0;$j<20;$j++){
                $avi = new Avis();
                $avi->setStars(rand(1,5));
                $avi->setTime(new \Datetime());
                $avi->setProduit($product);
                $manager->persist($avi);
             }
        }
        $manager->flush();
    }
}

?>