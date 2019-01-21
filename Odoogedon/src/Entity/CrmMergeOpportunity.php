<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmMergeOpportunity
 *
 * @ORM\Table(name="crm_merge_opportunity", indexes={@ORM\Index(name="crm_merge_opportunity_user_id_index", columns={"user_id"}), @ORM\Index(name="crm_merge_opportunity_team_id_index", columns={"team_id"}), @ORM\Index(name="IDX_B27DB4B47C455263", columns={"write_uid"}), @ORM\Index(name="IDX_B27DB4B44C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class CrmMergeOpportunity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="crm_merge_opportunity_id_seq", allocationSize=1, initialValue=1)
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
     * @var \CrmTeam
     *
     * @ORM\ManyToOne(targetEntity="CrmTeam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     * })
     */
    private $team;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
