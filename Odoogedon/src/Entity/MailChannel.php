<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailChannel
 *
 * @ORM\Table(name="mail_channel", indexes={@ORM\Index(name="mail_channel_uuid_index", columns={"uuid"}), @ORM\Index(name="IDX_78440F287C455263", columns={"write_uid"}), @ORM\Index(name="IDX_78440F284C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_78440F285E564AE2", columns={"alias_id"}), @ORM\Index(name="IDX_78440F287507D770", columns={"group_public_id"})})
 * @ORM\Entity
 */
class MailChannel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_channel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="channel_type", type="string", nullable=true, options={"comment"="Channel Type"})
     */
    private $channelType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Description"})
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uuid", type="string", length=50, nullable=true, options={"comment"="UUID"})
     */
    private $uuid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="email_send", type="boolean", nullable=true, options={"comment"="Send messages by email"})
     */
    private $emailSend;

    /**
     * @var string
     *
     * @ORM\Column(name="public", type="string", nullable=false, options={"comment"="Privacy"})
     */
    private $public;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_last_post", type="datetime", nullable=true, options={"comment"="Last Message Date"})
     */
    private $messageLastPost;

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
     * @var \MailAlias
     *
     * @ORM\ManyToOne(targetEntity="MailAlias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alias_id", referencedColumnName="id")
     * })
     */
    private $alias;

    /**
     * @var \ResGroups
     *
     * @ORM\ManyToOne(targetEntity="ResGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_public_id", referencedColumnName="id")
     * })
     */
    private $groupPublic;


}
