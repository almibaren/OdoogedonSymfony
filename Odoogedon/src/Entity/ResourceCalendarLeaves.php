<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResourceCalendarLeaves
 *
 * @ORM\Table(name="resource_calendar_leaves", indexes={@ORM\Index(name="IDX_788D09DA7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_788D09DA4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_788D09DA89329D25", columns={"resource_id"}), @ORM\Index(name="IDX_788D09DAA40A2C8", columns={"calendar_id"}), @ORM\Index(name="IDX_788D09DA979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class ResourceCalendarLeaves
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="resource_calendar_leaves_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Reason"})
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="datetime", nullable=false, options={"comment"="Start Date"})
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_to", type="datetime", nullable=false, options={"comment"="End Date"})
     */
    private $dateTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tz", type="string", nullable=true, options={"comment"="Timezone"})
     */
    private $tz;

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
     * @var \ResourceResource
     *
     * @ORM\ManyToOne(targetEntity="ResourceResource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_id", referencedColumnName="id")
     * })
     */
    private $resource;

    /**
     * @var \ResourceCalendar
     *
     * @ORM\ManyToOne(targetEntity="ResourceCalendar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="calendar_id", referencedColumnName="id")
     * })
     */
    private $calendar;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
