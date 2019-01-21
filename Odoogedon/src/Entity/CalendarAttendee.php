<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarAttendee
 *
 * @ORM\Table(name="calendar_attendee", indexes={@ORM\Index(name="IDX_1432F50F7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_1432F50F4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_1432F50F71F7E88B", columns={"event_id"}), @ORM\Index(name="IDX_1432F50F9393F8FE", columns={"partner_id"})})
 * @ORM\Entity
 */
class CalendarAttendee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="calendar_attendee_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="common_name", type="string", nullable=true, options={"comment"="Common name"})
     */
    private $commonName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", nullable=true, options={"comment"="Email"})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="availability", type="string", nullable=true, options={"comment"="Free/Busy"})
     */
    private $availability;

    /**
     * @var string|null
     *
     * @ORM\Column(name="access_token", type="string", nullable=true, options={"comment"="Invitation Token"})
     */
    private $accessToken;

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
     * @var \CalendarEvent
     *
     * @ORM\ManyToOne(targetEntity="CalendarEvent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     * })
     */
    private $event;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;


}
