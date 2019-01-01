<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Produit;
use AppBundle\Entity\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * UserRatingt controller.
 *
 * @Route("/rating")
 */
class UserRatingController extends Controller
{
	/**
     * Lists all produit entities.
     *
     * @Route("/add/{id_produit}/{stars}", name="user_rating_index")
     * @Method("GET")
     */
    public function addAction($id_produit,$stars)
    {
    
    	$avi = new Avis();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->find($id_produit);
        $avi->setStars($stars);
        $avi->setTime(new \Datetime());
        $avi->setProduit($produit);
        $em->persist($avi);
        $em->flush();
        return $this->redirectToRoute('user_produit_details',array('id_produit' => $id_produit));
    }

}