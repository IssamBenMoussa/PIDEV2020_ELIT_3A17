<?php

namespace ElitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SBC\NotificationsBundle\Builder\NotificationBuilder;
use SBC\NotificationsBundle\Model\NotifiableInterface;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="ElitBundle\Repository\ClubRepository")
 */
class Club implements NotifiableInterface
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
     * @Assert\NotBlank(message="Empty title")
     * @Assert\Length(min="3",minMessage="Title too Short !")
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *@Assert\NotBlank(message="Empty description")
     * @Assert\Length(min="3",minMessage="Description too Short !")
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @return mixed
     */
    public function getPresident()
    {
        return $this->president;
    }

    /**
     * @param mixed $president
     */
    public function setPresident($president)
    {
        $this->president = $president;
    }

    /**
     * @var string
     * @Assert\NotBlank(message="Empty Category")
     * @Assert\Choice({"Art","Music","Electronics","Other","Computing","Communication","Entrepreneurship"}
     *     ,message="Valid categories are : Art,Music,Electronics,Computing,Communication,Entrepreneurship and Other")
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var \DateTime
     **@Assert\NotBlank(message="Empty Date")
     * @ORM\Column(name="creationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * One Club has One Student (president).
     * @ORM\OneToOne(targetEntity="Student")
     * @ORM\JoinColumn(name="studentId", referencedColumnName="id")
     */
    private $president;



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
     * @return Club
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
     * @return Club
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
     * Set category
     *
     * @param string $category
     *
     * @return Club
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Club
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Club
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    public function __toString()
    {
        return $this->getTitle();
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }
    /**
     * Build notifications on entity creation
     * @param NotificationBuilder $builder
     * @return NotificationBuilder
     */
    public function notificationsOnCreate(NotificationBuilder $builder)
    {
        $notification = new Notification();
        $notification
            ->setTitle('Club Updated '.$this->title)
            ->setDescription($this->description)
            ->setRoute('event_show')
            ->setParameters(array('id' => $this->id));
        $builder->addNotification($notification);
        return $builder;

    }

    /**
     * Build notifications on entity update
     * @param NotificationBuilder $builder
     * @return NotificationBuilder
     */
    public function notificationsOnUpdate(NotificationBuilder $builder)
    {
        $notification = new Notification();
        $notification
            ->setTitle('Event '.$this->title.' updated')
            ->setDescription($this->description)
            ->setRoute('event_show')
            ->setParameters(array('id' => $this->id));
        $builder->addNotification($notification);
        return $builder;
    }

    /**
     * Build notifications on entity delete
     * @param NotificationBuilder $builder
     * @return NotificationBuilder
     */
    public function notificationsOnDelete(NotificationBuilder $builder)
    {
        return $builder;
    }
}

