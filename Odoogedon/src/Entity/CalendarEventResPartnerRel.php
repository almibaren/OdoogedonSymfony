<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarEventResPartnerRel
 *
 * @ORM\Table(name="calendar_event_res_partner_rel", uniqueConstraints={@ORM\UniqueConstraint(name="calendar_event_res_partner_re_calendar_event_id_res_partner_key", columns={"calendar_event_id", "res_partner_id"})}, indexes={@ORM\Index(name="calendar_event_res_partner_rel_calendar_event_id_idx", columns={"calendar_event_id"}), @ORM\Index(name="calendar_event_res_partner_rel_res_partner_id_idx", columns={"res_partner_id"})})
 * @ORM\Entity
 */
class CalendarEventResPartnerRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="calendar_event_res_partner_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_partner_id", referencedColumnName="id")
     * })
     */
    private $resPartner;

    /**
     * @var \CalendarEvent
     *
     * @ORM\ManyToOne(targetEntity="CalendarEvent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="calendar_event_id", referencedColumnName="id")
     * })
     */
    private $calendarEvent;


}
