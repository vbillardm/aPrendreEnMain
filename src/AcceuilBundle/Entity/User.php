<?php

namespace AcceuilBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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


    /**
     * @var string
     *
     * @ORM\Column(name="Path", type="string", length=255)
     * @Assert\File(mimeTypes={ "image/jpeg", "image/pjpeg", "image/jpeg", "image/png", "image/gif" })
     */
    private $path;



    public function __construct()
    {
        $this->posts = new ArrayCollection();
        parent::__construct();
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
}
