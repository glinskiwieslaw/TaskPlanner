<?php
// src/Acme/UserBundle/Entity/User.php

namespace CodersLabBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="task")
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $description;


    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(type="datetime")
     */
    private $duedate;

    /**
     * @var
     */


    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $subjectcategory;



    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="task")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="task")
     */
    private $user;


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
     * Set name
     *
     * @param string $name
     * @return Task
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Task
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
     * Set priority
     *
     * @param string $priority
     * @return Task
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set duedate
     *
     * @param \DateTime $duedate
     * @return Task
     */
    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;

        return $this;
    }

    /**
     * Get duedate
     *
     * @return \DateTime 
     */
    public function getDuedate()
    {
        return $this->duedate;
    }

    /**
     * Set subjectcategory
     *
     * @param string $subjectcategory
     * @return Task
     */
    public function setSubjectcategory($subjectcategory)
    {
        $this->subjectcategory = $subjectcategory;

        return $this;
    }

    /**
     * Get subjectcategory
     *
     * @return string 
     */
    public function getSubjectcategory()
    {
        return $this->subjectcategory;
    }

    /**
     * Set category
     *
     * @param \CodersLabBundle\Entity\Category $category
     * @return Task
     */
    public function setCategory(\CodersLabBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \CodersLabBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set user
     *
     * @param \CodersLabBundle\Entity\User $user
     * @return Task
     */
    public function setUser(\CodersLabBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CodersLabBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
