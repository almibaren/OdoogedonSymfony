<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarAlarmCalendarEventRel
 *
 * @ORM\Table(name="calendar_alarm_calendar_event_rel", uniqueConstraints={@ORM\UniqueConstraint(name="calendar_alarm_calendar_event_calendar_event_id_calendar_al_key", columns={"calendar_event_id", "calendar_alarm_id"})}, indexes={@ORM\Index(name="calendar_alarm_calendar_event_rel_calendar_event_id_idx", columns={"calendar_event_id"}), @ORM\Index(name="calendar_alarm_calendar_event_rel_calendar_alarm_id_idx", columns={"calendar_alarm_id"})})
 * @ORM\Entity
 */
class CalendarAlarmCalendarEventRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="calendar_alarm_calendar_event_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CalendarAlarm
     *
     * @ORM\ManyToOne(targetEntity="CalendarAlarm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="calendar_alarm_id", referencedColumnName="id")
     * })
     */
    private $calendarAlarm;

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
