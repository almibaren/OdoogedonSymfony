<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChangePasswordUser
 *
 * @ORM\Table(name="change_password_user", indexes={@ORM\Index(name="IDX_32116BB7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_32116BB4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_32116BBA76ED395", columns={"user_id"}), @ORM\Index(name="IDX_32116BB98899D61", columns={"wizard_id"})})
 * @ORM\Entity
 */
class ChangePasswordUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="change_password_user_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_login", type="string", nullable=true, options={"comment"="User Login"})
     */
    private $userLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="new_passwd", type="string", nullable=true, options={"comment"="New Password"})
     */
    private $newPasswd;

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
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \ChangePasswordWizard
     *
     * @ORM\ManyToOne(targetEntity="ChangePasswordWizard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wizard_id", referencedColumnName="id")
     * })
     */
    private $wizard;


}
