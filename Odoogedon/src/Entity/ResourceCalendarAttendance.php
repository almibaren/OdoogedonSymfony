<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResourceCalendarAttendance
 *
 * @ORM\Table(name="resource_calendar_attendance", indexes={@ORM\Index(name="resource_calendar_attendance_dayofweek_index", columns={"dayofweek"}), @ORM\Index(name="resource_calendar_attendance_hour_from_index", columns={"hour_from"}), @ORM\Index(name="IDX_917BA6567C455263", columns={"write_uid"}), @ORM\Index(name="IDX_917BA6564C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_917BA656A40A2C8", columns={"calendar_id"})})
 * @ORM\Entity
 */
class ResourceCalendarAttendance
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="resource_calendar_attendance_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="dayofweek", type="string", nullable=false, options={"comment"="Day of Week"})
     */
    private $dayofweek;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_from", type="date", nullable=true, options={"comment"="Starting Date"})
     */
    private $dateFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_to", type="date", nullable=true, options={"comment"="End Date"})
     */
    private $dateTo;

    /**
     * @var float
     *
     * @ORM\Column(name="hour_from", type="float", precision=10, scale=0, nullable=false, options={"comment"="Work from"})
     */
    private $hourFrom;

    /**
     * @var float
     *
     * @ORM\Column(name="hour_to", type="float", precision=10, scale=0, nullable=false, options={"comment"="Work to"})
     */
    private $hourTo;

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
     * @var \ResourceCalendar
     *
     * @ORM\ManyToOne(targetEntity="ResourceCalendar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="calendar_id", referencedColumnName="id")
     * })
     */
    private $calendar;


}
