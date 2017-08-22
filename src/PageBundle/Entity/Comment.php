<?php

namespace PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="PageBundle\Repository\CommentRepository")
 * @ORM\Table(name="blog_comments")
 */
class Comment {


    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\ManyToOne(
     *      targetEntity = "Video",
     *      inversedBy = "comments"
     * )
     *
     * @ORM\JoinColumn(
     *      name = "video_id",
     *      referencedColumnName = "id",
     *      nullable = false,
     *      onDelete = "CASCADE"
     * )
     */
    private $post;


    /**
     * @ORM\ManyToOne(
     *      targetEntity = "PageBundle\Entity\User"
     * )
     *
     * @ORM\JoinColumn(
     *      name = "author_id",
     *      referencedColumnName = "id",
     *      nullable = false
     * )
     */
    private $author;


    /**
     * @ORM\Column(type="datetime")
     */
    private $createDate;


    /**
     * @ORM\Column(type="text")
     *
     * @Assert\NotBlank
     *
     * @Assert\Length(
     *      max = 120
     * )
     */
    private $title;



    /**
     * @ORM\Column(type="text")
     *
     * @Assert\NotBlank
     *
     * @Assert\Url
     */
    private $comment;

    /**
     * @ORM\Column(type="boolean",  nullable=true)
     *
     */
    private $iframe_able = null;

    /**
     * @return mixed
     */
    public function getIframeAble()
    {
        return $this->iframe_able;
    }

    /**
     * @param mixed $iframe_able
     */
    public function setIframeAble($iframe_able)
    {
        $this->iframe_able = $iframe_able;
    }

    function __construct() {
        $this->createDate = new \DateTime();
    }

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
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Comment
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Comment
     */
    public function setComment($comment)
    {
        if(preg_match("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-z‌​A-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", $comment)){
            $this->comment = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-z‌​A-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","https://www.youtube.com/embed/$1", $comment);
        }
        else if(preg_match("/\s*[a-zA-Z\/\/:\.]*youtu.be\/([a-z‌​A-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", $comment)){
            $this->comment = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu.be\/([a-z‌​A-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","https://www.youtube.com/embed/$1", $comment);
        }else {
            $this->comment = $comment;
        }
        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set post
     *
     * @param \PageBundle\Entity\Video $post
     * @return Comment
     */
    public function setPost(\PageBundle\Entity\Video $post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \PageBundle\Entity\Video
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set author
     *
     * @param \PageBundle\Entity\User $author
     * @return Comment
     */
    public function setAuthor(\PageBundle\Entity\User $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \PageBundle\Entity\User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Comment
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
}
