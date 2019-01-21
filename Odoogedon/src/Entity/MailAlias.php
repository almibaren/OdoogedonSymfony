<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailAlias
 *
 * @ORM\Table(name="mail_alias", uniqueConstraints={@ORM\UniqueConstraint(name="mail_alias_alias_unique", columns={"alias_name"})}, indexes={@ORM\Index(name="IDX_D5AFC9FB7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_D5AFC9FB4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_D5AFC9FBBC65B8E2", columns={"alias_parent_model_id"}), @ORM\Index(name="IDX_D5AFC9FB9BDFB1B2", columns={"alias_user_id"}), @ORM\Index(name="IDX_D5AFC9FBDC43B3EE", columns={"alias_model_id"})})
 * @ORM\Entity
 */
class MailAlias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_alias_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alias_name", type="string", nullable=true, options={"comment"="Alias Name"})
     */
    private $aliasName;

    /**
     * @var string
     *
     * @ORM\Column(name="alias_defaults", type="text", nullable=false, options={"comment"="Default Values"})
     */
    private $aliasDefaults;

    /**
     * @var int|null
     *
     * @ORM\Column(name="alias_force_thread_id", type="integer", nullable=true, options={"comment"="Record Thread ID"})
     */
    private $aliasForceThreadId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="alias_parent_thread_id", type="integer", nullable=true, options={"comment"="Parent Record Thread ID"})
     */
    private $aliasParentThreadId;

    /**
     * @var string
     *
     * @ORM\Column(name="alias_contact", type="string", nullable=false, options={"comment"="Alias Contact Security"})
     */
    private $aliasContact;

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
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alias_parent_model_id", referencedColumnName="id")
     * })
     */
    private $aliasParentModel;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alias_user_id", referencedColumnName="id")
     * })
     */
    private $aliasUser;

    /**
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alias_model_id", referencedColumnName="id")
     * })
     */
    private $aliasModel;


}
