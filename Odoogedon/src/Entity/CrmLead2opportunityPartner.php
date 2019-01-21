<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmLead2opportunityPartner
 *
 * @ORM\Table(name="crm_lead2opportunity_partner", indexes={@ORM\Index(name="crm_lead2opportunity_partner_team_id_index", columns={"team_id"}), @ORM\Index(name="crm_lead2opportunity_partner_user_id_index", columns={"user_id"}), @ORM\Index(name="IDX_DCE542D97C455263", columns={"write_uid"}), @ORM\Index(name="IDX_DCE542D94C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_DCE542D99393F8FE", columns={"partner_id"})})
 * @ORM\Entity
 */
class CrmLead2opportunityPartner
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="crm_lead2opportunity_partner_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Conversion Action"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", nullable=false, options={"comment"="Related Customer"})
     */
    private $action;

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
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;

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
