<?php
// src/Acme/UserBundle/Entity/User.php

namespace CodersLabBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
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
     * @ORM\OneToMany(targetEntity="Task", mappedBy="user")
     */
    private $task;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }




    /**
     * Add task
     *
     * @param \CodersLabBundle\Entity\Task $task
     * @return User
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

    /**
     * Set description
     *
     * @param string $description
     * @return User
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
}
