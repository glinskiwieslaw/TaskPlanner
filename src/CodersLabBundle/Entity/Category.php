<?php
// src/Acme/UserBundle/Entity/User.php

namespace CodersLabBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category
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
     *
     * @ORM\OneToMany(targetEntity="Task", mappedBy="category")
     */
    private $task;

    /**
     * @var string
     *
     * @ORM\Column(type="datetime")
     */
    private $duedate;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $subjectcategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->task = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Category
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
     * @return Category
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
     * Set duedate
     *
     * @param \DateTime $duedate
     * @return Category
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
     * @return Category
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
     * Add task
     *
     * @param \CodersLabBundle\Entity\Task $task
     * @return Category
     */
    public function addTask(\CodersLabBundle\Entity\Task $task)
    {
        $this->task[] = $task;

        return $this;
    }

    /**
     * Remove task
     *
     * @param \CodersLabBundle\Entity\Task $task
     */
    public function removeTask(\CodersLabBundle\Entity\Task $task)
    {
        $this->task->removeElement($task);
    }

    /**
     * Get task
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTask()
    {
        return $this->task;
    }
}
