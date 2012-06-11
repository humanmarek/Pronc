<?php

namespace Pronc\RweshBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as FOSUser;

/**
 * Pronc\RweshBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User extends FOSUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    protected $created;

    /**
     * @var datetime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated", type="datetime")
     */
    protected $updated;
    
    /**
     * @var string $role
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    protected $role;
    
    /**
     *
     *
     * @OneToMany(targetEntity="Task")
     * @JoinColumn(name="id", referencedColumnName="owner_id")
     */
    protected $owned_tasks;
    
    /**
     *
     * @ManyToMany(targetEntity="Task")
     * @JoinTable(name="tasks_users",
     *      joinColumns={@JoinColumn(name="user_id",
     *           referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="task_id",
     *                referencedColumnName="id")}
     *      )
     */
    protected $tasks;
    
    /**
     *
     *
     * @OneToMany(targetEntity="Project")
     * @JoinColumn(name="id", referencedColumnName="owner_id")
     */
    protected $owned_projects;
    
    /**
     *
     * @ManyToMany(targetEntity="Project")
     * @JoinTable(name="projects_users",
     *      joinColumns={@JoinColumn(name="user_id",
     *           referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="project_id",
     *                referencedColumnName="id")}
     *      )
     */
    protected $projects;
}
