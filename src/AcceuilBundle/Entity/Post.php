<?php

namespace AcceuilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AcceuilBundle\Entity\User;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AcceuilBundle\Repository\PostRepository")
 */
class Post
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
     * // POur la présentation //
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     * // POur le projet //
     * @ORM\Column(name="projectTitle", type="string", length=255)
     */
    private $projectTitle;
    /**
     * @var string
     * // POur la présentation //
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     * // POur la article //
     * @ORM\JoinColumn(name="User_id", referencedColumnName="id")
     * @ORM\ManytoOne(targetEntity="User", inversedBy="Post")
     */
    private $author;

    /**
     * @var string
     * // POur la présentation //
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="Path", type="string", length=255)
     * @Assert\File(mimeTypes={ "image/jpeg", "image/pjpeg", "image/jpeg", "image/png", "image/gif" })
     */
    private $path;

    /**
     * @var string
     * // POur la présentation //
     * @ORM\Column(name="conText", type="text", nullable=true)
     */
    private $conText;

    /**
     * @var string
     *
     *@ORM\Column(name="objectifChiffre",type="text",length=65535,nullable=true)
     */
    private $objectifChiffre;

    /**
     * @var string
     * // POur la présentation //
     * @ORM\Column(name="coutProjet", type="text",nullable=true)
     */
    private $coutProjet;

    /**
     * @var string
     * // POur la présentation //
     * @ORM\Column(name="dateRealisation", type="date",nullable=true)
     */
    private $dateRealisation;



    public function __construct()
    {
        $this->created = new \DateTime('NOW');
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Post
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Post
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Post
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Post
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set conText
     *
     * @param string $conText
     *
     * @return Post
     */
    public function setConText($conText)
    {
        $this->conText = $conText;

        return $this;
    }

    /**
     * Get conText
     *
     * @return string
     */
    public function getConText()
    {
        return $this->conText;
    }
    /**
     * Set objectifChiffre
     *
     * @param string $objectifChiffre
     *
     * @return Post
     */
    public function setObjectifChiffre($objectifChiffre)
    {
        $this->objectifChiffre = $objectifChiffre;

        return $this;
    }

    /**
     * Get objectifChiffre
     *
     * @return string
     */
    public function getObjectifChiffre()
    {
        return $this->objectifChiffre;
    }
    /**
     * Set coutProjet
     *
     * @param string $coutProjet
     *
     * @return Post
     */
    public function setCoutProjet($coutProjet)
    {
        $this->coutProjet = $coutProjet;

        return $this;
    }

    /**
     * Get coutProjet
     *
     * @return string
     */
    public function getCoutProjet()
    {
        return $this->coutProjet;
    }
    /**
     * Set dateRealisation
     *
     * @param date $dateRealisation
     *
     * @return Post
     */
    public function setDateRealisation($dateRealisation)
    {
        $this->dateRealisation = $dateRealisation;

        return $this;
    }

    /**
     * Get $dateRealisation
     *
     * @return string
     */
    public function getDateRealisation()
    {
        return $this->dateRealisation;
    }

    /**
     * Set projectTitle
     *
     * @param string $projectTitle
     *
     * @return Post
     */
    public function setProjectTitle($projectTitle)
    {
        $this->projectTitle = $projectTitle;

        return $this;
    }

    /**
     * Get projectTitle
     *
     * @return string
     */
    public function getProjectTitle()
    {
        return $this->projectTitle;
    }
}
