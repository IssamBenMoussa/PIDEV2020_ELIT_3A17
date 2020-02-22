<?php

namespace ElitBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\bookRepository")
 */
class book
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
     * @ORM\Column(name="Title", type="string", length=255)
      *  @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "the Book Title must be at least {{ limit }} characters long",
     *      maxMessage = "the Book Title cannot be longer than {{ limit }} characters"
     * )
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="ElitBundle\Entity\CategoryBook")
     * @ORM\JoinColumn(name="category",referencedColumnName="id")
     *
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="imagebook", type="string", length=255)
     */
    private $imagebook;

    /**
     * @var int
     * @ORM\Column(name="isbn", type="integer")
     *  @Assert\Length(
     *      min = 6,
     *      max = 8,
     *      minMessage = "the Isbn must be at least {{ limit }} characters long",
     *      maxMessage = "the Isbn cannot be longer than {{ limit }} characters"
     * )
     */
    private $isbn;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrbooks", type="integer")
     */
    private $nbrbooks;


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
     * @return book
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
     * Set author
     *
     * @param string $author
     *
     * @return book
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
     * Set description
     *
     * @param string $description
     *
     * @return book
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
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }



    /**
     * Set imagebook
     *
     * @param string $imagebook
     *
     * @return book
     */
    public function setImagebook($imagebook)
    {
        $this->imagebook = $imagebook;
    
        return $this;
    }

    /**
     * Get imagebook
     *
     * @return string
     */
    public function getImagebook()
    {
        return $this->imagebook;
    }

    /**
     * Set isbn
     *
     * @param integer $isbn
     *
     * @return book
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    
        return $this;
    }

    /**
     * Get isbn
     *
     * @return integer
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set nbrbooks
     *
     * @param integer $nbrbooks
     *
     * @return book
     */
    public function setNbrbooks($nbrbooks)
    {
        $this->nbrbooks = $nbrbooks;
    
        return $this;
    }

    /**
     * Get nbrbooks
     *
     * @return integer
     */
    public function getNbrbooks()
    {
        return $this->nbrbooks;
    }
}

