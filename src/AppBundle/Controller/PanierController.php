<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Produit;
use AppBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

/**
 * UserProduct controller.
 *
 * @Route("/panier")
 */
class PanierController extends Controller
{
    /**
     * @Route("/ajouter/{id_produit}/{qte}", name="add_produit")
     * @Method("GET")
     */
    public function addToCart($id_produit,$qte)
    {
        $s = new Session();
        @$p = $s->get('panier');
        @$p[$id_produit]+=$qte;
        $s->set('panier',$p);
        return $this->redirectToRoute('panier_details');
        
    }

    /**
     * @Route("/modifier/{id_produit}/{qte}", name="update_produit")
     * @Method("GET")
     */
    public function updateProductPanier($id_produit,$qte)
    {
        $s = new Session();
        @$p = $s->get('panier');
        @$p[$id_produit] = $qte;
        $s->set('panier',$p);
        return $this->redirectToRoute('panier_details');
        
    }

    /**
     * @Route("/details", name="panier_details")
     * @Method("GET")
     */
    public function panierDetails()
    {
        $em = $this->getDoctrine()->getManager();
           
        $s = new Session();
        @$p = $s->get('panier');
        if ($p == null)
        {
            return $this->redirectToRoute('homepage');
        }
        else
        {
            $produits = array();
            foreach ($p as $id => $qte)
            {
                $produits[] = $em->getRepository(Produit::class)->find($id);
            }
            return $this->render('panier.html.twig', array(
                'produits' => $produits, 'panier' => $p));
        }
    }

    public function nbProduitsAction()
    {
        $s = new Session();
        $p = $s->get('panier');
        $nb = count($p);
        return new Response($nb);
    }

    public function PanierSommeAction()
    {
        $em = $this->getDoctrine()->getManager();
           
        $s = new Session();
        @$p = $s->get('panier');
        $produits = array();
        $somme_total = 0;
        foreach ($p as $id => $qte)
        {
            $produit = $em->getRepository(Produit::class)->find($id);
            $somme_total =  $somme_total + ($produit->getPrix()*$qte);
        }
        return new Response($somme_total);
    }


    public function TVASommeAction()
    {
        $em = $this->getDoctrine()->getManager();
           
        $s = new Session();
        @$p = $s->get('panier');
        $produits = array();
        $somme_total = 0;
        foreach ($p as $id => $qte)
        {
            $produit = $em->getRepository(Produit::class)->find($id);
            $somme_total =  $somme_total + ($produit->getPrix()*$qte);
        }
        return new Response(($somme_total *10) / 100);
    }

    public function FinalSommeAction()
    {
        $em = $this->getDoctrine()->getManager();
           
        $s = new Session();
        @$p = $s->get('panier');
        $produits = array();
        $somme_total = 0;
        foreach ($p as $id => $qte)
        {
            $produit = $em->getRepository(Produit::class)->find($id);
            $somme_total =  $somme_total + ($produit->getPrix()*$qte);
        }
        $tva = ($somme_total *10) / 100;
        return new Response($somme_total + $tva);
    }

    /**
     * @Route("/delete/{id_produit}", name="produit_delete")
     * @Method("GET")
     */
    public function removeProductAction($id_produit)
    {
            $s = new Session();
            @$p = $s->get('panier');
            unset($p[$id_produit]);
            $s->set('panier',$p);
        return $this->redirectToRoute('panier_details');
    }

    /**
     * @Route("/clear", name="clear_panier")
     * @Method("GET")
     */
    public function ClearPanierAction()
    {
            $s = new Session();
            $s->clear();

        return $this->redirectToRoute('panier_details');
    }

}
