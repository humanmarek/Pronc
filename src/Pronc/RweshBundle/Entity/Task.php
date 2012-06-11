<?php

namespace Pronc\RweshBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations

/**
 * Pronc\RweshBundle\Entity\Task
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Task
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var datetime $update
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="update", type="datetime")
     */
    private $update;

    /**
     * @var integer $priority
     *
     * @ORM\Column(name="priority", type="integer")
     */
    private $priority;

    /**
     * @var Project $project
     * @ORM\OneToOne(targetEntity="Project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;
    
    /**
     * @var Owner $owner
     *
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $owner;
    
    /**
     *
     * @ManyToMany(targetEntity="User")
     * @JoinTable(name="users_tasks",
     *      joinColumns={@JoinColumn(name="task_id",
     *           referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="user_id",
     *                referencedColumnName="id")}
     *      )
     */
    private $users;
    
}