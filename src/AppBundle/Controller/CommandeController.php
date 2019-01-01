<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Commande;
use AppBundle\Entity\Produit;
use AppBundle\Entity\ProduitCommande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
/**
 * UserProduct controller.
 *
 * @Route("admin/commande")
 */
class CommandeController extends Controller
{
    /**
     * Lists all produit entities.
     *
     * @Route("/", name="admin_commande_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commandes = $em->getRepository('AppBundle:Commande')->findAll();

        return $this->render('admin/commandes.html.twig', array(
            'commandes' => $commandes,
        ));
    }

    /**
     * @Route("/details/{id_commande}", name="admin_commande_details")
     * @Method("GET")
     */
    public function detailsAction($id_commande)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Commande');
        $pc_repository = $em->getRepository('AppBundle:ProduitCommande');
        $commande = $repository->find($id_commande);
        $list_produits_commandes = $pc_repository->getProductsCommande($id_commande);
        // TOTAL HT
        $totalHT = $pc_repository->totalHT($id_commande);
        // TOTAL with$ TVA 10%
        $totalTVA = ($totalHT[1] * 10) / 100;
        // total final
        $totalFinal = $totalHT[1] + $totalTVA;
        return $this->render('admin/details-commande.html.twig', array(
            'c' => $commande,'list' => $list_produits_commandes,'totalHT' => $totalHT[1],'totalTVA' => $totalTVA,'totalFinal' => $totalFinal ));
    }

    public function nbsCommandesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $commandes = $em->getRepository('AppBundle:Commande')->findAll();
        return new Response(count($commandes));
    }

     public function montantTotalCommandesAction()
     {
        $em = $this->getDoctrine()->getManager();
        $total = $em->getRepository('AppBundle:ProduitCommande')->montantTotal();
        
        return new Response($total[1]);
     }




}