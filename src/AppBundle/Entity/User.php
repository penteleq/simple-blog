<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
// use FOS\UserBundle\Propel\User as BaseUser;
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
     * @ORM\Column(type="string")
     */
    protected $username;

    /**
     * @ORM\Column(type="string")
     */
    protected $usernameCanonical;

    /**
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @ORM\Column(type="string")
     */
    protected $emailCanonical;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $enabled = 1;

    /**
     * The salt to use for hashing
     *
     * @ORM\Column(type="string")
     */
    protected $salt;

    /**
     * Encrypted password. Must be persisted.
     *
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $lastLogin;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $passwordRequestedAt;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $locked = 0;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $expired;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $expiresAt;

    /**
     * @ORM\Column(type="array")
     */
    protected $roles;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $credentialsExpired = 0;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $credentialsExpireAt;
}