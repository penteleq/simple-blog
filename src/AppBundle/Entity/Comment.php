<?php

namespace AppBundle\Entity;

use AppBundle\Traits\JsonTrait;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="comments")
 */
class Comment
{
    use JsonTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $post;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="comment.blank")
     * @Assert\Length(
     *     min = "5",
     *     minMessage = "comment.too_short",
     *     max = "10000",
     *     maxMessage = "comment.too_long"
     * )
     */
    private $content;

    /**
     * @ORM\Column(type="string")
     * @Assert\Email()
     */
    private $authorEmail;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime()
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getAuthorEmail()
    {
        return $this->authorEmail;
    }
    public function setAuthorEmail($authorEmail)
    {
        $this->authorEmail = $authorEmail;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getPost()
    {
        return $this->post;
    }
    public function setPost(Post $post)
    {
        $this->post = $post;
    }
}
