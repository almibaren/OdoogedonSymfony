<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailActivity
 *
 * @ORM\Table(name="mail_activity", indexes={@ORM\Index(name="mail_activity_res_id_index", columns={"res_id"}), @ORM\Index(name="mail_activity_user_id_index", columns={"user_id"}), @ORM\Index(name="mail_activity_res_model_index", columns={"res_model"}), @ORM\Index(name="mail_activity_res_model_id_index", columns={"res_model_id"}), @ORM\Index(name="mail_activity_date_deadline_index", columns={"date_deadline"}), @ORM\Index(name="IDX_71A3C8127495C8E3", columns={"calendar_event_id"}), @ORM\Index(name="IDX_71A3C8127C455263", columns={"write_uid"}), @ORM\Index(name="IDX_71A3C8124C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_71A3C8128B56CD32", columns={"previous_activity_type_id"}), @ORM\Index(name="IDX_71A3C812389C247B", columns={"recommended_activity_type_id"}), @ORM\Index(name="IDX_71A3C812C51EFA73", columns={"activity_type_id"})})
 * @ORM\Entity
 */
class MailActivity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_activity_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="res_id", type="integer", nullable=false, options={"comment"="Related Document ID"})
     */
    private $resId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_model", type="string", nullable=true, options={"comment"="Related Document Model"})
     */
    private $resModel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_name", type="string", nullable=true, options={"comment"="Document Name"})
     */
    private $resName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="summary", type="string", nullable=true, options={"comment"="Summary"})
     */
    private $summary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", nullable=true, options={"comment"="Note"})
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="feedback", type="text", nullable=true, options={"comment"="Feedback"})
     */
    private $feedback;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deadline", type="date", nullable=false, options={"comment"="Due Date"})
     */
    private $dateDeadline;

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
     * @var \CalendarEvent
     *
     * @ORM\ManyToOne(targetEntity="CalendarEvent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="calendar_event_id", referencedColumnName="id")
     * })
     */
    private $calendarEvent;

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
     * @var \MailActivityType
     *
     * @ORM\ManyToOne(targetEntity="MailActivityType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="previous_activity_type_id", referencedColumnName="id")
     * })
     */
    private $previousActivityType;

    /**
     * @var \MailActivityType
     *
     * @ORM\ManyToOne(targetEntity="MailActivityType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recommended_activity_type_id", referencedColumnName="id")
     * })
     */
    private $recommendedActivityType;

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
     * @var \MailActivityType
     *
     * @ORM\ManyToOne(targetEntity="MailActivityType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_type_id", referencedColumnName="id")
     * })
     */
    private $activityType;

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
