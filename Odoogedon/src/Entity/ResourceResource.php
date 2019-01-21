<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResourceResource
 *
 * @ORM\Table(name="resource_resource", indexes={@ORM\Index(name="IDX_121D3EBB7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_121D3EBB4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_121D3EBBA40A2C8", columns={"calendar_id"}), @ORM\Index(name="IDX_121D3EBBA76ED395", columns={"user_id"}), @ORM\Index(name="IDX_121D3EBB979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class ResourceResource
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="resource_resource_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="resource_type", type="string", nullable=false, options={"comment"="Resource Type"})
     */
    private $resourceType;

    /**
     * @var float
     *
     * @ORM\Column(name="time_efficiency", type="float", precision=10, scale=0, nullable=false, options={"comment"="Efficiency Factor"})
     */
    private $timeEfficiency;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
