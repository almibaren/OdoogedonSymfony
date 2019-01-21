<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmLeadTag
 *
 * @ORM\Table(name="crm_lead_tag", uniqueConstraints={@ORM\UniqueConstraint(name="crm_lead_tag_name_uniq", columns={"name"})}, indexes={@ORM\Index(name="IDX_95D338637C455263", columns={"write_uid"}), @ORM\Index(name="IDX_95D338634C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class CrmLeadTag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="crm_lead_tag_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true, options={"comment"="Color Index"})
     */
    private $color;

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


}
