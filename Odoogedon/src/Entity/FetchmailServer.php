<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FetchmailServer
 *
 * @ORM\Table(name="fetchmail_server", indexes={@ORM\Index(name="fetchmail_server_type_index", columns={"type"}), @ORM\Index(name="fetchmail_server_state_index", columns={"state"}), @ORM\Index(name="IDX_75A51F177C455263", columns={"write_uid"}), @ORM\Index(name="IDX_75A51F174C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_75A51F17232D562B", columns={"object_id"}), @ORM\Index(name="IDX_75A51F179D32F035", columns={"action_id"})})
 * @ORM\Entity
 */
class FetchmailServer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fetchmail_server_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="server", type="string", nullable=true, options={"comment"="Server Name"})
     */
    private $server;

    /**
     * @var int|null
     *
     * @ORM\Column(name="port", type="integer", nullable=true, options={"comment"="Port"})
     */
    private $port;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Server Type"})
     */
    private $type;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_ssl", type="boolean", nullable=true, options={"comment"="SSL/TLS"})
     */
    private $isSsl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="attach", type="boolean", nullable=true, options={"comment"="Keep Attachments"})
     */
    private $attach;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="original", type="boolean", nullable=true, options={"comment"="Keep Original"})
     */
    private $original;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true, options={"comment"="Last Fetch Date"})
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user", type="string", nullable=true, options={"comment"="Username"})
     */
    private $user;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", nullable=true, options={"comment"="Password"})
     */
    private $password;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="integer", nullable=true, options={"comment"="Server Priority"})
     */
    private $priority;

    /**
     * @var string|null
     *
     * @ORM\Column(name="configuration", type="text", nullable=true, options={"comment"="Configuration"})
     */
    private $configuration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script", type="string", nullable=true, options={"comment"="Script"})
     */
    private $script;

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
     *   @ORM\JoinColumn(name="object_id", referencedColumnName="id")
     * })
     */
    private $object;

    /**
     * @var \IrActServer
     *
     * @ORM\ManyToOne(targetEntity="IrActServer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_id", referencedColumnName="id")
     * })
     */
    private $action;


}
