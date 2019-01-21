<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmLeadTagRel
 *
 * @ORM\Table(name="crm_lead_tag_rel", uniqueConstraints={@ORM\UniqueConstraint(name="crm_lead_tag_rel_lead_id_tag_id_key", columns={"lead_id", "tag_id"})}, indexes={@ORM\Index(name="crm_lead_tag_rel_lead_id_idx", columns={"lead_id"}), @ORM\Index(name="crm_lead_tag_rel_tag_id_idx", columns={"tag_id"})})
 * @ORM\Entity
 */
class CrmLeadTagRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="crm_lead_tag_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CrmLeadTag
     *
     * @ORM\ManyToOne(targetEntity="CrmLeadTag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tag_id", referencedColumnName="id")
     * })
     */
    private $tag;

    /**
     * @var \CrmLead
     *
     * @ORM\ManyToOne(targetEntity="CrmLead")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lead_id", referencedColumnName="id")
     * })
     */
    private $lead;


}
