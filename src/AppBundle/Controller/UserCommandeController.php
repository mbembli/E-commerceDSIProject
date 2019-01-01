<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Produit;
use AppBundle\Entity\ProduitCommande;
use AppBundle\Entity\Categorie;
use AppBundle\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * UserRatingt controller.
 *
 * @Route("/commander")
 */
class UserCommandeController extends Controller
{

    /**
     * @Route("/", name="page_commander_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = new Commande();
        $commande->setDate(new \DateTime('today'));

        $form = $this->createFormBuilder($commande)
            ->add('Fullname', TextType::class, array('label' => 'Nom et Prénom'))
            ->add('Email', TextType::class)
            ->add('Adresse', TextType::class)
            ->add('Valider', SubmitType::class, array('label' => 'Valider'))
            ->getForm();

            $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        
        $commande = $form->getData();
        $s = new Session();
        @$p = $s->get('panier');
        foreach ($p as $id => $qte)
        {
            $produit = $em->getRepository(Produit::class)->find($id);
            $pc = new ProduitCommande();
            $pc->setProduit($produit);
            $pc->setCommande($commande);
            $pc->setQte($qte);
            $pc->setPrix($produit->getPrix());
            $em->persist($pc);
        }
        $em->persist($commande);
        $em->flush();

        return $this->render('/merci.html.twig', array(
            'id_comm' => $commande->getId()));
      }

        return $this->render('/commander.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}