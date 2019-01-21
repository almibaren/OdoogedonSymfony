<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmStage
 *
 * @ORM\Table(name="crm_stage", indexes={@ORM\Index(name="IDX_7E75CC517C455263", columns={"write_uid"}), @ORM\Index(name="IDX_7E75CC514C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_7E75CC51296CD8AE", columns={"team_id"})})
 * @ORM\Entity
 */
class CrmStage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="crm_stage_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Stage Name"})
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var float
     *
     * @ORM\Column(name="probability", type="float", precision=10, scale=0, nullable=false, options={"comment"="Probability (%)"})
     */
    private $probability;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="on_change", type="boolean", nullable=true, options={"comment"="Change Probability Automatically"})
     */
    private $onChange;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requirements", type="text", nullable=true, options={"comment"="Requirements"})
     */
    private $requirements;

    /**
     * @var string|null
     *
     * @ORM\Column(name="legend_priority", type="text", nullable=true, options={"comment"="Priority Management Explanation"})
     */
    private $legendPriority;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="fold", type="boolean", nullable=true, options={"comment"="Folded in Pipeline"})
     */
    private $fold;

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
     * @var \CrmTeam
     *
     * @ORM\ManyToOne(targetEntity="CrmTeam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     * })
     */
    private $team;


}
