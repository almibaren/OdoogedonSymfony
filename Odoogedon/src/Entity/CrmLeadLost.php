<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmLeadLost
 *
 * @ORM\Table(name="crm_lead_lost", indexes={@ORM\Index(name="IDX_E0D93C5D7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_E0D93C5D4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_E0D93C5DB492C624", columns={"lost_reason_id"})})
 * @ORM\Entity
 */
class CrmLeadLost
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="crm_lead_lost_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \CrmLostReason
     *
     * @ORM\ManyToOne(targetEntity="CrmLostReason")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lost_reason_id", referencedColumnName="id")
     * })
     */
    private $lostReason;


}
