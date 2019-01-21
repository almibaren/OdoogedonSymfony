<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrMailServer
 *
 * @ORM\Table(name="ir_mail_server", indexes={@ORM\Index(name="ir_mail_server_name_index", columns={"name"}), @ORM\Index(name="IDX_8BA4DE6D7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_8BA4DE6D4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrMailServer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_mail_server_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Description"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="smtp_host", type="string", nullable=false, options={"comment"="SMTP Server"})
     */
    private $smtpHost;

    /**
     * @var int
     *
     * @ORM\Column(name="smtp_port", type="integer", nullable=false, options={"comment"="SMTP Port"})
     */
    private $smtpPort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="smtp_user", type="string", nullable=true, options={"comment"="Username"})
     */
    private $smtpUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="smtp_pass", type="string", nullable=true, options={"comment"="Password"})
     */
    private $smtpPass;

    /**
     * @var string
     *
     * @ORM\Column(name="smtp_encryption", type="string", nullable=false, options={"comment"="Connection Security"})
     */
    private $smtpEncryption;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="smtp_debug", type="boolean", nullable=true, options={"comment"="Debugging"})
     */
    private $smtpDebug;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Priority"})
     */
    private $sequence;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

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


}
