<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingCategoryRel
 *
 * @ORM\Table(name="meeting_category_rel", uniqueConstraints={@ORM\UniqueConstraint(name="meeting_category_rel_event_id_type_id_key", columns={"event_id", "type_id"})}, indexes={@ORM\Index(name="meeting_category_rel_event_id_idx", columns={"event_id"}), @ORM\Index(name="meeting_category_rel_type_id_idx", columns={"type_id"})})
 * @ORM\Entity
 */
class MeetingCategoryRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="meeting_category_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CalendarEventType
     *
     * @ORM\ManyToOne(targetEntity="CalendarEventType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var \CalendarEvent
     *
     * @ORM\ManyToOne(targetEntity="CalendarEvent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     * })
     */
    private $event;


}
