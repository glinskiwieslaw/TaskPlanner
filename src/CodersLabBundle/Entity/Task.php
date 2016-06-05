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
}