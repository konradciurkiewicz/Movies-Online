<?php

namespace PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PageBundle\Libs\Utils;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity(repositoryClass="PageBundle\Repository\VideoRepository")
 * @ORM\Table(name="page_videos")
 * @ORM\HasLifecycleCallbacks
 *
 * @UniqueEntity(fields={"title"})
 * @UniqueEntity(fields={"slug"})
 */
class Video
{

//    const UPLOAD_DIR = 'uploads/thumbnails/';
    const DEFAULT_AVATAR = 'default-thumbnail.jpg';

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=120, unique=true)
     *
     * @Assert\NotBlank
     *
     * @Assert\Length(
     *      max = 50
     * )
     */
    private $title;
    /**
     * @ORM\Column(type="string", length=120, unique=true)
     *
     * @Assert\Length(
     *      max = 120
     * )
     */
    private $slug;
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $content;
    /**
     * @Assert\Url()
     *  * @Assert\Regex(
     *     pattern     = "/([a-z\-_0-9\/\:\.]*\.(jpg|jpeg|png|gif))/i",
     *     message="Podano błędny adres obrazka."
     * )
     * @ORM\Column(type="text", nullable=true)
     */
    private $thumbnail = null;

//    /**
//     * @Assert\Url()
//     */
//    private $thumbnailFile;
//
//
//    private $thumbnailTemp;
    /**
     * @ORM\ManyToOne(
     *  targetEntity="Category",
     *     inversedBy ="posts"
     * )
     * @ORM\JoinColumn(
     *     name="category_id",
     *     referencedColumnName= "id",
     *     onDelete = "SET NULL"
     * )
     */
    private $category;

    /**
     * @ORM\ManyToMany(
     *     targetEntity = "Tag",
     *     inversedBy="posts"
     * )
     * @ORM\JoinTable(
     *     name="page_posts_tags"
     * )
     */
    private $tags;
    /**
     * @ORM\ManyToOne(
     *  targetEntity="User",
     *
     * )
     * @ORM\JoinColumn(
     *     name="author_id",
     *     referencedColumnName= "id",
     *
     * )
     */
    private $author;
    /**
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $createDate;
    /**
     * @ORM\Column(name="published_date", type="datetime", nullable=true)
     */
    private $publishedDate = null;

    /**
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate = null;


    /**
     * @ORM\OneToMany(
     *      targetEntity="Comment",
     *     mappedBy= "post"
     * )
     */
    private $comments;
    /**
     * @ORM\Column(name="tag_line", type="text")
     *
     * @Assert\NotBlank
     */
    private $tagline;

    /**
     * @return mixed
     */
    public function getTagline()
    {
        return $this->tagline;
    }

    /**
     * @param mixed $tagline
     */
    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();

        $this->publishedDate= new \DateTime();
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
     * Set title
     *
     * @param string $title
     *
     * @return Video
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Video
     */
    public function setSlug($slug)
    {
        $this->slug = Utils::sluggify($this->title);

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Video
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set thumbnail
     *
     * @param string $thumbnail
     *
     * @return Video
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return string
     */

    public function getThumbnail()
    {


//        $file_headers = @get_headers($this->thumbnail);
//        $file_url = str_replace('https://', '', $this->thumbnail);
//        $file_url = str_replace('http://', '', $this->thumbnail);
        if(@fopen($this->thumbnail, 'r')) {
            $exists = true;
        }
        else {
            $exists = false;
        }

        if(null == $this->thumbnail  or $exists==FALSE){
            return Video::getUploadDir().Video::DEFAULT_AVATAR;
        }

        return $this->thumbnail;
    }
//
//
//    public function getThumbnailFile() {
//        return $this->thumbnailFile;
//    }
//
////    public function setThumbnailFile(UploadedFile $thumbnailFile) {
////        $this->thumbnailFile = $thumbnailFile;
////        $this->updateDate = new \DateTime();
////        return $this;
////    }
//    public function setThumbnailFile($thumbnailFile) {
//        $this->thumbnailFile = $thumbnailFile;
//        return $this;
//    }

    /**
     * Set author
     *
     * @param \PageBundle\Entity\User $author
     *
     * @return Video
     */
    public function setAuthor($author)
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
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return Video
     */
    public function setCreateDate($createDate)
    {

        $this->createDate = new \DateTime();

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
     * Set publishedDate
     *
     * @param \DateTime $publishedDate
     *
     * @return Video
     */
    public function setPublishedDate($publishedDate)
    {
        $this->publishedDate =  new \DateTime();

        return $this;
    }

    /**
     * Get publishedDate
     *
     * @return \DateTime
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * Set category
     *
     * @param \PageBundle\Entity\Category $category
     *
     * @return Video
     */
    public function setCategory(\PageBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \PageBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add tag
     *
     * @param \PageBundle\Entity\Tag $tag
     *
     * @return Video
     */
    public function addTag(\PageBundle\Entity\Tag $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \PageBundle\Entity\Tag $tag
     */
    public function removeTag(\PageBundle\Entity\Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add comment
     *
     * @param \PageBundle\Entity\Comment $comment
     *
     * @return Video
     */
    public function addComment(\PageBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \PageBundle\Entity\Comment $comment
     */
    public function removeComment(\PageBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

//
//    public function upload()
//    {
//        if (null === $this->getThumbnailFile()) {
//            return;
//        }
//
//        // if there is an error when moving the file, an exception will
//        // be automatically thrown by move(). This will properly prevent
//        // the entity from being persisted to the database on error
//        $this->getThumbnailFile()->move($this->getUploadRootDir(), $this->thumbnail);
//
//        // check if we have an old image
//        if (isset($this->thumbnailTemp)) {
//            // delete the old image
//            unlink($this->getUploadRootDir().'/'.$this->thumbnailTemp);
//            // clear the temp image path
//            $this->thumbnailTemp = null;
//        }
//        $this->thumbnailFile = null;
//    }


    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preSave(){
        if(null === $this->slug){
            $this->setSlug($this->getTitle());
        }

//        if(null !== $this->getThumbnailFile()){
//
//            if(null !== $this->thumbnail){
//                $this->thumbnailTemp = $this->thumbnail;
//            }
//
//            $fileName = sha1(uniqid(null, true));
//            $this->thumbnail = $fileName.'.'.$this->getThumbnailFile()->guessExtension();
//        }

        if(null == $this->createDate){
            $this->createDate = new \DateTime();
        }
    }



    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function postSave(){
//        if(NULL !== $this->getThumbnailFile()){
////            $this->getThumbnailFile()->move($this->getUploadRootDir(), $this->thumbnail);
////            unset($this->thumbnailFile);
////
////            if(isset($this->thumbnailTemp)){
////                unlink($this->getUploadRootDir().'/'.$this->thumbnailTemp);
////                unset($this->thumbnailTemp);
////            }
////
////
////        $this->getThumbnailFile()->move($this->getUploadRootDir(), $this->thumbnail);
////
////        // check if we have an old image
////        if (isset($this->thumbnailTemp)) {
////            // delete the old image
////            unlink($this->getUploadRootDir().'/'.$this->thumbnailTemp);
////            // clear the temp image path
////            $this->thumbnailTemp = null;
////        }
////        $this->thumbnailFile = null;
////
////
//        }


        if(null == $this->createDate){
            $this->createDate = new \DateTime();
        }

        if(null == $this->slug){
            $this->slug =  Utils::sluggify($this->title);
        }

    }

//    /**
//     * @ORM\PostRemove
//     */
//    public function postRemove() {
//        if(null !== $this->thumbnail){
//            unlink($this->getUploadRootDir().'/'.$this->thumbnail);
//        }
//    }
//
//
//
//
//    protected function getUploadRootDir()
//    {
//        // the absolute directory path where uploaded documents should be saved
//        return __DIR__.'/../../../../web/'.$this->getUploadDir();
//    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/thumbnails/';
    }

}
