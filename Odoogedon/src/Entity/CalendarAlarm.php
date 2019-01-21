<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarAlarm
 *
 * @ORM\Table(name="calendar_alarm", indexes={@ORM\Index(name="IDX_18CB45B37C455263", columns={"write_uid"}), @ORM\Index(name="IDX_18CB45B34C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class CalendarAlarm
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="calendar_alarm_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Type"})
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer", nullable=false, options={"comment"="Remind Before"})
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="interval", type="string", nullable=false, options={"comment"="Unit"})
     */
    private $interval;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration_minutes", type="integer", nullable=true, options={"comment"="Duration in minutes"})
     */
    private $durationMinutes;

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
