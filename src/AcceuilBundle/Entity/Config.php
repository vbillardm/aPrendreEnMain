<?php

namespace AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Config
 *
 * @ORM\Table(name="config")
 * @ORM\Entity(repositoryClass="AcceuilBundle\Repository\ConfigRepository")
 */
class Config
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
      * @ORM\Column(name="key", type="string", length=255, unique=true)
      */
     private $key;

     /**
      * @var string
      *
      * @ORM\Column(name="value", type="string", length=255)
      */
     private $value;



     /**
      * Get key
      *
      * @return string
      */
     public function getKey() {
         return $this->key;
     }

     /**
      * Get value
      *
      * @return string
      */
     public function getValue() {
         return $this->value;
     }

     /**
      * Set key
      *
      * @param string key
      *
      * @return Config
      */
     public function setKey($key) {
         $this->key = $key;
         return $this;
     }

     /**
      * Set value
      *
      * @param string value
      *
      * @return Config
      */
     public function setValue($value) {
         $this->value = $value;
         return $this;
     }
}



 ?>
