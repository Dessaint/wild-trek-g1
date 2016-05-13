<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parcours
 *
 * @ORM\Table(name="parcours")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ParcoursRepository")
 */
class Parcours
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
     * @ORM\Column(name="discipline", type="string", length=255)
     */
    private $discipline;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=255)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivée", type="string", length=255)
     */
    private $arrivée;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="string", length=255)
     */
    private $avis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_depart", type="datetime")
     */
    private $heureDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_arrivee", type="datetime")
     */
    private $heureArrivee;

   /**
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer", nullable=true)
     */
    private $iduser;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set discipline
     *
     * @param string $discipline
     * @return Parcours
     */
    public function setDiscipline($discipline)
    {
        $this->discipline = $discipline;

        return $this;
    }

    /**
     * Get discipline
     *
     * @return string 
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * Set depart
     *
     * @param string $depart
     * @return Parcours
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return string 
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set arrivée
     *
     * @param string $arrivée
     * @return Parcours
     */
    public function setArrivée($arrivée)
    {
        $this->arrivée = $arrivée;

        return $this;
    }

    /**
     * Get arrivée
     *
     * @return string 
     */
    public function getArrivée()
    {
        return $this->arrivée;
    }

    /**
     * Set avis
     *
     * @param string $avis
     * @return Parcours
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return string 
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Set heureDepart
     *
     * @param \DateTime $heureDepart
     * @return Parcours
     */
    public function setHeureDepart($heureDepart)
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    /**
     * Get heureDepart
     *
     * @return \DateTime 
     */
    public function getHeureDepart()
    {
        return $this->heureDepart;
    }

    /**
     * Set heureArrivee
     *
     * @param \DateTime $heureArrivee
     * @return Parcours
     */
    public function setHeureArrivee($heureArrivee)
    {
        $this->heureArrivee = $heureArrivee;

        return $this;
    }

    /**
     * Get heureArrivee
     *
     * @return \DateTime 
     */
    public function getHeureArrivee()
    {
        return $this->heureArrivee;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return Parcours
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
