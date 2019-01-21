<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrCron
 *
 * @ORM\Table(name="ir_cron", indexes={@ORM\Index(name="IDX_4962FD7C7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_4962FD7C4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_4962FD7CA76ED395", columns={"user_id"}), @ORM\Index(name="IDX_4962FD7CC555687E", columns={"ir_actions_server_id"})})
 * @ORM\Entity
 */
class IrCron
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_cron_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cron_name", type="string", nullable=true, options={"comment"="Name"})
     */
    private $cronName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var int|null
     *
     * @ORM\Column(name="interval_number", type="integer", nullable=true, options={"comment"="Interval Number"})
     */
    private $intervalNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="interval_type", type="string", nullable=true, options={"comment"="Interval Unit"})
     */
    private $intervalType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numbercall", type="integer", nullable=true, options={"comment"="Number of Calls"})
     */
    private $numbercall;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="doall", type="boolean", nullable=true, options={"comment"="Repeat Missed"})
     */
    private $doall;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nextcall", type="datetime", nullable=false, options={"comment"="Next Execution Date"})
     */
    private $nextcall;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="integer", nullable=true, options={"comment"="Priority"})
     */
    private $priority;

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
     * @var \IrActServer
     *
     * @ORM\ManyToOne(targetEntity="IrActServer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ir_actions_server_id", referencedColumnName="id")
     * })
     */
    private $irActionsServer;


}
