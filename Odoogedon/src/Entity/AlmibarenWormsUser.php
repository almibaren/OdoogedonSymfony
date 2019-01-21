<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmibarenWormsUser
 *
 * @ORM\Table(name="almibaren_worms_user", indexes={@ORM\Index(name="IDX_B765F5277C455263", columns={"write_uid"}), @ORM\Index(name="IDX_B765F5274C10A2D2", columns={"create_uid"})})
 * @ORM\Entity(repositoryClass="App\Repository\AlmibarenUsuario")
 */
class AlmibarenWormsUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almibaren_worms_user_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Username"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", nullable=false, options={"comment"="Password"})
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="realName", type="string", nullable=true, options={"comment"="Name"})
     */
    private $realname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="surname", type="string", nullable=true, options={"comment"="Surname"})
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", nullable=false, options={"comment"="Email"})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", nullable=true, options={"comment"="Username"})
     */
    private $username;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Created on"})
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true, options={"comment"="Last Updated on"})
     */
    private $writeDate;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="write_uid", referencedColumnName="id")
     * })
     */
    private $writeUid;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="create_uid", referencedColumnName="id")
     * })
     */
    private $createUid;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return null|string
     */
    public function getRealname()
    {
        return $this->realname;
    }

    /**
     * @param null|string $realname
     */
    public function setRealname($realname)
    {
        $this->realname = $realname;
    }

    /**
     * @return null|string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param null|string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return null|string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param null|string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


}
