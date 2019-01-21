<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarEvent
 *
 * @ORM\Table(name="calendar_event", indexes={@ORM\Index(name="IDX_57FA09C99A34590F", columns={"opportunity_id"}), @ORM\Index(name="IDX_57FA09C97C455263", columns={"write_uid"}), @ORM\Index(name="IDX_57FA09C94C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_57FA09C9A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_57FA09C93EE53BCC", columns={"res_model_id"})})
 * @ORM\Entity
 */
class CalendarEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="calendar_event_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Meeting Subject"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="display_start", type="string", nullable=true, options={"comment"="Date"})
     */
    private $displayStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=false, options={"comment"="Start"})
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stop", type="datetime", nullable=false, options={"comment"="Stop"})
     */
    private $stop;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="allday", type="boolean", nullable=true, options={"comment"="All Day"})
     */
    private $allday;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="date", nullable=true, options={"comment"="Start Date"})
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_datetime", type="datetime", nullable=true, options={"comment"="Start DateTime"})
     */
    private $startDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stop_date", type="date", nullable=true, options={"comment"="End Date"})
     */
    private $stopDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stop_datetime", type="datetime", nullable=true, options={"comment"="End Datetime"})
     */
    private $stopDatetime;

    /**
     * @var float|null
     *
     * @ORM\Column(name="duration", type="float", precision=10, scale=0, nullable=true, options={"comment"="Duration"})
     */
    private $duration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Description"})
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="privacy", type="string", nullable=true, options={"comment"="Privacy"})
     */
    private $privacy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", nullable=true, options={"comment"="Location"})
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="show_as", type="string", nullable=true, options={"comment"="Show Time as"})
     */
    private $showAs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="res_id", type="integer", nullable=true, options={"comment"="Document ID"})
     */
    private $resId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_model", type="string", nullable=true, options={"comment"="Document Model Name"})
     */
    private $resModel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rrule", type="string", nullable=true, options={"comment"="Recurrent Rule"})
     */
    private $rrule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rrule_type", type="string", nullable=true, options={"comment"="Recurrence"})
     */
    private $rruleType;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="recurrency", type="boolean", nullable=true, options={"comment"="Recurrent"})
     */
    private $recurrency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recurrent_id", type="integer", nullable=true, options={"comment"="Recurrent ID"})
     */
    private $recurrentId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="recurrent_id_date", type="datetime", nullable=true, options={"comment"="Recurrent ID date"})
     */
    private $recurrentIdDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="end_type", type="string", nullable=true, options={"comment"="Recurrence Termination"})
     */
    private $endType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="interval", type="integer", nullable=true, options={"comment"="Repeat Every"})
     */
    private $interval;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count", type="integer", nullable=true, options={"comment"="Repeat"})
     */
    private $count;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mo", type="boolean", nullable=true, options={"comment"="Mon"})
     */
    private $mo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tu", type="boolean", nullable=true, options={"comment"="Tue"})
     */
    private $tu;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="we", type="boolean", nullable=true, options={"comment"="Wed"})
     */
    private $we;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="th", type="boolean", nullable=true, options={"comment"="Thu"})
     */
    private $th;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="fr", type="boolean", nullable=true, options={"comment"="Fri"})
     */
    private $fr;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sa", type="boolean", nullable=true, options={"comment"="Sat"})
     */
    private $sa;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="su", type="boolean", nullable=true, options={"comment"="Sun"})
     */
    private $su;

    /**
     * @var string|null
     *
     * @ORM\Column(name="month_by", type="string", nullable=true, options={"comment"="Option"})
     */
    private $monthBy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day", type="integer", nullable=true, options={"comment"="Date of month"})
     */
    private $day;

    /**
     * @var string|null
     *
     * @ORM\Column(name="week_list", type="string", nullable=true, options={"comment"="Weekday"})
     */
    private $weekList;

    /**
     * @var string|null
     *
     * @ORM\Column(name="byday", type="string", nullable=true, options={"comment"="By day"})
     */
    private $byday;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="final_date", type="date", nullable=true, options={"comment"="Repeat Until"})
     */
    private $finalDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

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
     * @var \CrmLead
     *
     * @ORM\ManyToOne(targetEntity="CrmLead")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="opportunity_id", referencedColumnName="id")
     * })
     */
    private $opportunity;

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
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_model_id", referencedColumnName="id")
     * })
     */
    private $resModel2;


}
