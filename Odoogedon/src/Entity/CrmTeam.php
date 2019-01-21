<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmTeam
 *
 * @ORM\Table(name="crm_team", indexes={@ORM\Index(name="IDX_AB3C84AE5E564AE2", columns={"alias_id"}), @ORM\Index(name="IDX_AB3C84AE7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_AB3C84AE4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_AB3C84AEA76ED395", columns={"user_id"}), @ORM\Index(name="IDX_AB3C84AE979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class CrmTeam
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="crm_team_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Sales Channel"})
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_to", type="string", nullable=true, options={"comment"="Reply-To"})
     */
    private $replyTo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true, options={"comment"="Color Index"})
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="team_type", type="string", nullable=false, options={"comment"="Channel Type"})
     */
    private $teamType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dashboard_graph_model", type="string", nullable=true, options={"comment"="Content"})
     */
    private $dashboardGraphModel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dashboard_graph_group", type="string", nullable=true, options={"comment"="Group by"})
     */
    private $dashboardGraphGroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dashboard_graph_period", type="string", nullable=true, options={"comment"="Scale"})
     */
    private $dashboardGraphPeriod;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_last_post", type="datetime", nullable=true, options={"comment"="Last Message Date"})
     */
    private $messageLastPost;

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
     * @var bool|null
     *
     * @ORM\Column(name="use_leads", type="boolean", nullable=true, options={"comment"="Leads"})
     */
    private $useLeads;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_opportunities", type="boolean", nullable=true, options={"comment"="Pipeline"})
     */
    private $useOpportunities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dashboard_graph_group_pipeline", type="string", nullable=true, options={"comment"="Group by"})
     */
    private $dashboardGraphGroupPipeline;

    /**
     * @var \MailAlias
     *
     * @ORM\ManyToOne(targetEntity="MailAlias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alias_id", referencedColumnName="id")
     * })
     */
    private $alias;

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
