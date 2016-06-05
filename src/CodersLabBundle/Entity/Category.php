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

}