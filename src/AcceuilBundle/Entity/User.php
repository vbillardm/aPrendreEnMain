<?php

namespace AcceuilBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\OnetoMany(targetEntity="Post", mappedBy="Post")
     */
    protected $posts;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
        parent::__construct();
        $this->addRole('ROLE_MEMBRE');
    }

    public function addPost(Post $post)
  {
    $this->posts[] = $post;

    return $this;
  }

  public function removePost(Post $post)
  {
    $this->posts->removeElement($post);
  }

  public function getPost()
  {
    return $this->posts;
  }

}
