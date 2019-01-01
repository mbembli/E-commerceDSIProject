<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Produit;
use AppBundle\Entity\Categorie;
use AppBundle\Entity\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * UserProduct controller.
 *
 * @Route("/products")
 */
class UserProductController extends Controller
{
    /**
     * Lists all produit entities.
     *
     * @Route("/{categorietId}", name="user_produit_index")
     * @Method("GET")
     */
    public function indexAction(Categorie $categorietId)
    {
    
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository(Produit::class)->findByCategorie($categorietId);

        return $this->render('produit.html.twig', array(
            'produits' => $produits, 'mycat' => $categorietId));
    }

    /**
     * @Route("/details/{id_produit}", name="user_produit_details")
     * @Method("GET")
     */
    public function detailsProductAction(Produit $id_produit)
    {
    
        $em = $this->getDoctrine()->getManager();
        $produit_details = $em->getRepository(Produit::class)->find($id_produit);
        // Rate count
        $repository = $em->getRepository(Avis::class);
        // stars
        $one = $repository->countRating($id_produit,1);
        $two = $repository->countRating($id_produit,2);
        $three = $repository->countRating($id_produit,3);
        $fours = $repository->countRating($id_produit,4);
        $five = $repository->countRating($id_produit,5);

        return $this->render('produit_details.html.twig', array(
            'produit' => $produit_details, "one" => $one[1], "two" => $two[1], "three" => $three[1], "fours" => $fours[1], "five" => $five[1]));
    }
}
