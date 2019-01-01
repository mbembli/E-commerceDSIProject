<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libellle", type="string", length=255)
     */
    private $libellle;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptCourt", type="string", length=255)
     */
    private $descriptCourt;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptLong", type="text")
     */
    private $descriptLong;

    /**
     * @var string
     *
     * @ORM\Column(name="imagePrin", type="string", length=255)
     */
    private $imagePrin;

    /**
     * @var string
     *
     * @ORM\Column(name="imagesSec", type="string", length=255)
     */
    private $imagesSec;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=1)
     */
    private $prix;

     /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libellle
     *
     * @param string $libellle
     *
     * @return Produit
     */
    public function setLibellle($libellle)
    {
        $this->libellle = $libellle;

        return $this;
    }

    /**
     * Get libellle
     *
     * @return string
     */
    public function getLibellle()
    {
        return $this->libellle;
    }

    /**
     * Set descriptCourt
     *
     * @param string $descriptCourt
     *
     * @return Produit
     */
    public function setDescriptCourt($descriptCourt)
    {
        $this->descriptCourt = $descriptCourt;

        return $this;
    }

    /**
     * Get descriptCourt
     *
     * @return string
     */
    public function getDescriptCourt()
    {
        return $this->descriptCourt;
    }

    /**
     * Set descriptLong
     *
     * @param string $descriptLong
     *
     * @return Produit
     */
    public function setDescriptLong($descriptLong)
    {
        $this->descriptLong = $descriptLong;

        return $this;
    }

    /**
     * Get descriptLong
     *
     * @return string
     */
    public function getDescriptLong()
    {
        return $this->descriptLong;
    }

    /**
     * Set imagePrin
     *
     * @param string $imagePrin
     *
     * @return Produit
     */
    public function setImagePrin($imagePrin)
    {
        $this->imagePrin = $imagePrin;

        return $this;
    }

    /**
     * Get imagePrin
     *
     * @return string
     */
    public function getImagePrin()
    {
        return $this->imagePrin;
    }

    /**
     * Set imagesSec
     *
     * @param string $imagesSec
     *
     * @return Produit
     */
    public function setImagesSec($imagesSec)
    {
        $this->imagesSec = $imagesSec;

        return $this;
    }

    /**
     * Get imagesSec
     *
     * @return string
     */
    public function getImagesSec()
    {
        return $this->imagesSec;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set categorie
     *
     * @param \AppBundle\Entity\Categorie $categorie
     *
     * @return Produit
     */
    public function setCategorie(\AppBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \AppBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    public function __toString(){
        return $this->getDescriptCourt();
    }

}
