<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MergeOpportunityRel
 *
 * @ORM\Table(name="merge_opportunity_rel", uniqueConstraints={@ORM\UniqueConstraint(name="merge_opportunity_rel_merge_id_opportunity_id_key", columns={"merge_id", "opportunity_id"})}, indexes={@ORM\Index(name="merge_opportunity_rel_merge_id_idx", columns={"merge_id"}), @ORM\Index(name="merge_opportunity_rel_opportunity_id_idx", columns={"opportunity_id"})})
 * @ORM\Entity
 */
class MergeOpportunityRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="merge_opportunity_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CrmLead
     *
     * @ORM\ManyToOne(targetEntity="CrmLead")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="opportunity_id", referencedColumnName="id")
     * })
     */
    private $opportunity;

    /**
     * @var \CrmMergeOpportunity
     *
     * @ORM\ManyToOne(targetEntity="CrmMergeOpportunity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="merge_id", referencedColumnName="id")
     * })
     */
    private $merge;


}
